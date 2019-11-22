<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function viewCidades(){

        $listaCidades = Cidade::all();

        
    }
}
