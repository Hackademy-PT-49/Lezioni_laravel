<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$book->title}}</h5>
      <p class="card-text">{{$book->author->name ?? 'Ciao'}} @if($book->category) {{$book->category->name}} @endif</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>