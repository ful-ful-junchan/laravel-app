<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Common\ConstModel;

class CreateIconMasterTable extends Migration
{
    private $table = 'icon_master';
	
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
			
			$table->id('icon_master_id')->unsigned()->autoIncrement()->comment('アイコンID');
			$table->tinyInteger('icon_type')->unsigned()->comment('アイコン種別（1:Font Awesome、2:Glyphicons）');
			$table->string('class_name', 200)->comment('アイコンクラス名');
			$table->timestamps();
			$table->softDeletesNew();
		});
		
		// ALTER 文を実行しテーブルにコメントを設定
		DB::statement("ALTER TABLE {$this->table} COMMENT 'アイコンマスタ'");
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
