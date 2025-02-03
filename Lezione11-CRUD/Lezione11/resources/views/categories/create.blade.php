<x-layout>
    <div class="container">
        <div class="col-6 mx-auto">
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                <label for="name">Nome categoria</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
                @error('name')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
                <button class="btn btn-primary mt-3">Crea</button>
            </form>
        </div>
    </div>
</x-layout>