<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <base href="./">
        <!--================ CSRF Token ==============================================-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--================ CSRF Token ==============================================-->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
        <meta name="description" content="">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">

        <!--================ application title =======================================-->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!--================ application title =======================================-->
       
        <!--================ application favico ======================================-->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('assets/favicon/manifest.json')}}">
        <!--================ application favicon =====================================-->

        <!--================= Bootstrap Css ==========================================-->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
        <!--================= Bootstrap Css ==========================================-->


        <!--================ material icons ===========================================-->
        <link rel="stylesheet" href="{{ asset('material-design-icons-iconfont/dist/material-design-icons.css')}}">
        <!--================ material icons ===========================================-->

        <!--================= Custom Css ===============================================-->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/threx-code.css')}}">
        <!--================= Custom Css ===============================================-->

        <!--==================== JQuery ================================================-->
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <!--==================== JQuery ================================================-->

        <!--==================== Global site tag (gtag.js) - Google Analytics ==========-->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        <!--==================== Global site tag (gtag.js) - Google Analytics ==========-->
    
     <!--==================== Global site tag (gtag.js) - Google Analytics ==========-->
        <script async="" src="https://js.paystack.co/v2/popup.js"></script>
        <!--==================== Global site tag (gtag.js) - Google Analytics ==========-->

   
        <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
            dataLayer.push(arguments);
          }
          gtag('js', new Date());
          // Shared ID
          gtag('config', 'UA-118965717-3');
          // Bootstrap ID
          gtag('config', 'UA-118965717-5');
        </script>

        <link href="{{ asset('node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css')}}" rel="stylesheet">
    </head>
<body>
    <!-- this loader shows when the user performs action to login or register -->
    <div class="preloader pl-size-xs  threx-loader">
         <div class="spinner-layer pl-pink">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <!--=============== this will load in content of the application ===========-->
     @yield('content')
      <!--=============== this will load in content of the application ===========-->

    <!--================= Coreui Bundle Js ===========================================-->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <!--================= Coreui Bundle Js ===========================================-->
    
    <!--================= Coreui Bundle Js ===========================================-->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!--================= Coreui Bundle Js ===========================================-->

      
    <!--================= Coreui Bundle Js ===========================================-->
    <script src="{{ asset('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js')}}"></script>
    <!--================= Coreui Bundle Js ===========================================-->

    <!--================= svgxuse Js =================================================-->
    <script src="{{ asset('node_modules/@coreui/icons/js/svgxuse.min.js')}}"></script>
    <!--================= svgxuse Js =================================================-->

    <!--================= coreui-chartjs Js ==========================================-->
    <script src="{{ asset('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.bundle.js')}}"></script>
    <!--================= coreui-chartjs Js ==========================================-->

    <!--================= coreui-utils Js ============================================-->
    <script src="{{ asset('node_modules/@coreui/utils/dist/coreui-utils.js')}}"></script>
    <!--================= coreui-utils Js ============================================-->


    <!--================= Main Js ====================================================-->
    <script src="js/main.js"></script>
    <!--================= Demo Js ====================================================-->
</body>
</html>
