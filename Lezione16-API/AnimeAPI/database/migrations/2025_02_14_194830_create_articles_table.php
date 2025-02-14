<?php

use App\Models\Article;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->integer('views');
            $table->timestamps();
        });

        Article::create(['title'=>'Prova','category'=>'TEst di categoria','views'=>510]);
        Article::create(['title'=>'Titolo','category'=>'Sport di categoria','views'=>53210]);
        Article::create(['title'=>'Cestino','category'=>'Area di categoria','views'=>51220]);
        Article::create(['title'=>'Sport','category'=>'Ballo di categoria','views'=>51110]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
