<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Biểu đồ doanh thu năm {{ date('Y') }}</h5>
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
                                <h2 class="no-margins">{{ $orderStatistic['totalOrders'] }}</h2>
                                <small>Tổng số đơn  hàng</small>
                                {{-- <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div> --}}
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </li>
                            {{-- <li>
                                <h2 class="no-margins ">4,422</h2>
                                <small>Orders in last month</small>
                                <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar"></div>
                                </div>
                            </li>
                            <li>
                                <h2 class="no-margins ">9,180</h2>
                                <small>Monthly income from orders</small>
                                <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                <div class="progress progress-mini">
                                    <div style="width: 22%;" class="progress-bar"></div>
                                </div>
                            </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@php
    $data = json_encode($orderStatistic['revenueChart']['data']);
    $label = json_encode($orderStatistic['revenueChart']['label']);
@endphp

<script>
    var data = JSON.parse('{!! $data !!}')
    var label = JSON.parse('{!! $label !!}')
</script>