

<?php $__env->startSection('content'); ?>
    
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Leo_s\Documents\Aula 42 e 43 (prova de recuperação)\ProjetoAula3\resources\views/Produto/show.blade.php ENDPATH**/ ?>