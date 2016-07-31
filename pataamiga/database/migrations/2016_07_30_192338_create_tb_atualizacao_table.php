<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbAtualizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_atualizacao', function(Blueprint $table)
		{
			$table->increments('cod_atualizacao');
			$table->string('atualizacao');
			$table->integer('cod_usuario')->unsigned()->index('cod_usario');
			$table->dateTime('data_hora');
			$table->integer('cod_atendimento')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_atualizacao');
	}

}
