<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form action="<?php echo e(route('menu.store')); ?>" method="post" class="box menuContainer">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <?php echo $__env->make('backend.menu.menu.component.catalogue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <hr>
        <?php echo $__env->make('backend.menu.menu.component.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
        <input type="hidden" name="redirect" value="<?php echo e(($id) ?? 0); ?>">
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
    
</form>

<?php echo $__env->make('backend.menu.menu.component.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/menu/menu/store.blade.php ENDPATH**/ ?>