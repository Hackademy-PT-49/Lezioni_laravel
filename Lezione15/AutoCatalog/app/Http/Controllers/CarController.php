<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;
use App\Models\Accessory;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('cars.create',['brands'=>Brand::all(),'accessories'=>Accessory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {

        // dd(Car::find(11)->accessories);
        // dd($request->all());
        $car = Car::create([
            'model'=>$request->model,
            'color'=>$request->color,
            'price'=>$request->price
        ]);

        //Sezione 1-N
        $car->brand_id = $request->brand;
        $car->save();

        // $car->brand()->associate(Brand::find($request->brand));
        // $car->save();

        // $brand = Brand::find($request->brand);
        // $brand->cars()->create([
        //     'model'=>$request->model,
        //     'color'=>$request->color,
        //     'price'=>$request->price
        // ]);

        //Sezione N-N

        $car->accessories()->attach($request->accessories);

        return redirect()->back()->with('success','Macchina inserita a database');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        $total = $car->price;

        $total += $car->accessories->sum('price');

        return view('cars.show',compact('car','total'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $accessories = Accessory::all();
        return view('cars.edit',compact('car','brands','accessories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car_name = $car->model;
        $car->update(['model'=>$request->model,'color'=>$request->color,'price'=>$request->price,'brand_id'=>$request->brand]);

        // $car->accessories()->detach();
        // $car->accessories()->attach($request->accessories);

        $car->accessories()->sync($request->accessories);

        return redirect()->back()->with('success','Macchina '.$car_name.' modificata correttamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->accessories()->detach();
        $car->delete();
        return redirect()->back()->with('success','Macchina eliminata correttamente!');
    }
}
