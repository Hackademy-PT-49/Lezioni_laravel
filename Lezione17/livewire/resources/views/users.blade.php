<x-layout>
    {{-- @dd($users) --}}
    @foreach($users as $user)
        <h1>{{$user->name}}</h1>
    @endforeach

    <div>{{$users->links()}}</div>
</x-layout>