<x-layout>
    <div class="container">
        <form action="{{route('login.store')}}" method="post">
        @csrf
       
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email"  value="{{old('email')}}">
        @error('email')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @error('password')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        
        <button type="submit" class="btn btn-primary"> Login</button>
        </form>
    </div>

</x-layout>