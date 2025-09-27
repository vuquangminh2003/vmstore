<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <div class="uk-flex uk-flex-middle">
                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('language.switch', $val->id)); ?>" class="image img-cover language-item <?php echo e(($val->current == 1) ? 'active' : ''); ?>"><img src="<?php echo e(image($val->image)); ?>" alt=""></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </li>
            


            <li>
                <a href="<?php echo e(route('auth.logout')); ?>">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
            <li>
                <a class="right-sidebar-toggle">
                    <i class="fa fa-tasks"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
<script>
    // JavaScript để tìm kiếm và làm nổi bật mục sidebar
    document.getElementById('top-search').addEventListener('input', function() {
        var searchQuery = this.value.toLowerCase();  // Lấy giá trị tìm kiếm và chuyển thành chữ thường
        var sidebarItems = document.querySelectorAll('.sidebar-item');  // Lấy tất cả các mục trong sidebar

        sidebarItems.forEach(function(item) {
            var title = item.getAttribute('data-title');  // Lấy tên mục trong sidebar
            if (title.indexOf(searchQuery) !== -1) {
                item.classList.add('active');  // Nếu tìm thấy, làm nổi bật mục
            } else {
                item.classList.remove('active');  // Nếu không tìm thấy, bỏ dấu nổi bật
            }
        });
    });
</script>
<style>
    .sidebar-item.active {
    background-color: #f0f0f0;  /* Màu nền khi mục được tìm thấy */
    color: #000;  /* Màu chữ khi mục được tìm thấy */
}

</style><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/nav.blade.php ENDPATH**/ ?>