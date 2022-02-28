<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.components.header')
        @yield('extra-header')
    </head>
    <body class="d-flex flex-column min-vh-100">
        {{-- NAVBAR --}}
        @include('layouts.components.mainNavbar')
        {{-- END NAVBAR  --}}

        {{-- HEADER BANNER  --}}
        @yield('header-banner')
        {{-- END HEADER BANNER  --}}

        <div class="flex-grow-1">
            @yield('breadcrumbs')
            @yield('content')
        </div>


        {{-- FOOTER  --}}
        @include('layouts.components.footer')
        {{-- END FOOTER  --}}

        <script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')
    </body>
</html>
