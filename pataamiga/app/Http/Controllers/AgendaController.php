<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Agenda;

class AgendaController extends Controller
{
     public function index(){
    	return view('agenda.index');
    }


    
}

