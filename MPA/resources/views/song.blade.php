<x-layout>
    <x-slot name="content">

    Name: {{$song->name}}
    <br>
    Genre: {{$song->genre}}
    <br>
    Length: {{$song->length}}
    <br>
    Author: {{$song->author}}

    </x-slot>
</x-layout>