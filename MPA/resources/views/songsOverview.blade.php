<x-layout>
    <x-slot name="content">

    <h1>
        Songs :
    </h1>

    <!-- add filter by genre functionality -->
    <form method='get' action='songsOverview'>
        <select name='genre' style='margin-right: 1em'>
            <option> </option>
            <?php foreach($genre as $genres){?>
                <option> {{$genres->genre}} </option>
            <?php } ?>
            <input type='submit' value='filter'>
        </select>
    </form>
    <br><br>

    <?php foreach($song as $song){?>

        <a href="/song/{{$song->id}}">{{$song->name}}</a> - {{$song->author}} 
        <a href="/editSong/{{$song->id}}"><button title="edit song" class="editBtn"><i class="fa-regular fa-pen-to-square"></i></button></a>
        <a href="/deleteSong/{{$song->id}}"><button title="delete song" class="deleteBtn">x</button></a>
        <br><br>

    <?php } ?>

    <a class="styledLink" href="createSong">
        <p class="centeredText">Add song</p>
    </a>

    </x-slot>
</x-layout>
