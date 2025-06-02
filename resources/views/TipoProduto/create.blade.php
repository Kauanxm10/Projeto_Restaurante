@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{route("tipoproduto.store")}}">
            @csrf
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="#">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="id-input-descricao" name="descricao" placeholder="Digite a descricao do produto">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{route("tipoproduto.index")}}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
    @endsection
