<x-layout>
    <h1>Modifica l'auto</h1>
    <form method="POST" action="{{ route('cars.update',$car) }}" class="col-6">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="model" class="form-label">Modello macchina:</label>
            <input type="text" class="form-control" id="model" name="model" value="{{old('model',$car->model)}}">
        </div>
        @error('model')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="model" class="form-label">Colore:</label>
            <input type="text" class="form-control" id="model" name="color" value="{{old('color',$car->color)}}">
        </div>
        @error('color')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="model" class="form-label">Prezzo:</label>
            <input type="number" class="form-control" id="model" name="price" value="{{old('price',$car->price)}}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="brand" class="form-label">Prezzo:</label>
        <select name="brand" id="brand" class="form-select">
            @foreach ($brands as $brand)
                <option value="{{$brand->id}}" @selected($car->brand_id == $brand->id)>{{$brand->name}}</option>
            @endforeach
        </select>
        <h4>Accessori:</h4>
        <div class="d-flex">
            @foreach ($accessories as $accessory)
            <div>
                <input @checked($car->accessories->contains($accessory)) type="checkbox" name="accessories[]" id="accessory{{$accessory->id}}" value="{{$accessory->id}}">
                <label for="accessory{{$accessory->id}}" class="form-label">{{$accessory->name}}</label></div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    
</x-layout>
