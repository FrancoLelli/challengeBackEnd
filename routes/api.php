<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\EpisodioController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('register', [AuthController::class, 'register']);

// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'App\Http\Controllers\Auth\AuthController@login');
//     Route::post('logout', 'App\Http\Controllers\Auth\AuthController@logout');
//     Route::post('refresh', 'App\Http\Controllers\Auth\AuthController@refresh');
//     Route::post('me', 'App\Http\Controllers\Auth\AuthController@me');
//     Route::post('register', 'App\Http\Controllers\Auth\AuthController@register');
    

// });

Route::post('register', 'App\Http\Controllers\UserController@register');
Route::get('login', 'App\Http\Controllers\UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('logout','App\Http\Controllers\Auth\AuthController@logout');

    Route::post('user','App\Http\Controllers\UserController@getAuthenticatedUser');

});


//Director

//View all 
Route::get('/director', [DirectorController::class, 'getDirector']);

//Search by ID
Route::get('/director/{id}', [DirectorController::class, 'getDirectorId']);

//Create director
Route::post('/director/insert', [DirectorController::class, 'insertDirector']);

//Update director
Route::put('/director/update/{id}', [DirectorController::class, 'updateDirector']);

//Delete director
Route::delete('/director/delete/{id}', [DirectorController::class, 'deleteDirector']);



//Actor

//View all
Route::get('/actor', [ActorController::class, 'getActor']);

//Search by ID
Route::get('/actor/{id}', [ActorController::class, 'getActorId']);

//Create actor
Route::post('/actor/insert', [ActorController::class, 'insertActor']);

//Update actor
Route::put('/actor/update/{id}', [ActorController::class, 'updateActor']);

//Delete actor
Route::delete('/actor/delete/{id}', [ActorController::class, 'deleteActor']);



//Pelicula

//View all
Route::get('/pelicula', [PeliculaController::class, 'getPelicula']);

//Search by ID
Route::get('/pelicula/{id}', [PeliculaController::class, 'getPeliculaId']);

//Order By
Route::get('/pelicula/{campo}', [PeliculaController::class, 'ordenarPelicula']);

//Create Pelicula
Route::post('/pelicula/insert', [PeliculaController::class, 'insertPelicula']);

//Update Pelicula
Route::put('/pelicula/update/{id}', [PeliculaController::class, 'updatePelicula']);

//Delete Pelicula
Route::delete('/pelicula/delete/{id}', [PeliculaController::class, 'deletePelicula']);



//Serie

//View all
Route::get('/serie', [SerieController::class, 'getSerie']);

//Search by ID
Route::get('/serie/{id}', [SerieController::class, 'getSerieId']);

//Create Pelicula
Route::post('/serie/insert', [SerieController::class, 'insertSerie']);

//Update Pelicula
Route::put('/serie/update/{id}', [SerieController::class, 'updateSerie']);

//Delete Pelicula
Route::delete('/serie/delete/{id}', [SerieController::class, 'deleteSerie']);



//Episodio

//View all
Route::get('/episodio', [EpisodioController::class, 'getEpisodio']);

//Search by ID
Route::get('/episodio/{id}', [EpisodioController::class, 'getEpisodioId']);

//Create Pelicula
Route::post('/episodio/insert', [EpisodioController::class, 'insertEpisodio']);

//Update Pelicula
Route::put('/episodio/update/{id}', [EpisodioController::class, 'updateSerie']);

//Delete Pelicula
Route::delete('/episodio/delete/{id}', [EpisodioController::class, 'deleteSerie']);