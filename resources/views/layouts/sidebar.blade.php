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

<body class="font-sans antialiased bg-white dark:bg-gray-500">
    <div class="container w-full mx-auto md:flex md:flex-row md:min-h-screen md:py-5">
        @include('partials.sidebar')

        <div
            class="container w-full h-full mx-auto overflow-x-auto bg-white text-gray-900 dark:bg-gray-700 dark:text-gray-100 px-6 py-12 lg:pt-16 lg:pb-28 rounded-none md:rounded-lg dark:rounded-b-lg md:ml-2">
            @yield('content')
        </div>
    </div>

    @yield('scripts')

    <script src="{{ asset('js/darkmode.js') }}"></script>

    @livewireScripts
</body>

</html>
