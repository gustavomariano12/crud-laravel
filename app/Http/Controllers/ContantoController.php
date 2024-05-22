<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contato;
class ContantoController extends Controller
{
    public function create(Request $req){
        $contato = new Contato();
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->email = $req->email;
        $contato->save();
        return redirect()->back();
    }
}
