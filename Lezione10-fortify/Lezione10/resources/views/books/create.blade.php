<x-layout>
    <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
        @error('title')
            {{$message}}
        @enderror
        <label for="author">Autore</label>
        <input type="text" name="author" class="form-control" id="author"  value="{{old('author')}}">
        @error('author')
            {{$message}}
        @enderror
        <label for="image">Copertina</label>
        <input type="file" name="image" class="form-control" id="image">
        @error('image')
            {{$message}}
        @enderror
        <button type="submit" class="btn btn-primary"> Invia</button>
    </form>
</x-layout>