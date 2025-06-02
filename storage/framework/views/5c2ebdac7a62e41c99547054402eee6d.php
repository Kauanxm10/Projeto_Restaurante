<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de UserInfo</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="<?php echo e(route('userinfo.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="#">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-profileImg" class="form-label">profileImg</label>
                <input type="text" class="form-control" id="id-input-profileImg" name="profileImg"
                    placeholder="Digite o profileImg">
            </div>
            <div class="mb-3">
                <label for="id-input-status" class="form-label">status</label>
                <input type="text" class="form-control" id="id-input-status" aria-describedby="id-help" 
                disabled value="#">
                <div id="id-help" class="form-text">O status não é controlado pelo usuário.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-dataNasc" class="form-label">dataNasc</label>
                <input type="text" class="form-control" id="id-input-dataNasc" name="dataNasc"
                    placeholder="Digite a data de nascimento">
            </div>
            <div class="mb-3">
                <label for="id-input-genero" class="form-label">genero</label>
                <input type="text" class="form-control" id="id-input-genero" name="genero"
                    placeholder="Digite o genero">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="<?php echo e(route('tipoproduto.index')); ?>" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Leo_s\Documents\ProjetoAula3\resources\views/UserInfo/create.blade.php ENDPATH**/ ?>