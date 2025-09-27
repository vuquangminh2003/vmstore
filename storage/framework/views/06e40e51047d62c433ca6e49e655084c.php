<div class="panel-head">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <h2 class="cart-heading">
            <span>Thông tin giao hàng</span>
        </h2>
        
    </div>
    
</div>
<div class="panel-body mb30">
    <div class="cart-information">
        <div class="uk-grid uk-grid-medium mb20">
            <div class="uk-width-large-1-2">
                <div class="form-row">
                    <input 
                        type="text"
                        name="fullname"
                        value="<?php echo e(old('fullname')); ?>"
                        placeholder="Nhập vào Họ Tên"
                        class="input-text"
                    >
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="form-row">
                    <input 
                        type="tel"
                        name="phone"
                        value="<?php echo e(old('phone')); ?>"
                        placeholder="Nhập vào Số điện thoại"
                        pattern="^0[0-9]{9}$" 
                        title="Số điện thoại phải bắt đầu bằng số 0 và đủ 10 chữ số"
                        class="input-text"
                    >
                </div>
            </div>
        </div>
        
        <div class="form-row mb20">
            <input 
                type="text"
                name="address"
                value="<?php echo e(old('address')); ?>"
                placeholder="Nhập vào địa chỉ: ví dụ đường Lạc Long Quân..."
                class="input-text"
            >
        </div>
        <div class="uk-grid uk-grid-medium mb20" >
            <div class="uk-width-large-1-3">
                <select name="province_id" id="" class="province location setupSelect2" data-target="districts">
                    <option value="0">[Chọn Thành Phố]</option>
                    <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($val->code); ?>"><?php echo e($val->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="uk-width-large-1-3">
                <select name="district_id" id="" class="setupSelect2 districts location" data-target="wards">
                    <option value="0">Chọn Quận Huyện</option>
                </select>
            </div>
            <div class="uk-width-large-1-3">
                <select name="ward_id" id="" class="setupSelect2 wards">
                    <option value="0">Chọn Phường Xã</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <input 
                type="text"
                name="description"
                value="<?php echo e(old('description')); ?>"
                placeholder="Ghi chú thêm (Ví dụ: Giao hàng vào lúc 3 giờ chiều)"
                class="input-text"
            >
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/cart/component/information.blade.php ENDPATH**/ ?>