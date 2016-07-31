<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbAtendimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_atendimento', function(Blueprint $table)
		{
			$table->increments('cod_atendimento');
			$table->integer('cod_animal')->unsigned()->index('cod_animal');
			$table->integer('cod_funcionario')->unsigned()->index('cod_funcionario');
			$table->integer('cod_status_atend')->unsigned()->index('cod_status_atend');
			$table->integer('cod_servico')->unsigned()->index('cod_servico');
			$table->time('hora_servico')->index('hora_servico_2');
			$table->date('data_servico');
			$table->string('observacao', 120);
			$table->integer('cod_cliente')->index('fk_tb_atendimento_tb_cliente1_idx');
			$table->float('valor', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_atendimento');
	}

}
