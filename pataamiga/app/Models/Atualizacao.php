<?php namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

use Illuminate\Database\Eloquent\Model;

use App\Models\Status_Atendimento;
use App\Models\Cliente;
use App\Models\Animal;
use App\Models\Servico;

class atualizacao extends Model
{


protected $table='tb_atualizacao';
protected $primaryKey ='cod_atualizacao';


public $timestamps=false;

protected $fillable=['cod_atendimento','atualizacao','cod_usuario', 'data_hora'];

	public function atendimento(){
		return $this->BelongsTo(Atendimento::class,'cod_atendimento');
	}

	public function usuario(){
		return $this->BelongsTo('App\Models\Usuario','cod_usuario');
	}

	public function getDataHoraBrAttribute(){
        $date = new \DateTime($this->attributes['data_hora']);
        return $date->format('d/m/Y H:i:s');
    }


}