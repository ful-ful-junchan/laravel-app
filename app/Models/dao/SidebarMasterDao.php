<?php
namespace App\Models\dao;

/**
 * 
 * @author jhorita
 *
 */
class SidebarMasterDao extends DaoBase
{
	/** サイドバー種別 */
	const SIDEBAR_TYPE_PARENT = 1;
	const SIDEBAR_TYPE_CHILED = 2;
	
	protected $table = "sidebar_master";
}