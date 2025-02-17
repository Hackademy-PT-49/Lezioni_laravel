{{-- Non posso avere più di un tag alla radice di un componente livewire --}}

<div>
    <h1>{{$counter}}</h1>
    <button wire:click="increment({{$numero}})">{{$numero}}</button>
    <button wire:click="decrement({{$numero}})">{{$numero}}</button>

    <input type="text" wire:model.live="numero">
    {{$users}}
</div>
