
<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['detail']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="order-wrapper">
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="ibox-title-left">
                            <span>Chi tiết đơn hàng #<?php echo e($order->code); ?></span>
                            <span class="badge">
                                <div class="badge__tip"></div>
                                <div class="badge-text"> <?php echo e(__('cart.delivery')[$order->delivery]); ?></div>
                            </span>
                            <span class="badge">
                                <div class="badge__tip"></div>
                                <div class="badge-text"> <?php echo e(__('cart.payment')[$order->payment]); ?></div>
                            </span>
                        </div>
                        <div class="ibox-title-right">
                            Nguồn: Website
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table-order">
                        <tbody>
                            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $name = $val->pivot->name;
                                $qty = $val->pivot->qty;
                                $price = convert_price($val->pivot->price, true);
                                $priceOriginal = convert_price($val->pivot->priceOriginal, true);
                                $subtotal = convert_price($val->pivot->price * $qty, true);
                                $image = image($val->image);
                            ?>
                            <tr class="order-item">
                                <td>
                                   <div class="image">
                                        <span class="image img-scaledown"><img src="<?php echo e($image); ?>" alt=""></span>
                                    </div> 
                                </td>
                                <td style="width:285px;">
                                    <div class="order-item-name" title=""<?php echo e($name); ?>"><?php echo e($name); ?></div>
                                    <div class="order-item-voucher">Mã giảm giá: Không có</div>
                                </td>
                                <td>
                                    <div class="order-item-price"><?php echo e($price); ?> ₫</div>
                                </td>
                                <td>
                                    <div class="order-item-times">x</div>
                                </td>
                                <td>
                                    <div class="order-item-qty"><?php echo e($qty); ?></div>
                                </td>
                                <td>
                                    <div class="order-item-subtotal">
                                        <?php echo e($subtotal); ?> ₫
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="5" class="text-right">Tổng tạm</td>
                                <td class="text-right"><?php echo e(convert_price($order->cart['cartTotal'], true)); ?> ₫</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">Giảm giá</td>
                                <td class="text-right">- <?php echo e(convert_price($order->promotion['discount'], true)); ?> ₫</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right">Vận chuyển</td>
                                <td class="text-right">0 ₫</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-right" ><strong>Tổng cuối</strong></td>
                                <td class="text-right" style="font-size:18px;"><strong style="color:blue;"><?php echo e(convert_price($order->cart['cartTotal'] - $order->promotion['discount'], true)); ?> ₫</strong></td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                <div class="payment-confirm confirm-box">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="uk-flex uk-flex-middle">
                            <span class="icon"><img src="<?php echo e(($order->confirm == 'pending') ? asset('backend/img/warning.png') : asset('backend/img/correct.png')); ?>" alt=""></span>
                            <div class="payment-title">
                                <div class="text_1">
                                    <span class="isConfirm"><?php echo e(__('order.confirm')[$order->confirm]); ?></span>
                                    <?php echo e(convert_price($order->cart['cartTotal'] - $order->promotion['discount'], true)); ?>₫
                                </div>
                                <div class="text_2"><?php echo e(array_column(__('payment.method'), 'title', 'name')[$order->method] ?? '-'); ?></div>
                            </div>
                        </div>
                        <div class="cancle-block">
                            
                            <?php if($order->confirm == 'confirm' && $order->payment != 'paid'): ?>
                                <button class="button updateField" data-field="confirm" data-value="cancle" data-title="ĐÃ HỦY THANH TOÁN ĐƠN HÀNG">Hủy đơn</button>
                            <?php elseif($order->payment == 'paid'): ?>
                                Đơn hàng đã thanh toán
                            <?php elseif($order->confirm == 'cancle'): ?>
                                Đơn hàng đã hủy
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
                <div class="payment-confirm">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="uk-flex uk-flex-middle">
                            <span class="icon"><i class="fa fa-truck"></i></span>
                            <div class="payment-title">
                                <div class="text_1">Xác nhận đơn hàng</div>
                            </div>
                        </div>
                        <div class="confirm-block">
                            <?php if($order->confirm == 'pending'): ?>
                                <button class="button confirm updateField" data-field="confirm" data-value="confirm" data-title="ĐÃ XÁC NHẬN ĐƠN HÀNG TRỊ GIÁ">Xác nhận</button>
                            <?php else: ?>
                                Đã xác nhận
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-aside">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <span>Ghi chú</span>
                        <div class="edit span edit-order" data-target="description">Sửa</div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="description">
                        <?php echo e($order->description); ?>

                    </div>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-title">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <h5>Thông tin khách hàng</h5>
                        <div class="edit span edit-order" data-target="customerInfo">Sửa</div>
                    </div>
                </div>
                <div class="ibox-content order-customer-information">
                    <div class="customer-line">
                        <strong>N:</strong>
                        <span class="fullname"><?php echo e($order->fullname); ?></span>
                    </div>
                    <div class="customer-line">
                        <strong>E:</strong>
                        <span class="email"><?php echo e($order->email); ?></span>
                    </div>
                    <div class="customer-line">
                        <strong>P:</strong>
                        <span class="phone"><?php echo e($order->phone); ?></span>
                    </div>
                    <div class="customer-line">
                        <strong>A:</strong>
                        <span class="address"><?php echo e($order->address); ?></span>
                    </div>
                    <div class="customer-line">
                        <strong>P:</strong>
                        <?php echo e($order->ward_name); ?>

                        
                    </div>
                    <div class="customer-line">
                        <strong>Q:</strong>
                        <?php echo e($order->district_name); ?>

                        
                    </div>
                    <div class="customer-line">
                        <strong>T:</strong>
                        <?php echo e($order->province_name); ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" class="orderId" value="<?php echo e($order->id); ?>">
<input type="hidden" class="ward_id" value="<?php echo e($order->ward_id); ?>">
<input type="hidden" class="district_id" value="<?php echo e($order->district_id); ?>">
<input type="hidden" class="province_id" value="<?php echo e($order->province_id); ?>">
<script>
    var provinces = <?php echo json_encode($provinces->map(function($item){
        return [
            'id' => $item->code, 'name' => $item->name
        ];
    })->values(), 512) ?>;
</script><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/order/detail.blade.php ENDPATH**/ ?>