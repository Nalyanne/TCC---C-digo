<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbAnimalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_animal', function(Blueprint $table)
		{
			$table->increments('cod_animal');
			$table->integer('cod_especie')->unsigned()->index('cod_especie_2');
			$table->integer('cod_raca')->unsigned()->index('cod_raca');
			$table->integer('cod_cor')->unsigned()->index('cod_cor');
			$table->integer('cod_porte')->unsigned()->index('cod_porte');
			$table->string('nome', 50);
			$table->date('dt_nascimento');
			$table->string('sexo', 20);
			$table->string('pedigree', 50);
			$table->boolean('historico', 20);
			$table->string('status', 20);
			$table->string('situacao', 20);
			$table->integer('cod_cliente')->index('fk_tb_animal_tb_cliente1_idx');
			$table->index(['cod_especie','cod_raca','cod_cor','cod_porte'], 'cod_especie');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_animal');
	}

}
