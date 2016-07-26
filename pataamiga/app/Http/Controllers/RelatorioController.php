<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Relatorio;


class RelatorioController extends Controller
{
     public function index(){

    	return view('relatorio.index');
    }
}
