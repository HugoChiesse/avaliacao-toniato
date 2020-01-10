<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Cadastro de Cliente';
        $registros = Client::orderBy('nome')->get();
        return view('admin.client.index', compact('title', 'registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Salvar Cliente';
        return view('admin.client.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $registro = Client::create($request->all());
            \Session::flash('success', 'Registro gravado com sucesso!');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível gravar as informações na base de dados. Se o erro persistir, entre em contato com o administrador!');
        }
        return redirect()->route('client');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Editar Cliente';
        $registro = Client::find($id);
        return view('admin.client.edit', compact('title', 'registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro = Client::find($id);
        try {
            $registro->update($request->all());
            \Session::flash('success', 'Registro atualizado com sucesso!');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível atualizaro os dados em nossa base de dados. Se o erro persistir, entre em contato com o administrador do sistema');
        }
        return redirect()->route('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Client::find($id);
        try {
            $registro->delete();
            \Session::flash('success', 'Registro deletado com sucesso');
        } catch (\Throwable $th) {
            \Session::flash('warning', 'Não foi possível deletar os dados de nossa base de dados. Verifique se o cliente já está vinculado a alguma locação! Caso não e o erro persistir, entre em contato com o administrador do sistema!');
        }
        return redirect()->back();
    }

    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $data = Client::where('nome', 'like', '%' . $term . '%')
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
