<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.content.mensagem', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produto</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Código Interno</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e($reg->id); ?></th>
                            <td>
                                <img src="<?php echo e(url("storage/product/{$reg->imagem}")); ?>" alt="$product->imagem" class="rounded" width="75px">
                            </td>
                            <td><?php echo e($reg->codInterno); ?></td>
                            <td><?php echo e($reg->nome); ?></td>
                            <td><?php echo e($reg->valor); ?></td>
                            <td><?php echo e($reg->qnt); ?></td>
                            <td>
                                <a href="<?php echo e(route('product.edit', $reg->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?php echo e(route('product.destroy', $reg->id)); ?>" class="btn btn-danger btn-sm" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Deletar</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h5 class="text-danger">Ainda não há nenhum registro em nossa base de dados</h5>
                        <?php endif; ?>
                    </tbody>
                </table>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/admin/product/index.blade.php ENDPATH**/ ?>