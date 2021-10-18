<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Common\ConstModel;
use App\Models\dao\SidebarMasterDao;

class SidebarMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::connection(ConstModel::DATABASE_1)->delete("delete from sidebar_master");
    	
    	DB::connection(ConstModel::DATABASE_1)->table('sidebar_master')->insert([
    		// Home
    		[
    			'sidebar_master_id' => 100, 
    			'sidebar_section_master_id' => 1, 
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT, 
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Home',
    			'icon_master_id' => 149,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 1000, 
    			'created_at' => date('Y-m-d H:i:s'), 
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 100101,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 100,
    			'title' => 'Dashboard',
    			'icon_master_id' => 0,
    			'url' => 'sample/dashboard/dashboard',
    			'default_menu_flag' => true,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 1000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 100102,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 100,
    			'title' => 'Dashboard2',
    			'icon_master_id' => 0,
    			'url' => 'sample/dashboard/dashboard2',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 1000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 100103,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 100,
    			'title' => 'Dashboard3',
    			'icon_master_id' => 0,
    			'url' => 'sample/dashboard/dashboard3',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 1000003,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// Forms
    		[
    			'sidebar_master_id' => 200,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Forms',
    			'icon_master_id' => 87,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 200101,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 200,
    			'title' => 'General Form',
    			'icon_master_id' => 0,
    			'url' => 'sample/form/form',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 200102,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 200,
    			'title' => 'Advanced Components',
    			'icon_master_id' => 0,
    			'url' => 'sample/form/advanced',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 200103,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 200,
    			'title' => 'Form Validation',
    			'icon_master_id' => 0,
    			'url' => 'sample/form/validation',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000003,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 200104,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 200,
    			'title' => 'Form Wizard',
    			'icon_master_id' => 0,
    			'url' => 'sample/form/wizards',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000004,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' =>  200105,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 200,
    			'title' => 'Form Upload',
    			'icon_master_id' => 0,
    			'url' => 'sample/form/upload',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000005,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' =>  200106,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 200,
    			'title' => 'Form Buttons',
    			'icon_master_id' => 0,
    			'url' => 'sample/form/buttons',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 2000006,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// UI Elements
    		[
    			'sidebar_master_id' => 300,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'UI Elements',
    			'icon_master_id' => 84,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300101,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'General Elements',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/general_elements',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300102,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Media Gallery',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/media_gallery',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300103,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Typography',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/typography',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000003,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300104,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Icons',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/icons',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000004,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300105,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Glyphicons',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/glyphicons',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000005,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300106,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Widgets',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/Widgets',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000006,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300107,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Invoice',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/invoice',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000007,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300108,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Inbox',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/inbox',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000008,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 300109,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 300,
    			'title' => 'Calendar',
    			'icon_master_id' => 0,
    			'url' => 'sample/ui/calendar',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 3000009,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// Tables
    		[
    			'sidebar_master_id' => 400,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Tables',
    			'icon_master_id' => 276,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 4000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 400101,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 400,
    			'title' => 'Tables',
    			'icon_master_id' => 0,
    			'url' => 'sample/tables/tables',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 4000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 400102,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 400,
    			'title' => 'Table Dynamic',
    			'icon_master_id' => 0,
    			'url' => 'sample/tables/dynamic',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 4000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// Data Presentation
    		[
    			'sidebar_master_id' => 500,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Data Presentation',
    			'icon_master_id' => 14,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 5000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 500101,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 500,
    			'title' => 'Chart JS',
    			'icon_master_id' => 0,
    			'url' => 'sample/presentation/chartjs',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 5000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 500102,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 500,
    			'title' => 'Chart JS2',
    			'icon_master_id' => 0,
    			'url' => 'sample/presentation/chartjs2',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 5000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 500103,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 500,
    			'title' => 'Moris JS',
    			'icon_master_id' => 0,
    			'url' => 'sample/presentation/morisjs',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 5000003,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 500104,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 500,
    			'title' => 'ECharts',
    			'icon_master_id' => 0,
    			'url' => 'sample/presentation/echarts',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 5000004,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 500105,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 500,
    			'title' => 'Other Charts',
    			'icon_master_id' => 0,
    			'url' => 'sample/presentation/other_charts',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 5000005,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// Layouts
    		[
    			'sidebar_master_id' => 600,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Layouts',
    			'icon_master_id' => 10000,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 6000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 600101,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 600,
    			'title' => 'Fixed Sidebar',
    			'icon_master_id' => 0,
    			'url' => 'sample/layouts/fixed_sidebar',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 6000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 600102,
    			'sidebar_section_master_id' => 1,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 600,
    			'title' => 'Fixed Footer',
    			'icon_master_id' => 0,
    			'url' => 'sample/layouts/fixed_footer',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 6000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// Additional Pages
    		[
    			'sidebar_master_id' => 700,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Additional Pages',
    			'icon_master_id' => 31,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 7000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 700101,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 700,
    			'title' => 'E-commerce',
    			'icon_master_id' => 0,
    			'url' => 'sample/additional/e_commerce',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 7000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 700102,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 700,
    			'title' => 'Projects',
    			'icon_master_id' => 0,
    			'url' => 'sample/additional/projects',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 7000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 700103,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 700,
    			'title' => 'Project Detail',
    			'icon_master_id' => 0,
    			'url' => 'sample/additional/project_detail',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 7000003,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 700104,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 700,
    			'title' => 'Contacts',
    			'icon_master_id' => 0,
    			'url' => 'sample/additional/contacts',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 7000004,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 700105,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 700,
    			'title' => 'Profile',
    			'icon_master_id' => 0,
    			'url' => 'sample/additional/profile',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 7000005,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		
    		// Extras
    		[
    			'sidebar_master_id' => 800,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_PARENT,
    			'parent_sidebar_master_id' => 0,
    			'title' => 'Extras',
    			'icon_master_id' => 10001,
    			'url' => null,
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 8000,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 800101,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 800,
    			'title' => '403 Error',
    			'icon_master_id' => 0,
    			'url' => 'sample/extras/page_403',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 8000001,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 800102,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 800,
    			'title' => '404 Error',
    			'icon_master_id' => 0,
    			'url' => 'sample/extras/page_404',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 8000002,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 800103,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 800,
    			'title' => '500 Error',
    			'icon_master_id' => 0,
    			'url' => 'sample/extras/page_500',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 8000003,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 800104,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 800,
    			'title' => 'Plain Page',
    			'icon_master_id' => 0,
    			'url' => 'sample/extras/plain_page',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 8000004,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 800105,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 800,
    			'title' => 'Login Page',
    			'icon_master_id' => 0,
    			'url' => 'sample/extras/login',
    			'default_menu_flag' => false,
    			'hide_header_flag' => true,
    			'hide_sidebar_flag' => true,
    			'hide_footer_flag' => true,
    			'sort' => 8000005,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    		[
    			'sidebar_master_id' => 800106,
    			'sidebar_section_master_id' => 2,
    			'sidebar_type' => SidebarMasterDao::SIDEBAR_TYPE_CHILED,
    			'parent_sidebar_master_id' => 800,
    			'title' => 'Pricing Tables',
    			'icon_master_id' => 0,
    			'url' => 'sample/extras/pricing_tables',
    			'default_menu_flag' => false,
    			'hide_header_flag' => false,
    			'hide_sidebar_flag' => false,
    			'hide_footer_flag' => false,
    			'sort' => 8000006,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],
    	]);
    }
}
