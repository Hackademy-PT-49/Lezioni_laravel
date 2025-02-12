<?php

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
        Schema::create('accessory_car', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('accessory_id');
            $table->foreign('accessory_id')->references('id')->on('accessories');

            $table->foreignId('car_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessory_car');
    }
};
