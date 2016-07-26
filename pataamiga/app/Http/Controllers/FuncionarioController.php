<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
     public function index(){

        $ListarFuncionarios = Funcionario::get();

    	return view('funcionario.index',['funcionarios'=>$ListarFuncionarios]);
    }

    public function novo (){

    	return view('funcionario.novoFuncionario');
    }	


    public function pesquisar (){
    	return view('funcionario.pesquisarFuncionario');
    }

    public function alterar(){
    	return view('funcionario.alterarFuncionario');

    }

    public function deletar(){
    	return view('funcionario.deletarFuncionario');
    }
}
