@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" disabled value="{{ $tipoProduto->id }}">
        </div>
        <div class="mb-3">
            <label for="id-input-descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="id-input-descricao" disabled value="{{ $tipoProduto->descricao }}">
        </div>
        <div class="mb-3">
            <label for="id-input-updated_at" class="form-label">Última Atualização</label>
            <input type="text" class="form-control" id="id-input-updated_at" disabled value="{{ $tipoProduto->updated_at }}">
        </div>
        <div class="mb-3">
            <label for="id-input-created_at" class="form-label">Data de criação</label>
            <input type="text" class="form-control" id="id-input-created_at" disabled value="{{ $tipoProduto->created_at }}">
        </div>
        <div class="mb-3">
            <a href="{{route("tipoproduto.index")}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    @endsection
