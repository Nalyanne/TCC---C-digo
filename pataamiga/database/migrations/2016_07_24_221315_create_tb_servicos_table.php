<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbServicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_servicos', function(Blueprint $table)
		{
			$table->increments('cod_servico');
			$table->string('servico', 50);
			$table->string('descricao', 120);
			$table->float('preco', 10, 0);
			$table->time('duracao');
			$table->date('validade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_servicos');
	}

}
