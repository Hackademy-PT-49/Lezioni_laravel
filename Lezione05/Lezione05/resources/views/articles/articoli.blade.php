<x-layout>
    
    <div class="container">
        <h1>{{$title ?? 'Titolo default'}}</h1>
        {{-- @dd($articoli) --}}
        <div class="row">
        @foreach ($articoli as $articolo)
            @if ($articolo['approvato']==true)
            
                <x-card :title="$articolo['titolo']" :text="$articolo['testo']" :route="route('article.detail',$articolo['id'])"></x-card>
               {{-- <a href="{{route('article.detail',$articolo['id'])}}"> <p>{{ $articolo['titolo'] }}</p></a> --}}
            @endif
        @endforeach
    </div>
    </div>
</x-layout>

