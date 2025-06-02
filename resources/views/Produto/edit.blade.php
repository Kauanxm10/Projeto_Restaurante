@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('produto.update', $produto->id) }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="{{ $produto->id }}">
                <div id="id-help" class="form-text">Não é necessário informar o ID para editar um dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="id-input-nome" name="nome"
                    placeholder="Digite o nome do produto" value="{{ $produto->nome }}">
            </div>
            <div class="mb-3">
                <label for="id-input-preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="id-input-preco" name="preco"
                    placeholder="Digite o preço do produto" step=".01" value="{{ $produto->preco }}">
            </div>
            <div class="mb-3">
                <label for="id-input-Tipo_Produtos_id" class="form-label">Tipo</label>
                <select name="Tipo_Produtos_id" class="form-select">
                    @foreach ($tipoProdutos as $tipoProduto)
                        @if ($tipoProduto->id == $produto->Tipo_Produtos_id)
                            <option value="{{ $tipoProduto->id }}" selected>{{ $tipoProduto->descricao }}</option>
                        @else
                            <option value="{{ $tipoProduto->id }}">{{ $tipoProduto->descricao }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id-input-ingredientes" class="form-label">ingredientes</label>
                <input type="text" class="form-control" id="id-input-ingredientes" name="ingredientes"
                    placeholder="Digite os ingredientes do produto" value="{{ $produto->ingredientes }}">
            </div>
            <div class="mb-3">
                <label for="id-input-imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="id-input-imagem" name="imagem">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('produto.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
    @endsection
