<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFuncionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_funcionario', function(Blueprint $table)
		{
			$table->increments('cod_funcionario');
			$table->string('nome', 50);
			$table->integer('id_cargo')->unsigned()->index('cod_cargo');
			$table->date('dt_nascimento');
			$table->string('CPF', 50);
			$table->string('genero', 50);
			$table->string('email', 50);
			$table->integer('telefone');
			$table->integer('CEP');
			$table->string('enderco', 120);
			$table->string('complemento', 120);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_funcionario');
	}

}
