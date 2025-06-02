

<?php $__env->startSection('content'); ?>
    <div class="container">
        
        
        <?php if(isset($message)): ?>
            <div class="alert alert-<?php echo e($message[1]); ?> alert-dismissible fade show" role="alert">
                <span><?php echo e($message[0]); ?></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <a href="<?php echo e(route("home")); ?>" class="btn btn-primary">Voltar</a>
        <a href="<?php echo e(route('produto.create')); ?>" class="btn btn-primary">Criar Produto</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($produto->id); ?></th>
                        <td><?php echo e($produto->nome); ?></td>
                        <td><?php echo e($produto->preco); ?></td>
                        <td><?php echo e($produto->descricao); ?></td>
                        <td>
                            <a href="<?php echo e(route('produto.show', $produto->id)); ?>" class="btn btn-primary">Mostrar</a>
                            <a href="<?php echo e(route('produto.edit', $produto->id)); ?>" class="btn btn-secondary">Editar</a>
                            <a href="#" class="btn btn-danger btnRemover" data-bs-toggle="modal"
                                data-bs-target="#deleteModal" value="<?php echo e(route('produto.destroy', $produto->id)); ?>">
                                Remover
                            </a>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remoção de recurso</h1>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Leo_s\Documents\Aula 42 e 43 (prova de recuperação)\ProjetoAula3\resources\views/Produto/index.blade.php ENDPATH**/ ?>