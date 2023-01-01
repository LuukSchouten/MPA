<x-layout>
    <x-slot name="content">

    <h3>Edit song: {{ $song->name }}</h2>
    <form method='POST' action='{{$song->id}}'>
        @csrf
        Name: <input type='text' name='name' value='{{$song->name}}' required><br>
        Genre: <input type='text' name='genre' value='{{$song->genre}}' required><br>
        Length: <input type='time' name='length' value='{{$song->length}}' step="1" required><br>
        Author: <input type='text' name='author' value='{{$song->author}}' required><br><br>
        <input type='submit' value='edit'>
    </form>

    </x-slot>
</x-layout>