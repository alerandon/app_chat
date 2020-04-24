<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="/js/vue.js"></script>
    <script src="/js/vue-router.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-300 text-gray-700">
    <div id="app">

        <nav class="bg-blue-800 flex h-12 p-2 mb-12 sticky w-full top-0 z-10">
          <div class="flex justify-start pl-3 w-1/2">
            <p class="text-white font-sans font-medium text-xl">The Chat</p>
          </div>
          <div class="flex justify-end pr-8 w-1/2">
          <user_dropdown logout-route="{{ route('logout') }}"></user_dropdown>
          </div>
        </nav>


        @yield('content')

    </div>
</body>
</html>
