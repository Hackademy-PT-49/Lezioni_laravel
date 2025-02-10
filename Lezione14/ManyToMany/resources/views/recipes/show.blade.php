<x-layout>
    <h1>{{ $recipe->name }}</h1>
    <h3>Tempo di cottura: {{ $recipe->cook_time }} minuti</h3>
    <h4>Ingredienti:</h4>
    <p>
        @foreach ($recipe->ingredients as $ingredient)
            {{ $loop->index + 1 }}.
            {{ $ingredient->name }}
        @endforeach
    </p>
</x-layout>
