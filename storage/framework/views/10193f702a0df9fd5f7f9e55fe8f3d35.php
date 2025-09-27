<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['children']. $menuBread->languages->first()->pivot->name ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $url = ($config['method'] == 'create') ? route('menu.store') : ( ($config['method'] == 'children') ? route('menu.save.children', [$menuBread->id]) : route('menu.update', $menu->id) );
?>
<form action="<?php echo e($url); ?>" method="post" class="box menuContainer">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <?php echo $__env->make('backend.menu.menu.component.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>

<?php echo $__env->make('backend.menu.menu.component.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/menu/menu/children.blade.php ENDPATH**/ ?>