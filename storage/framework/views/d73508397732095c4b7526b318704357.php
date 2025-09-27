<?php if(!isset($offTitle)): ?>
<div class="row mb15">
    <div class="col-lg-12">
        <div class="form-row">
            <label for="" class="control-label text-left"><?php echo e(__('messages.title')); ?><span class="text-danger">(*)</span></label>
            <input 
                type="text"
                name="name"
                value="<?php echo e(old('name', ($model->name) ?? '' )); ?>"
                class="form-control change-title"
                data-flag = "<?php echo e((isset($model->name)) ? 1 : 0); ?>"
                placeholder=""
                autocomplete="off"
                <?php echo e((isset($disabled)) ? 'disabled' : ''); ?>

            >
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row mb30">
    <div class="col-lg-12">
        <div class="form-row">
            <label for="" class="control-label text-left"><?php echo e(__('messages.description')); ?> </label>
            <textarea 
                name="description" 
                class="ck-editor" 
                id="ckDescription"
                <?php echo e((isset($disabled)) ? 'disabled' : ''); ?> 
                data-height="100"><?php echo e(old('description', ($model->description) ?? '')); ?></textarea>
        </div>
    </div>
</div>
<?php if(!isset($offContent)): ?>
<div class="row">
    <div class="col-lg-12">
        <div class="form-row">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <label for="" class="control-label text-left"><?php echo e(__('messages.content')); ?> </label>
                <a href="" class="multipleUploadImageCkeditor" data-target="ckContent"><?php echo e(__('messages.upload')); ?></a>
            </div>
            <textarea
                name="content"
                class="form-control ck-editor"
                placeholder=""
                autocomplete="off"
                id="ckContent"
                data-height="500"
                <?php echo e((isset($disabled)) ? 'disabled' : ''); ?>

            ><?php echo e(old('content', ($model->content) ?? '' )); ?></textarea>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/content.blade.php ENDPATH**/ ?>