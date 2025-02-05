<x-layout>
    <h2> Newsletter </h2>
    <form action="{{route('newsletter.send')}}" method="post">
        @csrf
        
        <label for="oggetto">Oggetto</label>
        <input type="text" name="oggetto" id="oggetto" class="form-control" value="{{old('oggetto')}}">
        @error('oggetto')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="testo">Messaggio</label>
        <input type="testo" name="testo" id="testo" class="form-control" value="{{old('testo')}}">
        @error('testo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</x-layout>