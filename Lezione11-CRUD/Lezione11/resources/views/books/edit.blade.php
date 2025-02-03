<x-layout>
    <h1>Modifica libro {{$book->title}}</h1>
    <form action="{{route('books.update',$book)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" value="{{old('title',$book->title)}}">
        @error('title')
            {{$message}}
        @enderror
        <label for="author">Autore</label>
        <input type="text" name="author" class="form-control" id="author"  value="{{old('author',$book->author)}}">
        @error('author')
            {{$message}}
        @enderror
        <label for="image">Copertina</label>
        <input type="file" name="image" class="form-control" id="image">
        @error('image')
            {{$message}}
        @enderror
        <button type="submit" class="btn btn-primary"> Aggiorna</button>
    </form>
</x-layout>