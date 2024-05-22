<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App/Models/Contato;
class ContantoController extends Controller
{
    public function post(Request $req, Response $res){
        $contato = new Contato();
        $contato = $nome = $req->$nome;
        $contato = $telefone = $req->$telefone;
        $contato = $email = $req->$email;
        $contato->save();
        return response()->json($contato);
    }
}
