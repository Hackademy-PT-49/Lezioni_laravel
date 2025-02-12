<x-layout>
    <h1>Inserisci nuova auto</h1>
    <form method="POST" action="{{ route('cars.store') }}" class="col-6">
        @csrf
        <div class="mb-3">
            <label for="model" class="form-label">Modello macchina:</label>
            <input type="text" class="form-control" id="model" name="model">
        </div>
        @error('model')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="model" class="form-label">Colore:</label>
            <input type="text" class="form-control" id="model" name="color">
        </div>
        @error('color')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="model" class="form-label">Prezzo:</label>
            <input type="number" class="form-control" id="model" name="price">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="brand" class="form-label">Prezzo:</label>
        <select name="brand" id="brand" class="form-select">
            <option value="" selected>Scegli la tua marca</option>
            @foreach ($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
        <h4>Accessori:</h4>
        <div class="d-flex">
            @foreach ($accessories as $accessory)
            <div><input type="checkbox" name="accessories[]" id="accessory{{$accessory->id}}" value="{{$accessory->id}}">
                <label for="accessory{{$accessory->id}}" class="form-label">{{$accessory->name}}</label></div>
            @endforeach
        </div>

        
        
     

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</x-layout>
