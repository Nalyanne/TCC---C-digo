<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'tb_cliente';
    protected $primaryKey = 'cpf';

    public $timestamps = false;
}
