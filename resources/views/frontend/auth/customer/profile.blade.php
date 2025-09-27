@extends('frontend.homepage.layout')
@section('content')
    <div class="profile-container pt20 pb20">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-4">
                    @include('frontend.auth.customer.components.sidebar')
                </div>
                <div class="uk-width-large-2-4">
                    <div class="panel-profile">
                        <div class="panel-head">
                            <h2 class="heading-2"><span>Hồ sơ của tôi</span></h2>
                            {{-- <div class="description">
                                Quản lý thông tin hồ sơ để bảo mật tài khoản
                            </div> --}}
                        </div>
                        <div class="panel-body">
                            @include('backend/dashboard/component/formError')
                            <form action="{{ route('customer.profile.update') }}" method="post" class="uk-form uk-form-horizontal login-form profile-form">
                                @csrf
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Tài khoản đăng nhập</label>
                                    <div class="uk-form-controls">
                                        {{ $customer->email }}
                                    </div>
                                </div>
                                
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Họ Tên</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="text" 
                                            class="input-text"
                                            placeholder="Họ Tên"
                                            name="name"
                                            value="{{ old('name', $customer->name) }}"
                                        >
                                    </div>
                                </div>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Email</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="email" 
                                            class="input-text"
                                            placeholder="Email"
                                            name="email"
                                            value="{{ old('email', $customer->email) }}"
                                        >
                                    </div>
                                </div>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Số điện thoại</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="tel" 
                                            class="input-text"
                                            placeholder="Số điện thoại"
                                            pattern="^0[0-9]{9}$" 
                                            title="Số điện thoại phải bắt đầu bằng số 0 và đủ 10 chữ số"
                                            name="phone"
                                            value="{{ old('phone', $customer->phone) }}"
                                        >
                                    </div>
                                </div>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Địa chỉ</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="text" 
                                            class="input-text"
                                            placeholder="Địa chỉ"
                                            name="address"
                                            value="{{ old('address', $customer->address) }}"
                                        >
                                    </div>
                                </div>
                                <button type="submit" name="send" value="create">Lưu thông tin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



