<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $data = ['nome', 'email', 'telefone']; // variavel manipula os dados da tabela no banco
}
