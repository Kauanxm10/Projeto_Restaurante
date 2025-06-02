<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    
    <div class="container">
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" disabled value="<?php echo e($produto->id); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="id-input-nome" disabled value="<?php echo e($produto->nome); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="id-input-preco" disabled value="<?php echo e($produto->preco); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-descricao" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="id-input-descricao" disabled value="<?php echo e($produto->descricao); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-ingredientes" class="form-label">Ingredientes</label>
            <input type="text" class="form-control" id="id-input-ingredientes" disabled value="<?php echo e($produto->ingredientes); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-updated_at" class="form-label">Última atualização</label>
            <input type="text" class="form-control" id="id-input-updated_at" disabled value="<?php echo e($produto->updated_at); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-created_at" class="form-label">Data de criação</label>
            <input type="text" class="form-control" id="id-input-created_at" disabled value="<?php echo e($produto->created_at); ?>">
        </div>
        <div class="mb-3">
            <a href="<?php echo e(route("produto.index")); ?>" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Leo_s\Documents\ProjetoAula3\resources\views/Produto/show.blade.php ENDPATH**/ ?>