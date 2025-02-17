<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(['name'=>'Pino','email'=>'pino@gmail.com','role'=>'admin']);
        User::factory()->create(['name'=>'Pino2','email'=>'pino2@gmail.com','role'=>'moderator']);
        User::factory()->create(['name'=>'Pino3','email'=>'pino3@gmail.com','role'=>'writer']);
        User::factory()->create([
            'name' => 'Emanuele',
            'email' => 'emanuele@example.com','role'=>'admin'
        ]);
    }
}
