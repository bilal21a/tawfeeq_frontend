<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Form Layouts</title>
    <meta name="description" content="Examples and usage guidelines for form control styles and layout options." />
    <meta name="description" content="Glidejs is a dependency-free JavaScript ES6 slider and carousel. It’s lightweight, flexible and fast. Designed to slide. No less, no more." />
    <!-- Favicon Tags Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png" sizes="assets/img/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-128.png') }}" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('assets/img/favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('assets/img/favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('assets/img/favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('assets/img/favicon/mstile-310x310.png') }}" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/baguetteBox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/vendor/tagify.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="{{ asset('assets/js/base/loader.js') }}"></script>



    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
    @yield('css')
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-16 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-16 letter-spacing padding_bottom font_family">
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
   <!-- Vendor Scripts Start -->
   <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
   <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }} "></script>
   <script src="{{ asset('js/vendor/OverlayScrollbars.min.js') }} "></script>
   <script src="{{ asset('js/vendor/autoComplete.min.js') }} "></script>
   <script src="{{ asset('js/vendor/clamp.min.js') }}"></script>
   <script src="{{ asset('js/vendor/glide.min.js') }}"></script>


   <script src="{{ asset('icon/acorn-icons.js') }}"></script>
   <script src="{{ asset('assets/img/icon/acorn-icons-interface.js') }}"></script>

   <script src="{{ asset('js/cs/scrollspy.js') }}"></script>

   <script src="{{ asset('js/vendor/select2.full.min.js') }}"></script>

   <script src="{{ asset('js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>

   <script src="{{ asset('js/vendor/tagify.min.js') }}"></script>

   <!-- Vendor Scripts End -->

   <!-- Template Base Scripts Start -->
   <script src="font/CS-Line/csicons.min.js "></script>
   <script src="{{ asset('js/base/helpers.js') }}"></script>
   <script src="{{ asset('js/base/globals.js') }}"></script>
   <script src="{{ asset('js/base/nav.js') }} "></script>
   <script src="{{ asset('js/base/search.js') }} "></script>
   <script src="{{ asset('js/base/settings.js') }} "></script>
   <script src="js/base/init.js"></script>
   <!-- Page Specific Scripts Start -->
   <script src="{{ asset('js/cs/glide.custom.js') }} "></script>
   <script src="{{ asset('js/plugins/carousels.js') }} "></script>
   <script src="{{ asset('js/common.js') }} "></script>
   <script src="{{ asset('js/scripts.js') }} "></script>

   <script src="{{ asset('js/forms/layouts.js') }} "></script>

   <!-- Page Specific Scripts End -->

    @yield('js')
</body>

</html>
