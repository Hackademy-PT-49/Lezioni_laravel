<x-layout>
    {{-- @dd($genres) --}}
    <h1>Lista di generi</h1>
    <ul>
        @foreach ($genres as $genre)
            <a href="{{route('anime.byGenre',$genre['mal_id'])}}"><li>{{$genre['name']}}</li></a>
        @endforeach
    </ul>
</x-layout>