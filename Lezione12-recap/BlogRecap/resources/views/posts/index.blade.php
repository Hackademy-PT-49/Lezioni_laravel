<x-layout>
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">Elenco di tutti gli articoli</h1>
          
        </div>
      </div>
      <div class="row mb-2">
        @foreach ($posts as $post)
            <x-post :post="$post"></x-post>
        @endforeach
        
      </div>
</x-layout>