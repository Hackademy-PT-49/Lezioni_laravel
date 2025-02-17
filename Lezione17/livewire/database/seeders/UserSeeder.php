<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->has(Article::factory())->create();

        
    }
}
