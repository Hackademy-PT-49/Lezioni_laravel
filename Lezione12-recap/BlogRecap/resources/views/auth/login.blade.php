<x-layout>
    <h2> Login </h2>
    <form action="{{route('login.store')}}" method="post">
        @csrf
        
        <label for="email">Inserisci la tua email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="password">Inserisci la password:</label>
        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</x-layout>