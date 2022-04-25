<head>

    @foreach($settings as $setting)
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="{{ $setting->seo_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('templates') }}" />
    <meta name="keywords" content="{{ $setting->seo_keywords }}" />
    <meta name="description" content="{{ $setting->seo_description }}"/>
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Quluzadə Ağabala" />
    <meta property="og:image" content="{{ asset($setting->logo) }}" />
    <title>@yield('title','Book House')</title>
    <script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js') }}" ></script>
    <script src="{{ asset('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js') }}" ></script>
    <link href="{{ asset('catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('catalog/view/theme/tt_smartbooks4/stylesheet/ocmegamenu/menu.css') }}" rel="stylesheet" />
    <link href="{{ asset('catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('catalog/view/javascript/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('catalog/view/javascript/fontawesome-free-541/css/brands.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/fontawesome-free-541/css/solid.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/pe-icon-7-stroke/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/elegant-font/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/ionicons/css/ionicons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/stroke-gap-icons/css/stroke-gap-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/linearicons-free/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/javascript/plaza-icon/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/ocslideshow/ocslideshow.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet" />
    <link href="{{ asset('catalog/view/theme/tt_smartbooks4/stylesheet/stylesheet.css') }}" rel="stylesheet" />
    <link href="{{ asset('catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/ocajaxlogin/css/ocajaxlogin.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/ocpagebuilder.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('catalog/view/javascript/jquery/swiper/css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('catalog/view/javascript/jquery/swiper/css/opencart.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link rel="icon" href="{{ asset($setting->favicon) }}" type="image/x-icon" />

    @endforeach

</head>