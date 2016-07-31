<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbAtendimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_atendimento', function(Blueprint $table)
		{
			$table->foreign('cod_cliente', 'fk_tb_atendimento_tb_cliente1')->references('cod_cliente')->on('tb_cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cod_servico', 'tb_atendimento_ibfk_4')->references('cod_servico')->on('tb_servicos')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_status_atend', 'tb_atendimento_ibfk_5')->references('cod_status_atend')->on('tb_status_atendimento')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_animal', 'tb_atendimento_ibfk_6')->references('cod_animal')->on('tb_animal')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('cod_funcionario', 'tb_atendimento_ibfk_7')->references('cod_funcionario')->on('tb_funcionario')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_atendimento', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_atendimento_tb_cliente1');
			$table->dropForeign('tb_atendimento_ibfk_4');
			$table->dropForeign('tb_atendimento_ibfk_5');
			$table->dropForeign('tb_atendimento_ibfk_6');
			$table->dropForeign('tb_atendimento_ibfk_7');
		});
	}

}
