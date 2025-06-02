@extends('layouts.app')

@section('content')
    {{-- @dump($produto) --}}
    <div class="container">
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" disabled value="{{$produto->id}}">
        </div>
        <div class="mb-3">
            <label for="id-input-nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="id-input-nome" disabled value="{{$produto->nome}}">
        </div>
        <div class="mb-3">
            <label for="id-input-preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="id-input-preco" disabled value="{{$produto->preco}}">
        </div>
        <div class="mb-3">
            <label for="id-input-descricao" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="id-input-descricao" disabled value="{{$produto->descricao}}">
        </div>
        <div class="mb-3">
            <label for="id-input-ingredientes" class="form-label">Ingredientes</label>
            <input type="text" class="form-control" id="id-input-ingredientes" disabled value="{{$produto->ingredientes}}">
        </div>
        <div class="mb-3">
            <label for="id-input-updated_at" class="form-label">Última atualização</label>
            <input type="text" class="form-control" id="id-input-updated_at" disabled value="{{$produto->updated_at}}">
        </div>
        <div class="mb-3">
            <label for="id-input-created_at" class="form-label">Data de criação</label>
            <input type="text" class="form-control" id="id-input-created_at" disabled value="{{$produto->created_at}}">
        </div>
        <div class="mb-3">
            <a href="{{route("produto.index")}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
@endsection
