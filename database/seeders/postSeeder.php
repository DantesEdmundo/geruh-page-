<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::factory(50)->create();
    }
}
