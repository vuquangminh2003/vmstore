<form action="<?php echo e(route('permission.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div class="perpage">
                <?php
                    $perpage = request('perpage') ?: old('perpage');
                ?>
                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                    <select name="perpage" class="form-control input-sm perpage filter mr10">
                        <?php for($i = 20; $i<= 200; $i+=20): ?>
                        <option <?php echo e(($perpage == $i)  ? 'selected' : ''); ?>  value="<?php echo e($i); ?>"><?php echo e($i); ?> bản ghi</option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    <?php
                        $publish = request('publish') ?: old('publish');
                    ?>
                    <select name="publish" class="form-control setupSelect2 ml10">
                        <?php $__currentLoopData = config('apps.general.publish'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($publish == $key)  ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="uk-search uk-flex uk-flex-middle mr10">
                        <div class="input-group">
                            <input 
                                type="text" 
                                name="keyword" 
                                value="<?php echo e(request('keyword') ?: old('keyword')); ?>" 
                                placeholder="Nhập Từ khóa bạn muốn tìm kiếm..." class="form-control"
                            >
                           <span class="input-group-btn">
                               <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm">Tìm Kiếm
                                </button>
                           </span>
                        </div>
                    </div>
                    <a href="<?php echo e(route('permission.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i>Thêm mới quyền</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/permission/component/filter.blade.php ENDPATH**/ ?>