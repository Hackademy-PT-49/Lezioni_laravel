<x-layout>
    
    <div class="container">
        <h1>{{$title ?? 'Titolo default'}}</h1>

        <div class="row">
        @foreach ($articoli as $articolo)
            
            {{--asset('storage/'.$articolo->image)--}}
                <x-card :url="Storage::url($articolo->image)" :title="$articolo->title" :text="$articolo->body" :route="route('article.detail',$articolo->id)"></x-card>


        @endforeach
    </div>
    </div>
</x-layout>

