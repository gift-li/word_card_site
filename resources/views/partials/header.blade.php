{{-- copy from https://larainfo.com/blogs/tailwind-css-navbar-ui-example --}}
<nav class="container flex justify-around py-8 mx-auto bg-white border-b">
    <div class="flex items-center">
        <h3 class="text-2xl font-medium text-blue-500">LOGO</h3>
    </div>
    <!-- left header section -->
    <div class="items-center hidden space-x-8 lg:flex">
        <a href="/">Home</a>
        <a href="{{ route('word_cards.index') }}">Word Card</a>
        <a href="">Contact Us</a>
    </div>
    <!-- right header section -->
    <div class="flex items-center space-x-2">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="p-2 rounded-full bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-200" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </a>
            @else
                <div class="flex items-center space-x-2">
                    <a href="{{ route('login') }}" class="text-sm text-gray-200 bg-blue-800 rounded-md px-4 py-2">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-200 bg-gray-400 rounded-md px-4 py-2">
                            Register
                        </a>
                    @endif
                </div>
            @endauth
        @endif
    </div>
</nav>
