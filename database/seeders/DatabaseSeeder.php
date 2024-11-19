<?php

namespace Database\Seeders;

use App\Models\comentario;
use App\Models\post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        comentario::factory(5)->create();
    }
}
