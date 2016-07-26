<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbTipoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_tipo_usuario', function(Blueprint $table)
		{
			$table->increments('cod_tipo_usuario');
			$table->string('tipo_usuario', 50)->index('tipo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_tipo_usuario');
	}

}
