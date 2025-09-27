<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<form action="<?php echo e(route('user.catalogue.updatePermission')); ?>" method="post" class="box">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title"><h5>Cấp quyền</h5></div>
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th></th>
                                <?php $__currentLoopData = $userCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th class="text-center"><?php echo e($userCatalogue->name); ?></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="" class="uk-flex uk-flex-middle uk-flex-space-between"><?php echo e($permission->name); ?> <span style="color:red;">(<?php echo e($permission->canonical); ?>)</span> </a></td>
                                <?php $__currentLoopData = $userCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td>
                                    <input 
                                        <?php echo e((collect($userCatalogue->permissions)->contains('id', $permission->id)) ? 'checked' : ''); ?> 
                                        type="checkbox" 
                                        name="permission[<?php echo e($userCatalogue->id); ?>][]" 
                                        value="<?php echo e($permission->id); ?>" class="form-control">
                                </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/user/catalogue/permission.blade.php ENDPATH**/ ?>