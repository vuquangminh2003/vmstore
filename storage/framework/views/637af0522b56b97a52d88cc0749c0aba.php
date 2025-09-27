<!-- Mainly scripts -->
<script src="backend/js/bootstrap.min.js"></script>
<script src="backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="backend/plugins/jquery-ui.js"></script>



<script src="backend/js/inspinia.js"></script>

<!-- jQuery UI -->
<script src="backend/js/plugins/toastr/toastr.min.js"></script>
<?php if(isset($config['js']) && is_array($config['js'])): ?>
    <?php $__currentLoopData = $config['js']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo '<script src="'.$val.'"></script>'; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<script src="backend/library/library.js"></script><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/script.blade.php ENDPATH**/ ?>