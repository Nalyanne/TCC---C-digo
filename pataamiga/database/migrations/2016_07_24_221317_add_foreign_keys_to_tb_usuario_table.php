<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_usuario', function(Blueprint $table)
		{
			$table->foreign('cod_funcionario', 'tb_usuario_ibfk_1')->references('cod_funcionario')->on('tb_funcionario')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_tipo_usuario', 'tb_usuario_ibfk_2')->references('cod_tipo_usuario')->on('tb_tipo_usuario')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_usuario', function(Blueprint $table)
		{
			$table->dropForeign('tb_usuario_ibfk_1');
			$table->dropForeign('tb_usuario_ibfk_2');
		});
	}

}
