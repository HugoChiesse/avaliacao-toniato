<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nome', 'rg', 'cpf', 'cep', 'rua', 'numero', 'complemento', 'bairro', 'cidade', 'uf', 'ibge', 'telefone', 'celular', 'email'
    ];
}
