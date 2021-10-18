<?php
namespace App\Models\Sidebar;

use App\Models\ModelBase;
use App\Models\dao\SidebarSectionMasterDao;
use App\Models\dao\SidebarMasterDao;
use App\Models\dao\IconMasterDao;

/**
 * 
 * @author jhorita
 *
 */
class SidebarModel extends ModelBase
{
	protected $connection = 'sample02';
	
	/**
	 * サイドバー一覧を取得
	 */
	public function GetSidebarList()
	{
		// セクション一覧を読み込み
		$sectionMasterObject = SidebarSectionMasterDao::get();
		
		$sidebarList = [];
		if ($sectionMasterObject->count() > 0) {
			// サイドバー一覧を取得
			$sidebarMasterObject = SidebarMasterDao::get();
			$parentSidebarList = array_filter($sidebarMasterObject->toArray(), function($x) {
				if ($x['sidebar_type'] == SidebarMasterDao::SIDEBAR_TYPE_PARENT && $x['parent_sidebar_master_id'] == 0) return true;
			});
			
			// アイコン一覧を取得
			$iconMasterObject = IconMasterDao::get();
			$iconMasterList = $iconMasterObject->keyBy('icon_master_id')->toArray();
			
			// セクション情報を登録
			foreach($sectionMasterObject->toArray() as $sectionMasterData) 
			{
				$sectionMasterData['sidebarList'] = [];
				
				$sidebarList[ $sectionMasterData['sidebar_section_master_id'] ] = $sectionMasterData;
			}
			
			// 親メニュー情報を登録
			foreach($parentSidebarList as $parentSidebarData)
			{
				$sectionMasterId = $parentSidebarData['sidebar_section_master_id'];
				$sidebarMasterId = $parentSidebarData['sidebar_master_id'];
				if (!array_key_exists($parentSidebarData['icon_master_id'], $iconMasterList))
				{
					$parentSidebarData['icon_master_id'] = 232; // デフォルト
				}
				$parentSidebarData['icon_class_name'] = $iconMasterList[$parentSidebarData['icon_master_id']]['class_name'];
				$parentSidebarData['childSidebarList'] = [];
				
				$sidebarList[$sectionMasterId]['sidebarList'][$sidebarMasterId] = $parentSidebarData;
			}
			
			// 子メニュー情報を登録
			$sidebarMasterList = $sidebarMasterObject->filter(function($x) {
				if ($x['sidebar_type'] == SidebarMasterDao::SIDEBAR_TYPE_CHILED && $x['parent_sidebar_master_id'] > 0) return true;
			})->keyBy('sidebar_master_id')->toArray();
			foreach($sidebarMasterList as $sidebarMasterData)
			{
				$sectionMasterId = $sidebarMasterData['sidebar_section_master_id'];
				$sidebarMasterId = $sidebarMasterData['sidebar_master_id'];
				$parentSidebarMasterId = $sidebarMasterData['parent_sidebar_master_id'];
				
				$sidebarList[$sectionMasterId]['sidebarList'][$parentSidebarMasterId]['childSidebarList'][$sidebarMasterId] = $sidebarMasterData;
			}
		}
		
		return $sidebarList;
	}
}