@extends('layouts.app')

@section('content')

@include('layouts.content.mensagem')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cliente</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <a href="{{ route('client.create') }}" class="btn btn-primary">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Celular</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($registros as $reg)
                        <tr>
                            <th scope="row">{{ $reg->id }}</th>
                            <td>{{ $reg->nome }}</td>
                            <td>{{ $reg->cpf }}</td>
                            <td>{{ $reg->telefone }}</td>
                            <td>{{ $reg->celular }}</td>
                            <td>{{ $reg->email }}</td>
                            <td>
                                <a href="{{ route('client.edit', $reg->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ route('client.destroy', $reg->id) }}" class="btn btn-danger btn-sm" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Deletar</a>
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