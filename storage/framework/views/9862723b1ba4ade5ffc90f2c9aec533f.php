<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show de Endereço</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body>
    <div class="container">
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" disabled value="<?php echo e($endereco->id); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="id-input-bairro" disabled value="<?php echo e($endereco->bairro); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="id-input-logradouro" disabled value="<?php echo e($endereco->logradouro); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="id-input-numero" disabled value="<?php echo e($endereco->numero); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="id-input-complemento" disabled value="<?php echo e($endereco->complemento); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-updated_at" class="form-label">Última Atualização</label>
            <input type="text" class="form-control" id="id-input-updated_at" disabled value="<?php echo e($endereco->updated_at); ?>">
        </div>
        <div class="mb-3">
            <label for="id-input-created_at" class="form-label">Data de criação</label>
            <input type="text" class="form-control" id="id-input-created_at" disabled value="<?php echo e($endereco->created_at); ?>">
        </div>
        <div class="mb-3">
            <a href="<?php echo e(route("endereco.index")); ?>" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Leo_s\Documents\ProjetoAula3\resources\views/Endereco/show.blade.php ENDPATH**/ ?>