<?php

namespace App\Admin;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'codInterno', 'nome', 'valor', 'qnt', 'descricao', 'imagem'
    ];

    public function image($request)
    {
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $nomeImagem = Str::kebab($request->nome);
            $extensao = $request->imagem->extension();
            $arquivo = "{$nomeImagem}.{$extensao}";
            $upload = $request->imagem->storeAs('product', $arquivo);
            return $arquivo;
        }
    }

    public function arrayWithImage($request)
    {
        return [
            'codInterno' => $request->codInterno, 
            'nome' => $request->nome, 
            'valor' => $request->valor, 
            'qnt' => $request->qnt, 
            'descricao' => $request->descricao, 
            'imagem' => $this->image($request)
        ];
    }
    
    public function arrayWithOutImage($request)
    {
        return [
            'codInterno' => $request->codInterno, 
            'nome' => $request->nome, 
            'valor' => $request->valor, 
            'qnt' => $request->qnt, 
            'descricao' => $request->descricao, 
        ];
    }
}
