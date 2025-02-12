<?php

use App\Models\Accessory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->timestamps();
        });

        Accessory::create(['name'=>'Sedili riscaldabili','price'=>'200.00']);
        Accessory::create(['name'=>'Radio','price'=>'50.00']);
        Accessory::create(['name'=>'Sensori parcheggio','price'=>'150.00']);
        Accessory::create(['name'=>'Navigatore','price'=>'89.99']);
        Accessory::create(['name'=>'Bluetooth','price'=>'49.99']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
