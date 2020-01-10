<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'client_id', 'product_id', 'refRent', 'qnt', 'formaPagamento'
    ];

    public function client()
    {
        return $this->belongsTo('App\Admin\Client');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Admin\Product');
    }

    public function dataRent($request)
    {
        return [
            'client_id' => Client::where('nome', $request->clientName)->first()->id,
            'product_id' => Product::where('nome', $request->productName)->first()->id,
            'refRent' => $request->refRent,
            'qnt' => $request->qnt,
            'formaPagamento' => $request->formaPagamento,
        ];
    }

}