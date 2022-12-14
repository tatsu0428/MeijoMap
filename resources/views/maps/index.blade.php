<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Meijo Map</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <header>
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                            
                        <a href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                            
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </header>
                    @if (Auth::user()->role_id == 2)
                        <div class='admin'>
                            <p class='user'>
                                @csrf
                                <a href="/users">Users</a>
                            </p>
                        </div>
                    @endif
                @else
                    <header>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    </header>
                @endauth
            </div>
        @endif
        <h1>Meijo Map</h1>
        <h2>Building Name</h2>
        <div class='maps'>
            @foreach ($maps as $map)
                <div class='map'>
                    <h2 class='bulding_name'>
                        <a href="/maps/{{ $map->map_id }}">{{ $map->building_name }}</a>
                    </h2>
                    <p class='introduction'>{{ $map->introduction }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
