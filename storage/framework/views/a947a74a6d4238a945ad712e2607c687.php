<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de TipoProduto</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body>
    <div class="container">
        <?php if(isset($message)): ?>
            <div class="alert alert-<?php echo e($message[1]); ?> alert-dismissible fade show" role="alert">
                <span><?php echo e($message[0]); ?></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <a href="/" class="btn btn-primary">Voltar</a>
        <a href="<?php echo e(route('tipoproduto.create')); ?>" class="btn btn-primary">Criar TipoProduto</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tipoProdutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoProduto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($tipoProduto->id); ?></th>
                        <td><?php echo e($tipoProduto->descricao); ?></td>
                        <td>
                            <a href="<?php echo e(route('tipoproduto.show', $tipoProduto->id)); ?>"
                                class="btn btn-primary">Mostrar</a>
                            <a href="<?php echo e(route('tipoproduto.edit', $tipoProduto->id)); ?>"
                                class="btn btn-secondary">Editar</a>
                            <a href="#" class="btn btn-danger btnRemover" data-bs-toggle="modal"
                                data-bs-target="#deleteModal"
                                value="<?php echo e(route('tipoproduto.destroy', $tipoProduto->id)); ?>">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Remoção de recurso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja realmente remover este recurso?
                </div>
                <div class="modal-footer">
                    <form id="id-form-modal-botao-remover" method="post" action="">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Procura todos elementos da página que tenha a classe btnRemover
        let arrayBotaoRemover = document.querySelectorAll(".btnRemover");
        let formModalBotaoRemover = document.querySelector("#id-form-modal-botao-remover");
        arrayBotaoRemover.forEach(element => {
            element.addEventListener('click', configuraBotaoRemoverModal);
        });

        function configuraBotaoRemoverModal() {
            formModalBotaoRemover.setAttribute("action", this.getAttribute("value"));
        }
    </script>
</body>

</html>
<?php /**PATH C:\Users\Leo_s\Documents\ProjetoAula3\resources\views/TipoProduto/index.blade.php ENDPATH**/ ?>