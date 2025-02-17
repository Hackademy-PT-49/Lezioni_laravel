<div>
    <div><input type="text" wire:model.live="search"></div>
    <div wire:loading> 
        Saving post...
    </div>
    @foreach ($users as $user)
        <div class="alert">
            <h1>{{$user->name}}</h1>
            <h2>{{$user->email}}</h2>
        </div>
    @endforeach
</div>
