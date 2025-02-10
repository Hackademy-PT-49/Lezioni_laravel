<x-layout>
    <div class="container">
        <ul>
            @foreach ($ingredients as $ingredient)
                   <li> <a href="{{route('ingredients.show',$ingredient)}}"><button class="btn btn-primary">{{$ingredient->name}}</button></a></li>
            @endforeach
        </ul>
    </div>
</x-layout>