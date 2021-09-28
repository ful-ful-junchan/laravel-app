<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

abstract class AppController extends Controller
{
	/** @var array テンプレート返却レスポンス */
    protected $response = [];
    
    /** @var Request リクエストパラメータ情報 */
    protected $request;
    
    /** @var array サイドバーリスト */
    private $sidebarList = [];
    
    /** @var boolean ヘッダー非表示フラグ */
    private $isHideHeader = false;
    
    /** @var boolean サイドバー非表示フラグ */
    private $isHideSidebar = false;
    
    /** @var boolean フッター非表示フラグ */
    private $isHideFooter = false;

    /**
     * コンストラクタ
     * @param Request $request
     */
    public function __construct(Request $request)
    {
    	$this->request = $request;
    	$this->sidebarList = [
    		[
    			// Section
    			'sectionId' => 1,
    			'sectionTitle' => 'General',
    			'sidebarList' => [
    				[
    					'menuId' => 1,
    					'menu' => 'Home',
    					'directory' => 'dashboard',
    					'icon' => 'fa-home',
    					'url' => '',
    					'links' => [
    						'dashboard' => [
    							'linkId' => 1101,
    							'url' => 'sample/dashboard/dashboard',
    							'title' => 'Dashboard'
    						],
    						'dashboard2' => [
    							'linkId' => 1102,
    							'url' => 'sample/dashboard/dashboard2',
    							'title' => 'Dashboard2'
    						],
    						'dashboard3' => [
    							'linkId' => 1103,
    							'url' => 'sample/dashboard/dashboard3',
    							'title' => 'Dashboard3'
    						],
    					],
    				],
    				[
    					'menuId' => 2,
    					'menu' => 'Forms',
    					'directory' => 'form',
    					'icon' => 'fa-edit',
    					'url' => '',
    					'links' => [
    						'form' => [
    							'linkId' => 1201,
    							'url' => 'sample/form/form',
    							'title' => 'General Form'
    						],
    						'advanced' => [
    							'linkId' => 1202,
    							'url' => 'sample/form/advanced',
    							'title' => 'Advanced Components'
    						],
    						'validation' => [
    							'linkId' => 1203,
    							'url' => 'sample/form/validation',
    							'title' => 'Form Validation'
    						],
    						'wizards' => [
    							'linkId' => 1204,
    							'url' => 'sample/form/wizards',
    							'title' => 'Form Wizard'
    						],
    						'upload' => [
    							'linkId' => 1205,
    							'url' => 'sample/form/upload',
    							'title' => 'Form Upload'
    						],
    						'buttons' => [
    							'linkId' => 1206,
    							'url' => 'sample/form/buttons',
    							'title' => 'Form Buttons'
    						],
    					],
    				],
    				[
    					'menuId' => 3,
    					'menu' => 'UI Elements',
    					'directory' => 'ui',
    					'icon' => 'fa-desktop',
    					'url' => '',
    					'links' => [
    						'general_elements' => [
    							'linkId' => 1301,
    							'url' => 'sample/ui/general_elements',
    							'title' => 'General Elements'
    						],
    						'media_gallery' => [
    							'linkId' => 1302,
    							'url' => 'sample/ui/media_gallery',
    							'title' => 'Media Gallery'
    						],
    						'typography' => [
    							'linkId' => 1303,
    							'url' => 'sample/ui/typography',
    							'title' => 'Typography'
    						],
    						'icons' => [
    							'linkId' => 1304,
    							'url' => 'sample/ui/icons',
    							'title' => 'Icons'
    						],
    						'glyphicons' => [
    							'linkId' => 1305,
    							'url' => 'sample/ui/glyphicons',
    							'title' => 'Glyphicons'
    						],
    						'widgets' => [
    							'linkId' => 1306,
    							'url' => 'sample/ui/widgets',
    							'title' => 'Widgets'
    						],
    						'invoice' => [
    							'linkId' => 1307,
    							'url' => 'sample/ui/invoice',
    							'title' => 'Invoice'
    						],
    						'inbox' => [
    							'linkId' => 1308,
    							'url' => 'sample/ui/inbox',
    							'title' => 'Inbox'
    						],
    						'calendar' => [
    							'linkId' => 1309,
    							'url' => 'sample/ui/calendar',
    							'title' => 'Calendar'
    						],
    					],
    				],
    				[
    					'menuId' => 4,
    					'menu' => 'Tables',
    					'directory' => 'tables',
    					'icon' => 'fa-table',
    					'url' => '',
    					'links' => [
    						'form' => [
    							'linkId' => 1401,
    							'url' => 'sample/tables/tables',
    							'title' => 'Tables'
    						],
    						'dynamic' => [
    							'linkId' => 1402,
    							'url' => 'sample/tables/dynamic',
    							'title' => 'Table Dynamic'
    						],
    					],
    				],
    				[
    					'menuId' => 5,
    					'menu' => 'Data Presentation',
    					'directory' => 'presentation',
    					'icon' => 'fa-bar-chart-o',
    					'url' => '',
    					'links' => [
    						'chartjs' => [
    							'linkId' => 1501,
    							'url' => 'sample/presentation/chartjs',
    							'title' => 'Chart JS'
    						],
    						'chartjs2' => [
    							'linkId' => 1502,
    							'url' => 'sample/presentation/chartjs2',
    							'title' => 'Chart JS2'
    						],
    						'morisjs' => [
    							'linkId' => 1503,
    							'url' => 'sample/presentation/morisjs',
    							'title' => 'Moris JS'
    						],
    						'echarts' => [
    							'linkId' => 1504,
    							'url' => 'sample/presentation/echarts',
    							'title' => 'ECharts'
    						],
    						'other_charts' => [
    							'linkId' => 1505,
    							'url' => 'sample/presentation/other_charts',
    							'title' => 'Other Charts'
    						],
    					],
    				],
    				[
    					'menuId' => 6,
    					'menu' => 'Layouts',
    					'directory' => 'layouts',
    					'icon' => 'fa-clone',
    					'url' => '',
    					'links' => [
    						'fixed_sidebar' => [
    							'linkId' => 1601,
    							'url' => 'sample/layouts/fixed_sidebar',
    							'title' => 'Fixed Sidebar'
    						],
    						'fixed_footer' => [
    							'linkId' => 1602,
    							'url' => 'sample/layouts/fixed_footer',
    							'title' => 'Fixed Footer'
    						],
    					],
    				],
    			],
    		],
    		[
    			// Section
    			'sectionId' => 2,
    			'sectionTitle' => 'Live On',
    			'sidebarList' => [
    				[
    					'menuId' => 1,
    					'menu' => 'Additional Pages',
    					'directory' => 'additional',
    					'icon' => 'fa-bug',
    					'url' => '',
    					'links' => [
    						'e_commerce' => [
    							'linkId' => 2101,
    							'url' => 'sample/additional/e_commerce',
    							'title' => 'E-commerce'
    						],
    						'projects' => [
    							'linkId' => 2102,
    							'url' => 'sample/additional/projects',
    							'title' => 'Projects'
    						],
    						'project_detail' => [
    							'linkId' => 2103,
    							'url' => 'sample/additional/project_detail',
    							'title' => 'Project Detail'
    						],
    						'contacts' => [
    							'linkId' => 2104,
    							'url' => 'sample/additional/contacts',
    							'title' => 'Contacts'
    						],
    						'profile' => [
    							'linkId' => 2105,
    							'url' => 'sample/additional/profile',
    							'title' => 'Profile'
    						],
    					],
    				],
    				[
    					'menuId' => 2,
    					'menu' => 'Extras',
    					'directory' => 'extras',
    					'icon' => 'fa-windows',
    					'url' => '',
    					'links' => [
    						'page_403' => [
    							'linkId' => 2201,
    							'url' => 'sample/extras/page_403',
    							'title' => '403 Error',
    							'hideHeader' => 1,
    							'hideSidebar' => 1,
    							'hideFooter' => 1,
    						],
    						'page_404' => [
    							'linkId' => 2202,
    							'url' => 'sample/extras/page_404',
    							'title' => '404 Error',
    							'hideHeader' => 1,
    							'hideSidebar' => 1,
    							'hideFooter' => 1,
    						],
    						'page_500' => [
    							'linkId' => 2203,
    							'url' => 'sample/extras/page_500',
    							'title' => 'page_500',
    							'hideHeader' => 1,
    							'hideSidebar' => 1,
    							'hideFooter' => 1,
    						],
    						'plain_page' => [
    							'linkId' => 2204,
    							'url' => 'sample/extras/plain_page',
    							'title' => 'Plain Page',
    						],
    						'login' => [
    							'linkId' => 2205,
    							'url' => 'sample/extras/login',
    							'title' => 'Login Page',
    							'hideHeader' => 1,
    							'hideSidebar' => 1,
    							'hideFooter' => 1,
    						],
    						'pricing_tables' => [
    							'linkId' => 2206,
    							'url' => 'sample/extras/pricing_tables',
    							'title' => 'Pricing Tables'
    						],
    					],
    				],
    			],
    		],
    	];
    	$this->setView('sidebarSectionList', $this->sidebarList);
    }

    /**
     * 現在開いているメニュー情報をセットする
     * @param string $linkId
     * @return array
     */
    protected function setCurrentMenuData($linkId = 0)
    {
    	$currentLinkData = [];
    	
    	foreach($this->sidebarList as $sectionData)
    	{
    		foreach($sectionData['sidebarList'] as $menuData) 
    		{    			
    			foreach($menuData['links'] as $linkData) {
    				if ($linkId == $linkData['linkId']) {
    					$linkData['sectionId'] = $sectionData['sectionId'];
    					$linkData['menuId'] = $menuData['menuId'];
    					$linkData['hideHeader'] = array_key_exists('hideHeader', $linkData) ? $linkData['hideHeader'] : 0;
    					$linkData['hideSidebar'] = array_key_exists('hideSidebar', $linkData) ? $linkData['hideSidebar'] : 0;
    					$linkData['hideFooter'] = array_key_exists('hideFooter', $linkData) ? $linkData['hideFooter'] : 0;
    					$currentLinkData = $linkData;
    					
    					break 3;
    				}
    			}
    		}
    	}
    	
    	if (!empty($currentLinkData)) {
    		$this->setView('currentLinkData', $currentLinkData);
    		
    		$this->setHideHeaderFlag($currentLinkData['hideHeader'])
    		->setHideSidebarFlag($currentLinkData['hideSidebar'])
    		->setHideFooterFlag($currentLinkData['hideFooter']);
    	} else {
    		$currentLinkData['url'] = "sample/dashboard/dashboard";
    	}
    	
    	return $currentLinkData;
    }
    
    /**
     * ヘッダー非表示フラグをセット
     * @param boolean $flag
     * @return AppController
     */
    protected function setHideHeaderFlag($flag = false)
    {
    	$this->isHideHeader = $flag;
    	$this->setView('hideHeader', $this->isHideHeader);
    	return $this;
    }
    
    /**
     * サイドバー非表示フラグをセット
     * @param boolean $flag
     * @return AppController
     */
    protected function setHideSidebarFlag($flag = false)
    {
    	$this->isHideSidebar = $flag;
    	$this->setView('hideSidebar', $this->isHideSidebar);
    	return $this;
    }
    
    /**
     * フッター非表示フラグをセット
     * @param boolean $flag
     * @return AppController
     */
    protected function setHideFooterFlag($flag = false)
    {
    	$this->isHideFooter = $flag;
    	$this->setView('hideFooter', $this->isHideFooter);
    	return $this;
    }
    
    /**
     * テンプレート変数に値をセット
     * @param mixed $key
     * @param mixed $value
     * @return AppController
     */
    protected function setView($key, $value = null)
    {
    	$this->response[ $key ] = $value;
    	return $this;
    }
    
    /**
     * テンプレート変数を取得
     * @param mixed $key
     * @return mixed
     */
    protected function getView($key = null)
    {
    	if (!is_null($key) && array_key_exists($key, $this->response)) return $this->response[ $key ];
    	return $this->response;
    }
}
