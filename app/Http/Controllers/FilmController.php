<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{

    /**
     * Read films from storage
     */
    public static function readFilms(): Collection
    {
        $films = film::all();
        return $films;
    }
    /**
     * List films older than input year 
     * if year is not infomed 2000 year will be used as criteria
     */
    public function listOldFilms($year = null)
    {
        $old_films = [];
        if (is_null($year))
            $year = 2000;

        $title = "Listado de Pelis Antiguas (Antes de $year)";
        $films = FilmController::readFilms();

        $old_films = $films->filter(function ($film) use ($year) {
            return $film['year'] <= $year;
        });

        // foreach ($films as $film) {
        //     //foreach ($this->datasource as $film) {
        //     if ($film['year'] < $year)
        //         $old_films[] = $film;
        // }
        return view('films.list', ["films" => $old_films, "title" => $title]);
    }
    /**
     * List films younger than input year
     * if year is not infomed 2000 year will be used as criteria
     */
    public function listNewFilms($year = null)
    {
        if (is_null($year))
            $year = 2000;

        $title = "Listado de Pelis Nuevas (Después de $year)";
        $films = FilmController::readFilms();

        $new_films = $films->filter(function ($film) use ($year) {
            return $film['year'] >= $year;
        });

        // foreach ($films as $film) {
        //     if ($film['year'] >= $year)
        //         $new_films[] = $film;
        // }

        return view('films.list', ["films" => $new_films, "title" => $title]);
    }
    public function listAllFilms($year = null)
    {
        if (is_null($year))
            $year = 2000;

        $title = "Listado de Pelis Nuevas (Después de $year)";
        $films = FilmController::readFilms();

        $new_films = $films->filter(function ($film) use ($year) {
            return $film['year'] >= $year;
        });

        // foreach ($films as $film) {
        //     if ($film['year'] >= $year)
        //         $new_films[] = $film;
        // }

        return view('films.list', ["films" => $new_films, "title" => $title]);
    }
    /**
     * Lista TODAS las películas o filtra x año o categoría.
     */
    public function listFilmsByYear($year = null)
    {
        $title = "Listado de todas las pelis";
        $films = FilmController::readFilms();

        if (isset($_GET["year"])) {
            $year = $_GET["year"];
        }

        //if year and genre are null
        if (is_null($year))
            return view('films.list', ["films" => $films, "title" => $title]);
        //list based on year or genre informed
        $films_filtered = $films->filter(function ($films) use ($year) {
            return $films['year'] == $year;
        });

        // foreach ($films as $film) {
        //     if ((!is_null($year)) && $film['year'] == $year) {
        //         $title = "Listado de todas las pelis filtrado x año";
        //         $films_filtered[] = $film;
        //     }
        // }
        return view("films.list", ["films" => $films_filtered, "title" => $title]);
    }

    public function listFilmsByGenre($genre = null)
    {
        $films_filtered = [];

        $title = "Listado de todas las pelis";
        $films = FilmController::readFilms();


        if (isset($_GET["genre"])) {
            $genre = $_GET["genre"];
        }

        //if year and genre are null
        if (is_null($genre))
            return view('films.list', ["films" => $films, "title" => $title]);
        //list based on year or genre informed

        $films_filtered= $films->filter(function ($films) use ($genre){
            return strtolower($films->genre) == strtolower($genre);
        });

        // foreach ($films as $film) {
        //     if ((!is_null($genre)) && strtolower($film['genre']) == strtolower($genre)) {

        //         $title = "Listado de todas las pelis filtrado x año";
        //         $films_filtered[] = $film;
        //     }
        // }
        return view("films.list", ["films" => $films_filtered, "title" => $title]);
    }

    public function listSortedFilms()
    {
        $films = FilmController::readFilms();


        return view('films.list', ["films" => $films->sortBy("year"), "title" => "Listado de Pelis Ordenadas por Año"]);
    }
    public function countFilms()
    {
        $films = FilmController::readFilms();
        $numFilms = count($films);
        return view('films.count', ["count" => $numFilms]);
    }
}
