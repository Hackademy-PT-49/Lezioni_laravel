<x-layout>
    <x-alerts.success></x-alerts.success>
    <form class="col-6 mx-auto" action="{{route('articles.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="exampleInputEmail2" name="description">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail3" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="category">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Corpo</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="body">
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</x-layout>