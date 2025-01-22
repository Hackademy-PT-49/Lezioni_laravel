<x-layouts.layout>

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-6">
                <h2>Stai leggendo il libro: {{ $book['titolo'] }}</h2>
                <h3>Descrizione breve: {{ $book['descrizione'] }}</h3>
                <p> {{ $book['testo'] }}</p>
            </div>
        </div>
    </div>




</x-layouts.layout>
