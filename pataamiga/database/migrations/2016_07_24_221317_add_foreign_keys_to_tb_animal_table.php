<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbAnimalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_animal', function(Blueprint $table)
		{
			$table->foreign('cod_cliente', 'fk_tb_animal_tb_cliente1')->references('cod_cliente')->on('tb_cliente')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('cod_especie', 'tb_animal_ibfk_1')->references('cod_especie')->on('tb_especie')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_raca', 'tb_animal_ibfk_2')->references('cod_raca')->on('tb_raca')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_porte', 'tb_animal_ibfk_4')->references('cod_porte')->on('tb_porte')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_cor', 'tb_animal_ibfk_5')->references('cod_cor')->on('tb_cor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_animal', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_animal_tb_cliente1');
			$table->dropForeign('tb_animal_ibfk_1');
			$table->dropForeign('tb_animal_ibfk_2');
			$table->dropForeign('tb_animal_ibfk_4');
			$table->dropForeign('tb_animal_ibfk_5');
		});
	}

}
