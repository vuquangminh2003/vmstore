<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo'][$config['method']]['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php
    $url = ($config['method'] == 'create') ? route('post.store') : route('post.update', $post->id);
?>
<form action="<?php echo e($url); ?>" method="post" class="box">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5><?php echo e(__('messages.tableHeading')); ?></h5>
                    </div>
                    <div class="ibox-content">
                        <?php echo $__env->make('backend.dashboard.component.content', ['model' => ($post) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
               <?php echo $__env->make('backend.dashboard.component.album', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('backend.dashboard.component.seo', ['model' => ($post) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-3">
                <?php echo $__env->make('backend.post.post.component.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('backend.dashboard.component.button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/post/post/store.blade.php ENDPATH**/ ?>