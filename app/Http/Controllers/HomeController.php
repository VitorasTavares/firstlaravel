<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function viewHome(){
       // $usuario = new Usuario();
       // $listaUsuarios = $usuario->all();

       // dd($listaUsuarios);
       
       $listaUsuarios = Usuario::all();

        return view('home',["listaUsuarios"=>$listaUsuarios]);
    }

public function request(Request $request, $id=0){
    dd($id==0);
    echo "Passa alguma coisa ai rapaz";
}


public function exibirFormulario(){
        return view('formulario');
}

public function cadastrarFormulario(Request $request){
    dd($request->nome);

}

}


