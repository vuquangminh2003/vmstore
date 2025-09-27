<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-5">
            <div class="panel-head">
                <div class="panel-title">Thông tin chung</div>
                <div class="panel-description">
                    <p><?php echo e(__('messages.generalTitle')); ?> <span class="text-danger"><?php echo e($model->name); ?></span></p>
                    <p><?php echo e(__('messages.generalDescription')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row mb15">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <label for="" class="control-label text-left"><?php echo e(__('messages.tableName')); ?> <span class="text-danger">(*)</span></label>
                                <input 
                                    type="text"
                                    name="name"
                                    value="<?php echo e(old('name', ($model->name) ?? '' )); ?>"
                                    class="form-control"
                                    placeholder=""
                                    autocomplete="off"
                                    readonly
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-right mb15">
        <button class="btn btn-danger" type="submit" name="send" value="send"><?php echo e(__('messages.deleteButton')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/destroy.blade.php ENDPATH**/ ?>