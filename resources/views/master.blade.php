<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'koncrate')</title>

    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">

    <!-- Custom Stylesheets -->
    @yield('stylesheets')
</head>
<body>
    <!-- Navigation Menu -->
    @include('partials.menu')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Custom Scripts -->
    @yield('javascripts')
</body>
</html>
