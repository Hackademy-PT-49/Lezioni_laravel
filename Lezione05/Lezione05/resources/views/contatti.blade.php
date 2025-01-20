<x-layout>
    <h1>Contattaci</h1>
    <x-alerts.success/>

    <div class="container">
        <div class="row">
            <form class="col-6 mx-auto" action="{{route('contact.send')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Messaggio</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="messaggio">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
