<aside class="profile-sidebar">
    <div class="aside-task aside-panel">
        <ul class="uk-list uk-clearfix">
            <li><a href="{{ route('agency.profile') }}"><i class="fa fa-user"></i>Tài khoản của tôi</a></li>
            <li><a href="{{ route('agency.password.change') }}"><i class="fa fa-key"></i>Đổi mật khẩu</a></li>
            <li><a href="{{ route('agency.construction.create') }}"><i class="fa fa-plus"></i>Tạo công trình</a></li>
            <li><a href="{{ route('agency.construction') }}"><i class="fa fa-home"></i>Danh sách công trình</a></li>
            <li><a href="{{ route('agency.check.warranty') }}"><i class="fa fa-barcode"></i>Kiểm tra bảo hành</a></li>
            {{-- <li><a href=""><i class="fa fa-shopping-cart"></i>Đơn hàng của bạn</a></li> --}}
            <li><a href="{{ route('agency.logout') }}"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
        </ul>
    </div>
</aside>