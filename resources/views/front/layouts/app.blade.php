<!DOCTYPE html>
<?php $parametre = Helper::get_settings(); ?>
<html>

<head>
    <meta charset="utf-8">
    <title>@if ($parametre->title) {{ $parametre->title }} @endif ||</title>
    @if ($parametre->meta_description)
    <meta name="description" content="{{ $parametre->meta_description }}" />
    @endif
    <!-- Stylesheets -->
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/revolution-slider.css') !!}
    {!! Html::style('css/nouislider.css') !!}
    {!! Html::style('css/nouislider.pips.css') !!}
    {!! Html::style('css/jquery.bootstrap-touchspin.css') !!}
    {!! Html::style('css/style.css') !!}

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    {!! Html::style('css/responsive.css') !!}
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        @include('front.layouts.header')

        @yield('content')

        @include('front.layouts.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span>
    </div>

    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/revolution.min.js') !!}
    {!! Html::script('js/jquery.fancybox.pack.js') !!}
    {!! Html::script('js/jquery.fancybox-media.js') !!}
    {!! Html::script('js/isotope.js') !!}
    {!! Html::script('js/owl.js') !!}
    {!! Html::script('js/nouislider.js') !!}
    {!! Html::script('js/jquery.bootstrap-touchspin.js') !!}
    {!! Html::script('js/wow.js') !!}
    {!! Html::script('js/jquery-ui.min.js') !!}
    {!! Html::script('js/color-settings.js') !!}
    {!! Html::script('js/script.js') !!}
</body>

</html>
