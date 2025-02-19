<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\actor;
use App\Models\film;

class actor_to_film_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actors = actor::all();
        $films = film::all();
        
        foreach ($actors as $actor) {
            $actor->films()->attach($films->random(rand(1, 3)));
        }
    }
}
