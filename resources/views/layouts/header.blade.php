<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>@yield('title')</title>

    {{-- Dark Modes local Setting --}}
    <script>
        // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('styles')
</head>

<body class="font-sans antialiased">
    @include('partials.header')

    <div class="container w-full mx-auto lg:pt-6 lg:flex lg:h-screen lg:w-64">
        <div class="flex flex-col w-full px-4 py-8 overflow-y-auto border-b lg:border-r lg:h-screen lg:w-64">
            @include('partials.sidebar')

            <div class="container h-full p-4 m-8 mx-auto overflow-y-auto">
                @yield('content')
            </div>
        </div>

    </div>

    @include('partials.footer')

    @yield('scripts')

    <script src="{{ asset('js/darkmode.js') }}"></script>

    @livewireScripts
</body>

</html>
