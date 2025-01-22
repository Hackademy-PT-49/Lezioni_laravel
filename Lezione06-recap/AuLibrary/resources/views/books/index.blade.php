<x-layouts.layout>
   
    <div class="container">
        <h1>Ecco la lista dei nostri libri</h1>
        <div class="row">
            @foreach ($books as $book)
                 <x-card :title="$book['titolo']" :description="$book['descrizione']" :route="route('books.show',$book['id'])"></x-card>   
            @endforeach
        </div>
    </div>
</x-layouts.layout>