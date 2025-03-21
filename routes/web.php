<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ActorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    /* Films and actors routes */
    Route::middleware('year')->group(function () {

        Route::group(['prefix' => 'filmout'], function () {
            // Routes included with prefix "filmout"
            Route::get('oldFilms/{year?}', [FilmController::class, "listOldFilms"])->name('oldFilms');
            Route::get('newFilms/{year?}', [FilmController::class, "listNewFilms"])->name('newFilms');
            Route::get('filmsByYear/{year?}', [FilmController::class, "listFilmsByYear"])->name('filmsByYear');
            Route::get('filmsByGenre/{genre?}', [FilmController::class, "listFilmsByGenre"])->name('filmsBygenre');
            Route::get('filmsSorted', [FilmController::class, "listSortedFilms"])->name('filmsSorted');
            Route::get('countFilms', [FilmController::class, "countFilms"])->name('countFilms');
        });
        Route::group(['prefix' => 'filmin'], function () {
            Route::post('/createFilm', [FilmController::class, "createFilm"])->name("createFilm")->middleware('validate.url');
            Route::get('addFilm', function () {
                return view('films.addFilm', ["exist" => false, "invalidUrl" => false]);
            })->name('addFilmForm');
        });
        Route::group(['prefix' => 'actors'], function () {
            Route::get('countActors', [ActorController::class, "countActors"])->name("countActors");
            Route::get('listActors/{deacade?}', [ActorController::class, "listActor"])->name("listActor");

        });
    });
    /* Profile Routes*/
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
