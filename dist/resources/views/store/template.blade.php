<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    {!! SEO::generate() !!}

    <title>@yield('title', 'decofruta')</title>

    <!-- //revisar que es -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<!-- 
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
     <!-- SEO Meta Tags-->
  <!--   <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean"> -->


<!--     <style type="text/css">
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("{{ asset('img/tenor.gif') }} ") 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}

    </style> -->


    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/iconos/favicon.ico') }} ">
    <link rel="apple-touch-icon" href="{{ asset('img/iconos/favicon.ico') }} ">

    <!-- iconos -->
    <link rel="stylesheet"  href="{{ asset('fontawesome/css/all.css') }}">

  
    <link rel="stylesheet" href="{{ asset('css/store/carrito/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/store/carrito/tema.css') }}">


    <!-- chequear este -->
    <!-- <link rel="stylesheet" href="{{ asset('css/boighor/bootstrap.min.css') }}"> -->
    
    <!-- <link rel="stylesheet" href="{{ asset('css/boighor/custom.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/boighor/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boighor/style.css') }}">




<!-- <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script> -->


</head>
<body>



    <!-- chat boot -->
    <!-- <script>
      var botmanWidget = {
          aboutText: 'ssdsd',
          introMessage: "✋ Hi! I'm form codechief.org"
      };
    </script> -->
  
    <!-- <script src="{{ asset('js/store/chat.js') }}"></script> -->

    <div class="loader"></div>



    @if(app()->isLocale('es'))
        @include('layouts.header.español.header')
            @yield('content')
        @include('layouts.footer.español.footer')
    @else
        @include('layouts.header.ingles.header')
            @yield('content')
        @include('layouts.footer.ingles.footer')
    @endif



    <!-- JavaScript libraries, plugins and custom scripts-->
    <script src="{{ asset('js/store/carrito/vendor.js') }}"></script>
    <script src="{{ asset('js/store/carrito/theme.js') }}"></script>

    <!-- <script src="{{ asset('js/store/contenido/vendor/jquery-3.2.1.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/store/contenido/popper.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/store/contenido/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('js/store/contenido/plugins.js') }}"></script>
    <script src="{{ asset('js/store/contenido/active.js') }}"></script>



    @include('sweetalert::alert')
 
    
</body>
</html>