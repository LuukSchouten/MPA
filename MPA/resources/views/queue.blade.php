<x-layout>
    <x-slot name="content">

        queue content: 
        <br><br>
        <?php foreach($songs as $song){?>
            <a href="/song/{{$song->id}}">{{ $song->name }}</a> - {{$song->author}} 
            <a href="/Queue/remove/{{$song->id}}"><button title="delete song" class="deleteBtn">x</button></a>
            <br><br>
        <?php } ?>

        <a class="styledLink" href="createQueuePlaylist">
            <p class="centeredText">Create queue playlist</p>
        </a>

    </x-slot>
</x-layout>