<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto p-5">
                <div class="col-4">
                    <img src="{{Storage::url($book->image)}}" class="img-fluid" alt="">
                </div>
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->author }}</p>
            </div>
        </div>
    </div>
</x-layout>
