<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$recipe->name}}</h5>
      <a href="{{route('recipes.show',$recipe)}}" class="btn btn-primary">Leggila</a>
    </div>
  </div>