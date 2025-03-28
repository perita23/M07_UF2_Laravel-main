<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class filmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'name' => 'La Rosa Púrpura del Cairo',
                'year' => 1985,
                'genre' => 'Drama',
                'country' => 'Spain',
                'duration' => 2,
                'img_url' => 'https://es.web.img2.acsta.net/medias/nmedia/18/79/45/34/20253823.jpg',
            ],
            [
                'name' => 'El Club de los Cinco',
                'year' => 1985,
                'genre' => 'Comedia',
                'country' => 'Spain',
                'duration' => 2,
                'img_url' => 'https://pics.filmaffinity.com/El_club_de_los_cinco-192309838-large.jpg',
            ],
            [
                'name' => 'Forrest Gump',
                'year' => 1994,
                'genre' => 'Drama',
                'country' => 'Spain',
                'duration' => 2,
                'img_url' => 'https://pics.filmaffinity.com/Forrest_Gump-212765827-large.jpg',
            ],
            [
                'name' => 'Arrival',
                'year' => 2016,
                'genre' => 'Ciencia Ficción',
                'country' => 'Spain',
                'duration' => 2,
                'img_url' => 'https://pics.filmaffinity.com/La_llegada-686966912-large.jpg',
            ],
            [
                'name' => 'As Bestas',
                'year' => 2022,
                'genre' => 'Drama',
                'country' => 'Spain',
                'duration' => 2,
                'img_url' => 'https://pics.filmaffinity.com/As_bestas-275688233-large.jpg',
            ],
        ]);
    }
}
