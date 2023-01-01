<x-layout>
    <x-slot name="content">

    <h1>
        Songs :
    </h1>

    <!-- add filter by genre functionality -->

    <?php foreach($song as $song){?>

        <a href="/song/{{$song->id}}">{{$song->name}}</a> - {{$song->author}} 
        <a href="/deleteSong/{{$song->id}}"><button title="delete song" class="deleteBtn">x</button></a>
        <a href="/editSong/{{$song->id}}"><button title="edit song" class="editBtn"><i class="fa-regular fa-pen-to-square"></i></button></a>
        <br><br>

    <?php } ?>

    <a class="styledLink" href="createSong">
        <p class="centeredText">Add song</p>
    </a>

    </x-slot>
</x-layout>
