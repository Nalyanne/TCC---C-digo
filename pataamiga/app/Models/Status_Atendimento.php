<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status_Atendimento extends Model
{




 protected $table = 'tb_status_atendimento';

    //Dizendo ao laravel o nome correto do id (identificador) da tabela.

	protected $primaryKey='cod_status_atend';

	protected $fillable=['Status_Atendimento'];

}