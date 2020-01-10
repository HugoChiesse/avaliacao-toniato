@extends('layouts.app')

@section('content')

@include('layouts.content.mensagem')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Listagem de Locação</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <a href="{{ route('rent.create') }}" class="btn btn-primary">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Código Interno</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Qnt Locada</th>
                            <th scope="col">Valor Total</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($registros as $reg)
                        <tr>
                            <th scope="row">{{ $reg->id }}</th>
                            <td>
                                <img src="{{ url("storage/product/{$reg->product->imagem}") }}" alt="$reg->product->imagem" class="rounded" width="75px">
                            </td>
                            <td>{{ $reg->product->codInterno }}</td>
                            <td>{{ $reg->product->nome }}</td>
                            <td>{{ $reg->qnt }}</td>
                            <td>{{ number_format($reg->product->valor * $reg->qnt, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('rent.edit', $reg->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ route('rent.destroy', $reg->id) }}" class="btn btn-danger btn-sm" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Deletar</a>
                            </td>
                        </tr>
                        @empty
                        <h5 class="text-danger">Ainda não há nenhum registro em nossa base de dados</h5>
                        @endforelse
                    </tbody>
                </table>
            </table>
        </div>
    </div>
</div>

@endsection