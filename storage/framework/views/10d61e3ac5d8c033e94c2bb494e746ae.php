<div class="uk-search uk-flex uk-flex-middle mr10">
    <div class="input-group">
        <input 
            type="text" 
            name="keyword" 
            value="<?php echo e(request('keyword') ?: old('keyword')); ?>" 
            placeholder="<?php echo e(__('messages.searchInput')); ?>" class="form-control"
        >
       <span class="input-group-btn">
           <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm"><?php echo e(__('messages.search')); ?>

            </button>
       </span>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/keyword.blade.php ENDPATH**/ ?>