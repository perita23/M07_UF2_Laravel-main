<?php

namespace Database\Seeders;

use App\Models\actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $times = 40;
        for ($i = 0; $i < $times; $i++) {
            actor::create([
                'name' => fake()->name(),
                'surname' => fake()->firstName(),
                'birthdate' => fake()->date(),
                'country' => fake()->country(),
                'img_url' => fake()->imageUrl()
            ]);
        }

    }
}
