<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Model;

use App\Models\Animal;


class Cliente extends Model
{
    //Dizendo ao laravel o nome correto da tabela no banco de dados
    protected $table = 'tb_cliente';
    protected $primaryKey = 'cod_cliente';

    public $timestamps = false;

     protected $fillable = ['nome', 'cpf', 'dt_nascimento', 'genero','email', 'telefone','CEP','endereco','complemento'];

    public function animais() {

    		return $this->hasMany('App\Models\Animal');
    }

    public function atendimentos() {

    		return $this->hasMany('App\Models\Atendimento');
    }
}
