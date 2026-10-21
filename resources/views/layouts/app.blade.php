<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @hasSection('noindex')
    <meta name="robots" content="noindex">
    @endif

	<meta name="description" content="@yield('description')" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="@yield('title') - Shuki Crafts India" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:url" content="{{ url()->current() }}" />
	<meta property="og:site_name" content="Shuki Crafts India" />
	<meta name="twitter:card" content="summary_large_image" />

    <title>@yield('title') - Shuki Crafts India</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Lato font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Lato font -->

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/shuki.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/mediaquery.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

    <!--og image-->
    <meta property="og:image" content="{{ asset('assets/images/og_img.jpg') }}" />
    <!--og image-->

    <!--favicon-->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!--favicon-->

    <!--loading effect-->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" type="text/css" media="screen" />
    <!--loading effect-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/all.min.css') }}">
    <!-- Add icon library -->

    <!-- animate -->
    <link rel='stylesheet' href="{{ asset('assets/css/animate.min.css') }}">
    <!-- animate -->

    <!--owl carousel-->
    <link rel='stylesheet' type="text/css" href="{{ asset('assets/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/owl/owl.css') }}" />
    <!--owl carousel-->

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/gallery/fancybox.min.css') }}">
    <!-- Fancybox CSS -->

  </head>
  <body>

    @include('partials.top-bar')

    <div class="clearfix"></div>

    <!-- hero banner section with menu bar -->
     <div class="container-fluid hero_section">
      <div class="row">
        <div class="col-12 p-0">

          <div class="hero_wrapper @yield('hero_class')">

            @include('partials.menu')

            @yield('hero')

          </div>

        </div>
      </div>
     </div>
    <!-- hero banner section with menu bar -->

    @yield('content')

    @include('partials.footer')

    @stack('modals')

    @include('partials.account-popup')

    @include('partials.search-popup')

    @include('partials.scroll-top')

    @include('partials.toast')

    @include('partials.scripts')

    @stack('scripts')

  </body>
</html>
