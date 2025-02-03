<x-layout>
    <h1>Homepage</h1>
    {{-- <h2>{{auth()->user()->name}}</h2> --}}
    @foreach ($books as $book)
        <img src="{{Storage::url($book->image)}}" class="img-fluid mt-3 img-thumbnail" alt="Ciao">
    @endforeach
</x-layout>