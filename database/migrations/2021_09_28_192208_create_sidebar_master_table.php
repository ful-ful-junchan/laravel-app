<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Common\ConstModel;

class CreateSidebarMasterTable extends Migration
{
    private $table = 'sidebar_master';
	
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
			
			$table->id('sidebar_master_id')->unsigned()->comment('サイドバーID');
			$table->bigInteger('sidebar_section_master_id', false, true)->comment('サイドバーセクションID');
			$table->tinyInteger('sidebar_type', false, true)->comment('種別（1:親メニュー、2:子メニュー）');
			$table->bigInteger('parent_sidebar_master_id', false, true)->default(0)->comment('親サイドバーID');
			$table->string('title', 200)->comment('タイトル');
			$table->bigInteger('icon_master_id', false, true)->comment('アイコンID');
			$table->string('url', 300)->comment('URL');
			$table->boolean('default_menu_flag')->default(false)->comment('デフォルトメニュー');
			$table->boolean('hide_header_flag')->default(false)->comment('ヘッダー非表示フラグ');
			$table->boolean('hide_sidebar_flag')->default(false)->comment('サイドバー非表示フラグ');
			$table->boolean('hide_footer_flag')->default(false)->comment('フッター非表示フラグ');
			$table->integer('sort')->unsigned()->comment('並び順（昇順）');
			$table->timestamps();
			$table->softDeletesNew();
		});
		
		// ALTER 文を実行しテーブルにコメントを設定
		DB::statement("ALTER TABLE {$this->table} COMMENT 'サイドバーマスタ'");
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
