<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Nova Free Bootstrap Template for Agency — by FreeBootstrap.net')</title>

    @include('partials._head')
</head>

<body>

    <div class="site-wrap">

        @include('partials._header')

        <main>
            @yield('content')
        </main>
        @include('partials._footer')

    </div>
    @include('partials._back-to-top')

    @include('partials._scripts')
</body>

</html>
