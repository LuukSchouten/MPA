<x-layout>
    <x-slot name="content">

    <h1>
        Songs :
    </h1>

    <!-- add filter by genre functionality -->

    <?php foreach($song as $song){?>

                <a href="/song/{{$song->id}}">{{$song->name}}</a>
                - {{$song->author}}
                <br><br>

    <?php } ?>



    </x-slot>
</x-layout>
