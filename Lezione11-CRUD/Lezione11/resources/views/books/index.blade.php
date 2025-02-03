<x-layout>
    <div class="container">
        <div class="row">
            <form action="{{route('books.search')}}" method="post">
                @csrf
                <input type="text" name="search">
                <button>Cerca</button>
            </form>
            @foreach ($books as $book)
                <div class="col-4">
                    <x-card :title="$book->title" :author="$book->author" :route="route('books.show',$book)">
                        <a href="{{route('books.edit',$book)}}"><button class="btn btn-secondary">Modifica</button>
                        <form action="{{route('books.destroy',$book)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Elimina</button>
                        </form>
                        
                        
                        </a>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>