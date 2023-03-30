<x-layout>
    <x-slot name="content">

        queue content: 
    @foreach($songs as $song)
        {{ $song->name }}
    @endforeach
    {{-- <form method='POST' \action='{{$playlist->id}}'>
        @csrf
        Name: <input type='text' name='name' value='{{$playlist->name}}' required><br>
        <input type='submit' value='edit'>
    </form> --}}


    </x-slot>
</x-layout>