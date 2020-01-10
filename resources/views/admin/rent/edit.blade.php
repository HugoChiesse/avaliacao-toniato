@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('rent') }}">Listagem de Locação</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
</nav>

<form action="{{ route('rent.update', $registro->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="card">
        <div class="card-header">
            <h5 class="titleCard">
                Edição de Locação
            </h5>
        </div>
        <div class="card-body">
            @include('admin.rent._form')
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </div>
</form>
    
@endsection

@push('javascript')
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/mask.js') }}"></script>
<script src="{{ asset('js/cep.js') }}"></script>
@endpush