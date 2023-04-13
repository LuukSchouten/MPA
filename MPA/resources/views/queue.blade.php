<x-layout>
    <x-slot name="content">

        queue content: 
        <br><br>
        <?php foreach($songs as $song){?>
            <a href="/song/{{$song->id}}">{{ $song->name }}</a> - {{$song->author}} 
            <br><br>
        <?php } ?>

    </x-slot>
</x-layout>