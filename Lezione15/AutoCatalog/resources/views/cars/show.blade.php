<x-layout>

<h1>{{$car->name}}</h1>

<h2>{{$car->brand->name}} </h2>
<h3>Contattali all'indirizzo: {{$car->brand->email}}</h3>

<h4>Accessori della macchina:</h4>
<ul>
    @foreach($car->accessories as $accessory)
    <li>
        {{$accessory->name}}
    </li>
    @endforeach
</ul>

<h4>Prezzo macchina: {{$car->price + $car->accessories->sum('price')}} </h4>

</x-layout>