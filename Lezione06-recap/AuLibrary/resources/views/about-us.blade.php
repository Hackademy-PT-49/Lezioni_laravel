<x-layouts.layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 col-md-12 mx-auto">
                <h1>Chi siamo</h1>
            </div>
            <div class="col-8">
                <form action="{{route('feedback.send')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="feedback" class="form-label">Feedback</label>
                        <textarea class="form-control" id="feedback" cols="30" rows="10" name="message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
       </div>
</x-layouts.layout>