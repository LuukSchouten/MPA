<x-layout>
    <x-slot name="content">

    <p>Playlist name: {{$playlist->name}}</p>
 
    <p>Songs:</p>
    
    <?php foreach($songs as $song){?>
        {{ $song->name }}
        <br>
    <?php } ?>

    <p>Total length:</p>

    </x-slot>
</x-layout>