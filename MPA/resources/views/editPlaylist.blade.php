<x-layout>
    <x-slot name="content">

    <h3>Edit playlist: {{ $playlist->name }}</h2>
    <form method='POST' action='{{$playlist->id}}'>
        @csrf
        Name: <input type='text' name='name' value='{{$playlist->name}}' required><br>
        <input type='submit' value='edit'>
    </form>

    </x-slot>
</x-layout>