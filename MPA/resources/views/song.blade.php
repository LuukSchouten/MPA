<x-layout>
    <x-slot name="content">

    {{$song->name}}
    {{$song->genre}}
    {{$song->length}}
    {{$song->author}}

    </x-slot>
</x-layout>