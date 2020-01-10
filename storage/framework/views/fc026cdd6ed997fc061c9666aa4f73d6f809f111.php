<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('product')); ?>">Produto</a></li>
        <li class="breadcrumb-item active" aria-current="page">Salvar</li>
    </ol>
</nav>

<form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h5 class="titleCard">
                Cadastro de Produto
            </h5>
        </div>
        <div class="card-body">
            <?php echo $__env->make('admin.product._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </div>
</form>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('javascript'); ?>
<script src="<?php echo e(asset('js/jquery.mask.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('js/mask.js')); ?>"></script>
<script src="<?php echo e(asset('js/cep.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/admin/product/create.blade.php ENDPATH**/ ?>