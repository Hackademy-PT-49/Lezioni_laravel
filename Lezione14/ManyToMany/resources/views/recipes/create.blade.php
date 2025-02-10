<x-layout>
    <h1>Creazione ricetta</h1>
    <form action="{{route('recipes.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome ricetta</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="cook_time" class="form-label">Tempo di cottura</label>
          <input type="number" class="form-control" id="cook_time" name="cook_time">
        </div>
        @foreach ($ingredients as $ingredient)    
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="ingredients[]" id="ingredient{{$ingredient->id}}" value="{{$ingredient->id}}">
          <label class="form-check-label" for="ingredients{{$ingredient->id}}">{{$ingredient->name}}</label>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</x-layout>