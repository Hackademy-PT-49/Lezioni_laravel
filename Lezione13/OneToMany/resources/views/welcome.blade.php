<x-layout>
    <h1>Crea il tuo libro</h1>
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title">
        </div>
        <div class="mb-3">
            <select name="author" id="">
                <option value="" selected>--Scegli un autore--</option>
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>             
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select name="category" id="">
                <option value="" selected>--Scegli una categoria--</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>             
                @endforeach
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>