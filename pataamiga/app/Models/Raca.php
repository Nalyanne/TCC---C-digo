<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    protected $table = 'tb_raca';
    protected $primaryKey = 'cod_raca';

    public $timestamps = false;
}
