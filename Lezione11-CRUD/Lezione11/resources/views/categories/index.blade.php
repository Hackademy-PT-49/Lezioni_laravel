<x-layout>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                <td colspan="2">{{$category->name}}</td>
                <td><a href="{{route('categories.edit',$category)}}"><button class="btn btn-secondary">Modifica</button></a>
                <form action="{{route('categories.destroy',$category)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="alert('Sei sicuro?')">Elimina</button>
                </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</x-layout>