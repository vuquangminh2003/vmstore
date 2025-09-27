<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="post" class="box">

   
   <?php echo $__env->make('backend.dashboard.component.destroy', ['model' => $contact], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/contacts/delete.blade.php ENDPATH**/ ?>