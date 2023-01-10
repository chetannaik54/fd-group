
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Fidelis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css" />
        <meta name="author" content="fidelisgroup." />
        <meta name="website" content="https://fidelisgroup.in" />
        <meta name="email" content="support@fidelisgroup.in" />
        <meta name="version" content="1.5.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />

        @yield('customcss')

    </head>
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

        {{-- @include('partials.navbar.nav-center-light') --}}
        {{-- @include('partials.navbar.nav-center-white-bg')
        @include('partials.navbar.nav-center')
        @include('partials.navbar.nav-left-light')
        @include('partials.navbar.nav-left')
        @include('partials.navbar.nav-right-light')
        @include('partials.navbar.nav-right') --}}

        @yield('content')

        {{-- @include('partials.footer.footer-four')
        @include('partials.footer.footer-light')
        @include('partials.footer.footer-small')
        @include('partials.footer.footer-three')
        @include('partials.footer.footer-transparent')
        @include('partials.footer.footer-two') --}}
        {{-- @include('partials.footer.footer') --}}

        @yield('script')
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>

</html>