<x-layout>
    <x-slot name="content">

    <h3>Create new playlist</h2>
    <form method='POST' action='createQueuePlaylist'>
        @csrf
        Name: <input type='text' name='name' required>
        <input type='submit' value='submit'>
    </form>

    </x-slot>
</x-layout>