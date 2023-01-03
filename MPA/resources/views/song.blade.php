<x-layout>
    <x-slot name="content">

    <p>Name: {{$song->name}}</p>
    <p>Genre: {{$song->genre}}</p>
    <p>Length: {{$song->length}}</p>
    <p>Author: {{$song->author}}</p>  

    add to playlist:
    <form method='POST' action='/addToPLaylist/{{$song->id}}'>
    @csrf

        <select name="playlist_id">

            <?php foreach($playlist as $playlist){?>
                <option value="{{$playlist->id}}">{{$playlist->name}}</option>
            <?php } ?>

        </select>

        <input type='submit' value='add'>

    </form>

    </x-slot>
</x-layout>