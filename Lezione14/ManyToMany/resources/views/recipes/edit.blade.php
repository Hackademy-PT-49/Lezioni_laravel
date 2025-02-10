<x-layout>
    <h1>Modifica ricetta</h1>
    <form action="{{ route('recipes.update', $recipe) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome ricetta</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $recipe->name) }}">
        </div>
        <div class="mb-3">
            <label for="cook_time" class="form-label">Tempo di cottura</label>
            <input type="number" class="form-control" id="cook_time" name="cook_time"
                value="{{ old('cook_time', $recipe->cook_time) }}">
        </div>
        <div class="d-flex gap-3">
          @foreach ($ingredients as $ingredient)
              <div class="mb-3 form-check ">
                  <input type="checkbox" class="form-check-input" name="ingredients[]"
                      id="ingredient{{ $ingredient->id }}" value="{{ $ingredient->id }}"
                        @checked( $recipe->ingredients->contains($ingredient)) >
  
                    
                  <label class="form-check-label" for="ingredients{{ $ingredient->id }}">{{ $ingredient->name }}</label>
              </div>
          @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>

    <form action="{{route('recipes.destroy',$recipe)}}" method="POST">
      @csrf @method('DELETE') 
      <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
</x-layout>
