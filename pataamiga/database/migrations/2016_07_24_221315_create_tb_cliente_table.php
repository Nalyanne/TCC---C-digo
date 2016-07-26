<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_cliente', function(Blueprint $table)
		{
			$table->integer('cod_cliente', true);
			$table->string('cpf', 15);
			$table->string('nome', 50);
			$table->date('dt_nascimento');
			$table->string('genero', 50);
			$table->string('email', 100);
			$table->string('telefone', 20);
			$table->string('CEP', 11);
			$table->string('endereco', 120);
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
		Schema::drop('tb_cliente');
	}

}
