<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Design</strong>
        <h3 class="mb-0">{{$post->title}}</h3>
        <div class="mb-1 text-muted">{{$post->created_at}}</div>
        <p class="mb-auto">{{$post->body}}</p>
        <a href="{{route('posts.show',$post)}}" class="stretched-link">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="{{Storage::url($post->image)}}" class="img-fluid" alt="...">

      </div>
    </div>
  </div>