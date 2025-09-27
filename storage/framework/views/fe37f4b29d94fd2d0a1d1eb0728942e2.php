<div class="ibox w">
    <div class="ibox-title">
        <h5><?php echo e(__('messages.parent')); ?></h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <select name="post_catalogue_id" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($key == old('post_catalogue_id', (isset($post->post_catalogue_id)) ? $post->post_catalogue_id : '') ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <?php
            $catalogue = [];
            if(isset($post)){
                foreach($post->post_catalogues as $key => $val){
                    $catalogue[] = $val->id;
                }
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <label class="control-label"><?php echo e(__('messages.subparent')); ?></label>
                    <select multiple name="catalogue[]" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                            <?php if(is_array(old('catalogue', (
                                isset($catalogue) && count($catalogue)) ?   $catalogue : [])
                                ) && isset($post->post_catalogue_id) && $key !== $post->post_catalogue_id &&  in_array($key, old('catalogue', (isset($catalogue)) ? $catalogue : []))
                            ): ?>
                            selected
                            <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ibox w">
    <div class="ibox-title">
       
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <h5>Video Clip</h5>
                <a href="" class="upload-video">Upload Video</a>
            </div>
        
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <textarea name="video" class="form-control video-target" style="height:168px;"><?php echo e(old('video', (isset($post->video)) ? $post->video : '')); ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('backend.dashboard.component.publish', ['model' => ($post) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/post/post/component/aside.blade.php ENDPATH**/ ?>