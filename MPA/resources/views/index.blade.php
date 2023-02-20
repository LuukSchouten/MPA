<x-layout>
    <x-slot name="content">

    @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block login">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    <a class="styledLink" href="songsOverview">
      <p class="centeredText">Songs</p>
    </a>

    <a class="styledLink" href="playlistsOverview">
        <p class="centeredText">Playlists</p>
    </a>

    <a class="styledLink" href="Queue">
        <p class="centeredText">Queue</p>
    </a>

    </x-slot>
</x-layout>