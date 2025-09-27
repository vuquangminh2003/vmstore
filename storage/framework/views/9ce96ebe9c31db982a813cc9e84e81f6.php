<?php if($momo['m2signature'] == $momo['partnerSignature']): ?> 
    <div class="alert alert-success"><strong>Tình trạng thanh toán: </strong>Thành công</div>
<?php else: ?> 
<div class="alert alert-danger">Giao dịch thanh toán online không thành công. Vui lòng liên hệ: <?php echo e($system['contact_hotline']); ?></div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/cart/component/momo.blade.php ENDPATH**/ ?>