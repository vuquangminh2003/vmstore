<?php if($model->hasPages()): ?>
    <ul class="pagination">
        
        <?php
            $prevPageUrl = ($model->currentPage() > 1) ? str_replace('?page=', '/trang-', $model->previousPageUrl()).config('apps.general.suffix') : null;
        ?>
        <?php if($prevPageUrl): ?>
            <li class="page-item"><a class="page-link" href="<?php echo e($prevPageUrl); ?>">Previous</a></li>
        <?php else: ?>
            <li class="page-item disabled"><span class="page-link">Previous</span></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $model->getUrlRange(max(1, $model->currentPage() - 2), min($model->lastPage(), $model->currentPage() + 2)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $paginationUrl = str_replace('?page=', '/trang-', $url).config('apps.general.suffix');
                $paginationUrl = ($page == 1) ? str_replace('/trang-'.$page, '', $paginationUrl) : $paginationUrl;
            ?>
            <li class="page-item <?php echo e(($page == $model->currentPage()) ? 'active' : ''); ?>"><a class="page-link" href="<?php echo e($paginationUrl); ?>"><?php echo e($page); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php
            $nextPageUrl = ($model->hasMorePages()) ? str_replace('?page=', '/trang-', $model->nextPageUrl()).config('apps.general.suffix') : null;
        ?>
        <?php if($nextPageUrl): ?>
            <li class="page-item"><a class="page-link" href="<?php echo e($nextPageUrl); ?>">Next</a></li>
        <?php else: ?>
            <li class="page-item disabled"><span class="page-link">Next</span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/component/pagination.blade.php ENDPATH**/ ?>