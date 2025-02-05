<x-layout>
    <h2>Elenco post</h2>
    <div><a href="{{route('posts.create')}}"><button class="btn btn-success">Creane uno</button></a></div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col"></th>
            
          </tr>
        </thead>
        <tbody>


            @foreach($posts as $post)

          <tr>
            <th scope="row">1</th>
            <td>{{$post->title}}</td>
            
            <td><a href="{{route('posts.edit',$post)}}"><button class="btn btn-secondary">Modifica</button></a>
                <form action="{{route('posts.destroy',$post)}}" class="d-inline" method="POST" onsubmit="return confirm('Sei sicuro?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>
            
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</x-layout>