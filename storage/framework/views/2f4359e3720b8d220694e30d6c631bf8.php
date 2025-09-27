
<div class="ibox w">
    <div class="ibox-title">
        <h5><?php echo e(__('messages.image')); ?></h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <span class="image img-cover image-target"><img src="<?php echo e((old('image', ($model->image) ?? '' ) ? old('image', ($model->image) ?? '')   :  'backend/img/not-found.jpg')); ?>" alt=""></span>
                    <input type="hidden" name="image" value="<?php echo e(old('image', ($model->image) ?? '' )); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/publish.blade.php ENDPATH**/ ?>