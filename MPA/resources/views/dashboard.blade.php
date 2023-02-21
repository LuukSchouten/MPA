<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a class="styledLink" href="songsOverview">
                        <p class="centeredText">Songs</p>
                      </a>
                  
                      <a class="styledLink" href="playlistsOverview">
                          <p class="centeredText">Playlists</p>
                      </a>
                  
                      <a class="styledLink" href="Queue">
                          <p class="centeredText">Queue</p>
                      </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
