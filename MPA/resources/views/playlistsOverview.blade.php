<x-layout>
    <x-slot name="content">

    <?php foreach($playlist as $playlist){?>

      playlist: <a href="/playlist/{{$playlist->id}}">{{$playlist->name}}</a>
      <br>
      <br>

    <?php } ?>

    <a class="styledLink" href="createPlaylist">
      <p class="centeredText">Create playlist</p>
    </a>

    </x-slot>
</x-layout>