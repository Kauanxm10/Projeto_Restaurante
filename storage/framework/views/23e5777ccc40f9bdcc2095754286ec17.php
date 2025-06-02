<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <?php dump($tipoProdutos); ?>
        <form method="post" action="<?php echo e(route('produto.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="#">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="id-input-nome" name="nome"
                    placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <label for="id-input-preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="id-input-preco" name="preco"
                    placeholder="Digite o preço do produto" step=".01">
            </div>
            <div class="mb-3">
                <label for="id-input-Tipo_Produtos_id" class="form-label">Tipo</label>
                <select name="Tipo_Produtos_id" class="form-select">
                    <?php $__currentLoopData = $tipoProdutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoProduto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tipoProduto->id); ?>"><?php echo e($tipoProduto->descricao); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id-input-ingredientes" class="form-label">ingredientes</label>
                <input type="text" class="form-control" id="id-input-ingredientes" name="ingredientes"
                    placeholder="Digite os ingredientes do produto">
            </div>
            
            <!-- Adicionando campo de upload de imagem -->
            <div class="mb-3">
                <label for="id-input-imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="id-input-imagem" name="imagem">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="<?php echo e(route('produto.index')); ?>" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Leo_s\Documents\ProjetoAula3__\resources\views/Produto/create.blade.php ENDPATH**/ ?>