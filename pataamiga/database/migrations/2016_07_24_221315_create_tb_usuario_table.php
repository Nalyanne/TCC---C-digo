<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_usuario', function(Blueprint $table)
		{
			$table->increments('cod_usuario');
			$table->integer('cod_funcionario')->unsigned()->index('cod_funcionario_2');
			$table->integer('cod_tipo_usuario')->unsigned()->index('cod_tipo_usuario');
			$table->string('login', 50);
			$table->string('senha', 50);
			$table->index(['cod_funcionario','cod_tipo_usuario'], 'cod_funcionario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_usuario');
	}

}
