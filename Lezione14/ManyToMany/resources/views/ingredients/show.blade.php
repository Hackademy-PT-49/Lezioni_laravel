<x-layout>
    <div class="container">
        <div class="row">
            @foreach($ingredient->recipes as $recipe)
            <x-card :recipe="$recipe"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>