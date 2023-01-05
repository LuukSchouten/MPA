<x-layout>
    <x-slot name="content">

    <?php foreach($playlist as $playlist){?>

      playlist: <a href="/playlist/{{$playlist->id}}">{{$playlist->name}}</a>
      <a href="/deletePlaylist/{{$playlist->id}}"><button title="delete playlist" class="deleteBtn">x</button></a>
      <br>
      <br>

    <?php } ?>

    <a class="styledLink" href="createPlaylist">
      <p class="centeredText">Create playlist</p>
    </a>

    </x-slot>
</x-layout>