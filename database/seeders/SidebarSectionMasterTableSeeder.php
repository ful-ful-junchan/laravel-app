<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Common\ConstModel;

class SidebarSectionMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::connection(ConstModel::DATABASE_1)->delete("delete from sidebar_section_master");
    	
    	DB::connection(ConstModel::DATABASE_1)->table('sidebar_section_master')->insert([
    		[ 'sidebar_section_master_id' => 1, 'title' => 'GENERAL', 'sort' => 100, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ],
    		[ 'sidebar_section_master_id' => 2, 'title' => 'Live On', 'sort' => 90, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ],
    	]);
    }
}
