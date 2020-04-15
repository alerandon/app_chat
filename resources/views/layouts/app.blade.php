<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-full h-full m-0">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-300 text-gray-700 w-full h-full m-0">
    <div id="app" class="w-full min-h-full m-0">

        <nav class="bg-blue-800 p-2 mb-12 sticky top-0 z-10">
            <div class="lg:container pl-3">
                <p class="text-white font-sans font-medium text-xl">The Chat</p>
            </div>
        </nav>

        @yield('content')

    </div>
</body>
</html>
