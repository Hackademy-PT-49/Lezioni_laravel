<x-layout>
    <div class="container">
        <form action="{{route('register.store')}}" method="post">
            @csrf
        <label for="name">Inserisci il tuo nome</label>
        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
        @error('name')
            {{$message}}
        @enderror
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email"  value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        <label for="password_confirmation">Conferma Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        @error('password')
            {{$message}}
        @enderror
        
        <button type="submit" class="btn btn-primary"> Registrati</button>
        </form>
    </div>

</x-layout>