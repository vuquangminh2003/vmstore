
<?php
   $segment = request()->segment(1);
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="backend/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Vũ Quang Minh</strong>
                         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        
                        
                        <li class="divider"></li>
                        <li><a href="<?php echo e(route('auth.logout')); ?>">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <?php $__currentLoopData = __('sidebar.module'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class=" <?php echo e((isset($val['class'])) ? $val['class'] : ''); ?> <?php echo e((in_array($segment, $val['name'])) ? 'active' : ''); ?>">
                <a href="<?php echo e((isset($val['route'])) ? $val['route'] : ''); ?>">
                    <i class="<?php echo e($val['icon']); ?>"></i> 
                    <span class="nav-label"><?php echo e($val['title']); ?></span> 
                    <?php if(isset($val['subModule']) && count($val['subModule'])): ?>
                    <span class="fa arrow"></span>
                    <?php endif; ?>
                </a>
                <?php if(isset($val['subModule'])): ?>
                <ul class="nav nav-second-level">
                    <?php $__currentLoopData = $val['subModule']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($module['route']); ?>"><?php echo e($module['title']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/sidebar.blade.php ENDPATH**/ ?>