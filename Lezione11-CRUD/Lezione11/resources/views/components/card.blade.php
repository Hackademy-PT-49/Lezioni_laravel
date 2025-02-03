<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $author }}</p>
        <a href="{{ $route }}" class="btn btn-primary">Dettaglio</a>
        {{$slot}}
    </div>
</div>
