<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body class="min-h-screen overflow-x-hidden flex flex-col">

    @include('layout.navbar')

    <main id="page-content" class="flex-1" style="padding-top: var(--navbar-height, 0px);">
        @yield('content')
    </main>

    @include('layout.footer')

    <script>
        (function () {
            function syncNavbarOffset() {
                const navbar = document.getElementById('site-navbar');
                const navbarHeight = navbar ? navbar.offsetHeight : 0;
                document.documentElement.style.setProperty('--navbar-height', `${navbarHeight}px`);
            }

            document.addEventListener('DOMContentLoaded', syncNavbarOffset);
            window.addEventListener('resize', syncNavbarOffset);
        })();
    </script>
</body>
</html>