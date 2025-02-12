<x-layout>
    <h1>Homepage</h1>

    <ul>
        @foreach($cars as $car)
        <li class="mt-3">
            <div class="row gap-3">
            <a href="{{route('cars.show',$car)}}" class="col-3" ><button class="btn btn-primary w-100" >{{$car->model}}</button></a>
            <a href="{{route('cars.edit',$car)}}" class="col-2"><button class="btn btn-secondary w-100">Modifica</button></a>
            <form action="{{route('cars.destroy',$car)}}" method="post" class="col-2" onsubmit="return confirm('Sei sicuro di voler eliminare la macchina {{$car->name}}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger w-100">Elimina</button>
            </form>
            </div>
        </li>
        <br>
        @endforeach
    </ul>
    
</x-layout>