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
        Schema::table('articles', function (Blueprint $table) {
            $table->string('category',50)->after('description')->default('Generic description 123...');
        });

        // $table->string()->nullable() imposta la colonna in modo che possa contenere valori NULL
        // after('nomeColonna) mette la colonna in seguito a quella scritta tra parentesi
        // default('valore) imposta un valore di default per la colonna
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
