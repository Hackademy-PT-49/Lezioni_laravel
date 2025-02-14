<x-layout>
    {{-- @dd($animes) --}}
    <div class="row">
        @foreach ($animes as $anime)
        
            <div class="card" style="width: 18rem;">
                <img src="{{$anime['images']['jpg']['image_url']}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <p class="card-text">{{$anime['title']}}</p>
                <div><a href="{{route('anime.show',$anime['mal_id'])}}" class="btn btn-primary">Visualizza</a></div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>