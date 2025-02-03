<x-layout>
    <div class="container">
        <div class="col-6 mx-auto">
            <form action="{{route('categories.update',$category)}}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Nome categoria</label>
                <input type="text" name="name" id="name" value="{{old('name',$category->name)}}">
                @error('name')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <button class="btn btn-primary mt-3">Aggiorna</button>
            </form>
        </div>
    </div>
</x-layout>