<base href="{{ config('app.url') }}" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=0">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<meta name="robots" content="index,follow"/>
<meta name="author" content="{{ $system['homepage_company'] }}"/>
<meta name="copyright" content="{{ $system['homepage_company'] }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="refresh" content="1800" />
<link rel="icon" href="{{ $system['homepage_favicon'] }}" type="image/png" sizes="30x30">
<!-- GOOGLE -->
<title>{{ $seo['meta_title'] }}</title>
<meta name="description"  content="{{ $seo['meta_description'] }}" />
<meta name="keyword"  content="{{ $seo['meta_keyword'] }}" />
<link rel="canonical" href="{{ $seo['canonical'] }}" />		
<meta property="og:locale" content="vi_VN" />
<!-- for Facebook -->
<meta property="og:title" content="{{ $seo['meta_title'] }}" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{{ $seo['meta_image'] }}" />
<meta property="og:url" content="{{ $seo['canonical'] }}" />		
<meta property="og:description" content="{{ $seo['meta_description'] }}" />
<meta property="og:site_name" content="" />
<meta property="fb:admins" content=""/>
<meta property="fb:app_id" content="" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{ $seo['meta_title'] }}" />
<meta name="twitter:description" content="{{ $seo['meta_description'] }}" />
<meta name="twitter:image" content="{{ $seo['meta_image'] }}" />

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('frontend/resources/login.css') }}">
<!-- <link href="backend/css/bootstrap.min.css" rel="stylesheet"> -->
@php
    $coreCss = [
        'backend/css/plugins/toastr/toastr.min.css',
        'frontend/resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'frontend/resources/uikit/css/uikit.modify.css',
        'frontend/resources/library/css/library.css',
        'frontend/resources/plugins/wow/css/libs/animate.css',
        'frontend/core/plugins/jquery-nice-select-1.1.0/css/nice-select.css',
        'frontend/resources/style.css',
    ];
    if(isset($config['css'])){
        foreach($config['css'] as $key => $val){
            array_push($coreCss, $val);
        }
    }
@endphp
@foreach ($coreCss as $item)
    <link rel="stylesheet" href="{{ asset($item) }}">
@endforeach
<script src="{{ asset('frontend/resources/library/js/jquery.js') }}"></script>

