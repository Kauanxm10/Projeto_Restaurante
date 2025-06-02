@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" disabled value="{{ $endereco->id }}">
        </div>
        <div class="mb-3">
            <label for="id-input-bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="id-input-bairro" disabled value="{{ $endereco->bairro }}">
        </div>
        <div class="mb-3">
            <label for="id-input-logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="id-input-logradouro" disabled value="{{ $endereco->logradouro }}">
        </div>
        <div class="mb-3">
            <label for="id-input-numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="id-input-numero" disabled value="{{ $endereco->numero }}">
        </div>
        <div class="mb-3">
            <label for="id-input-complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="id-input-complemento" disabled value="{{ $endereco->complemento }}">
        </div>
        <div class="mb-3">
            <label for="id-input-updated_at" class="form-label">Última Atualização</label>
            <input type="text" class="form-control" id="id-input-updated_at" disabled value="{{ $endereco->updated_at }}">
        </div>
        <div class="mb-3">
            <label for="id-input-created_at" class="form-label">Data de criação</label>
            <input type="text" class="form-control" id="id-input-created_at" disabled value="{{ $endereco->created_at }}">
        </div>
        <div class="mb-3">
            <a href="{{route("endereco.index")}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    @endsection
