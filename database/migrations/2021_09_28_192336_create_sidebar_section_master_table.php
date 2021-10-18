<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Common\ConstModel;

class CreateSidebarSectionMasterTable extends Migration
{
    private $table = 'sidebar_section_master';
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists($this->table);
		
		Schema::connection(ConstModel::DATABASE_1)->create($this->table, function (Blueprint $table) {
			$table->engine = ConstModel::DB_ENGINE;
			$table->charset = ConstModel::DB_CHARSET;
			$table->collation = ConstModel::DB_COLLATION;
			
			$table->id('sidebar_section_master_id')->unsigned()->autoIncrement()->comment('サイドバーセクションID');
			$table->string('title', 200)->comment('タイトル');
			$table->integer('sort')->unsigned()->comment('並び順（昇順）');
			$table->timestamps();
			$table->softDeletesNew();
		});
		
		// ALTER 文を実行しテーブルにコメントを設定
		DB::statement("ALTER TABLE {$this->table} COMMENT 'サイドバーセクションマスタ'");
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists($this->table);
	}
}
