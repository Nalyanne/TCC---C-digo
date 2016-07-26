<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table = 'tb_especie';
    protected $primaryKey = 'cod_especie';

    public $timestamps = false;

}
