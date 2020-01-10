<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php elseif(Session::has('warning')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(Session::get('warning')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/layouts/content/mensagem.blade.php ENDPATH**/ ?>