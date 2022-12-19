<x-layout>
    <x-slot name="content">

    <p>Name: {{$song->name}}</p>
    <p>Genre: {{$song->genre}}</p>
    <p>Length: {{$song->length}}</p>
    <p>Author: {{$song->author}}</p>  

    </x-slot>
</x-layout>