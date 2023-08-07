<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Psicocultivate || delogis || delogis HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="delogis HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/vendors/web/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/delogis-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/web/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/alagambe-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendors/web/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('css/delogis_home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/web/delogis-responsive.css') }}" />
</head>

<body class="@yield('body')">

  <div class="custom-cursor__cursor"></div>
  <div class="custom-cursor__cursor-two"></div>

  <div class="preloader">
      <div class="preloader__image"></div>
  </div>
  <!-- /.preloader -->

  <div class="page-wrapper">

    @include('layouts.navbar')

    <!-- Layout Content -->
    @yield('content')
    <!--/ Layout Content -->

    @include('layouts.footer')

  </div><!-- /.page-wrapper -->

  @include('layouts.navbar_mobile')

  @include('layouts.search')

  <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>

  <!-- Include Scripts -->
  @include('content/web/scripts/scripts')

</body>

</html>
