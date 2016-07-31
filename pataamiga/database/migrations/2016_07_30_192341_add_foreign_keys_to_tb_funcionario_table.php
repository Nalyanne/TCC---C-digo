<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbFuncionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_funcionario', function(Blueprint $table)
		{
			$table->foreign('cod_cargo', 'tb_funcionario_ibfk_1')->references('cod_cargo')->on('tb_cargo')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_funcionario', function(Blueprint $table)
		{
			$table->dropForeign('tb_funcionario_ibfk_1');
		});
	}

}
