<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">Tháng</span>
                <h5>Đơn hàng trong tháng</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?php echo e($orderStatistic['orderCurrentMonth']); ?></h1>
                <?php echo growHtml($orderStatistic['grow']); ?>

                <small>Tăng trưởng so với tháng trước</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Tổng số đơn hàng</span>
                <h5>Orders</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?php echo e($orderStatistic['totalOrders']); ?></h1>
                <div class="stat-percent font-bold text-info"><?php echo e(growth($orderStatistic['totalOrders'], $orderStatistic['cancleOrders'])); ?>% </div>
                <small>Số đơn hủy <?php echo e($orderStatistic['cancleOrders']); ?> chiếm </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Total</span>
                <h5>Tổng doanh thu</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?php echo e(convert_price($orderStatistic['revenue'], true)); ?>đ</h1>
                <small>Tổng doanh thu</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Customer</span>
                <h5>Tổng số khách hàng</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?php echo e($customerStatistic['totalCustomers']); ?></h1>
                <small>Tổng số khách hàng</small>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/statistic.blade.php ENDPATH**/ ?>