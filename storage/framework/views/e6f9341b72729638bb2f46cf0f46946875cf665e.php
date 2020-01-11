<li class="nav-item active">
    <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="<?php echo e(route('client')); ?>">Cliente <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="<?php echo e(route('product')); ?>">Produto <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="<?php echo e(route('rent')); ?>">Locação <span class="sr-only">(current)</span></a>
</li>



<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
    </a>
    
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById ('logout-form').submit();">logout</a>
        
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
</li><?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/layouts/content/navbar/dropdown.blade.php ENDPATH**/ ?>