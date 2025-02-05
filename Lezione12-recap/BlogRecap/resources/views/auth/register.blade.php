<x-layout>
    <h2> Registrazione utente</h2>
    <form action="{{route('register.store')}}" method="post">
        @csrf
        <label for="name">Inserisci il tuo nome:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
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
        <label for="password_c">Conferma la password:</label>
        <input type="password" name="password_confirmation" id="password_c" class="form-control" >
        @error('password_confirmation')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</x-layout>