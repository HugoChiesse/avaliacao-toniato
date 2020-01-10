<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Rent;
use App\Admin\Product;
use App\Admin\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lista de Locação';
        $registros = Rent::with('client', 'product')->orderBy('created_at', 'desc')->get();
        return view('admin.rent.index', compact('title', 'registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Locação';
        $refRent = uniqid();
        return view('admin.rent.create', compact('title', 'refRent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rent $rent)
    {
        $productStock = Product::where('nome', $request->productName)->first();
        $productRent = empty(Rent::where('product_id', $productStock->id)->first()) ? 0 : Rent::where('product_id', $productStock->id)->first();

        $rentQnt = empty($productRent->qnt) ? 0 : $productRent->qnt;
        try {
            if (($request->qnt + $rentQnt) < $productStock->qnt) {

                $registro = Rent::create($rent->dataRent($request));
                \Session::flash('success', 'Registro gravado com sucesso!');
            }
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível gravar a locação em nossa base de dados. Se o erro persistir, entre em contato com o administrador do sistema');
        }
        return redirect()->route('rent');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Editar Locação';
        $registro = Rent::find($id);
        $client = Client::find($registro->client_id)->nome;
        $product = Product::find($registro->product_id)->nome;
        return view('admin.rent.edit', compact('title', 'registro', 'client', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent, $id)
    {
        $registro = Rent::find($id);
        $productStock = Product::where('nome', $request->productName)->first();
        $productRent = empty(Rent::where('product_id', $productStock->id)->first()) ? 0 : Rent::where('product_id', $productStock->id)->first();

        $rentQnt = empty($productRent->qnt) ? 0 : $productRent->qnt;
        try {
            if (($request->qnt + $rentQnt) < $productStock->qnt) {
                $registro->update($rent->dataRent($request));
                \Session::flash('success', 'Registro atualizado com sucesso!');
            }
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível atualizar os dados da locação. Se o erro persistir, entre em contato com o administrador!');
        }
        return redirect()->route('rent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Rent::find($id);
        try {
            $registro->delete();
            \Session::flash('success', 'Registro deletado com sucesso!');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível deletar a locação, se o erro persistir, entre em contato com o administrador do sistema!');
        }
        return redirect()->back();
    }
}
