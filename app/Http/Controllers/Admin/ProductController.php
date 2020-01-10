<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Relação de Produtos';
        $registros = Product::orderBy('nome')->get();
        return view('admin.product.index', compact('title', 'registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Produto';
        return view('admin.product.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        try {
            if ($request->hasFile('imagem')) {
                $registro = Product::create($product->arrayWithImage($request));
            } else {
                $registro = Product::create($product->arrayWithOutImage($request));
            }
            \Session::flash('success', 'Registro gravado com sucesso!');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível salvas o produto em nossa base de dados, se o erro persistir, entre em contato com o adminsitrador do sistema');
        }
        return redirect()->route('product');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Editar Produto';
        $registro = Product::find($id);
        return view('admin.product.edit', compact('title', 'registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $registro = Product::find($id);
        try {
            if ($request->hasFile('imagem')) {
                $registro->update($product->arrayWithImage($request));
            } else {
                $registro->update($product->arrayWithOutImage($request));
            }
            
            \Session::flash('success', 'Registro atualizado com sucesso!');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível atualizar o produto. Se o erro persistir, entre em contato com o administrador do sistema!');
        }
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Product::find($id);
        try {
            $registro->delete();
            \Session::flash('success', 'Registro deletado com sucesso!');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível deletar o produto. Verifique se ele já foi alugado, caso não, entre em contato com o administrador do sistema!');
        }
        return redirect()->back();
    }

    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $data = Product::where('nome', 'like', '%' . $term . '%')
            ->orderBy('nome')
            ->take(6)
            ->get();
        $results = array();
        foreach ($data as $key => $v) {
            $results[] = [
                'id' =>  $v->id, 
                'value' => $v->nome
            ];
        }
        return response()->json($results);
    }
}
