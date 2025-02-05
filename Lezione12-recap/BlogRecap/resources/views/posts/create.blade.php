<x-layout>
    <h2>Crea il tuo post</h2>
    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
        @error('title')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="body">Testo</label>
        <textarea  class="form-control "name="body" id="body" cols="60" rows="10">{{old('body')}}</textarea>
        @error('body')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="visible">Attivo</label>
        <input type="checkbox" name="is_active" id="visible" value="1" @checked(old('is_active'))   >
        @error('visible')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <label for="image">Immagine di copertina</label>
        <input type="file" name="image" id="image" class="form-control">
        @error('image')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button class="btn btn-primary">Inserisci</button>
    </form>
</x-layout>