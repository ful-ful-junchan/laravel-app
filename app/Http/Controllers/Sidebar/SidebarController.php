<?php

namespace App\Http\Controllers\Sidebar;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use App\Models\Sidebar\SidebarModel;

/**
 * 
 * @author jhorita
 *
 */
class SidebarController extends AppController
{
	/**
	 *  サイドバー一覧
	 */
    public function list()
    {
    	$sidebarModel = new SidebarModel();
    	$sidebarList = $sidebarModel->GetSidebarList();
    	
    	$this->setView("sidebarList", $sidebarList)
    	->setView("Title", self::TITLE_LIST);
    	
    	return view("sidebar/list", $this->getView());
    }
}
