<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Biểu đồ doanh thu năm <?php echo e(date('Y')); ?></h5>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-white chartButton active" data-chart="1">Biểu đồ năm</button>
                        <button type="button" class="btn btn-xs btn-white chartButton" data-chart="30">Tháng hiện tại</button>
                        <button type="button" class="btn btn-xs btn-white chartButton" data-chart="7">7 ngày gần nhất</button>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="chartContainer">
                            <canvas id="barChart" height="100"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul class="stat-list">
                            <li>
                                <h2 class="no-margins"><?php echo e($orderStatistic['totalOrders']); ?></h2>
                                <small>Tổng số đơn  hàng</small>
                                
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php
    $data = json_encode($orderStatistic['revenueChart']['data']);
    $label = json_encode($orderStatistic['revenueChart']['label']);
?>

<script>
    var data = JSON.parse('<?php echo $data; ?>')
    var label = JSON.parse('<?php echo $label; ?>')
</script><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/chart.blade.php ENDPATH**/ ?>