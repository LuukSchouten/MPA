<x-layout>
    <x-slot name="content">

    <h3>Create new playlist</h2>
    <form method='POST' action='createPlaylist'>
        @csrf
        Name: <input type='text' name='name'>
        <input type='submit' value='submit'>
    </form>

    </x-slot>
</x-layout>