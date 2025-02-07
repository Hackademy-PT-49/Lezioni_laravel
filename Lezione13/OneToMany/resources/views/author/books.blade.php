<x-layout>
    <h2> Libri dell'autore {{$author->name}}</h2>
    @foreach($author->books as $book)
    <x-card :$book></x-card>
    @endforeach

</x-layout>