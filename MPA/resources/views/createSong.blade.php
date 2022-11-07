<x-layout>
    <x-slot name="content">

    <h3>Add a new song</h2>
    <form method='POST' action='createSong'>
        @csrf
        Name: <input type='text' name='name' required><br>
        Genre: <input type='text' name='genre' required><br>
        Length: <input type='time' name='length' step="1" required><br>
        Author: <input type='text' name='author' required><br><br>
        <input type='submit' value='submit'>
    </form>

    </x-slot>
</x-layout>