<form action="<?php echo e(route('contacts.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <?php echo $__env->make('backend.dashboard.component.perpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</form>


<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/contacts/component/filter.blade.php ENDPATH**/ ?>