<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbAtualizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_atualizacao', function(Blueprint $table)
		{
			$table->foreign('cod_usuario', 'tb_atualizacao_ibfk_2')->references('cod_usuario')->on('tb_usuario')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_atualizacao', function(Blueprint $table)
		{
			$table->dropForeign('tb_atualizacao_ibfk_2');
		});
	}

}
