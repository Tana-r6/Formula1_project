<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrackController;


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/', function () {
    return view('home');
});

Route::controller(DriverController::class)->group(function () {
    Route::get('/drivers', 'index');
    Route::get('/drivers/{driver}', 'show');
});

Route::controller(TeamController::class)->group(function () {
    Route::get('/teams', 'index');
    Route::get('/teams/{team}', 'show');
});

Route::controller(TrackController::class)->group(function () {
    Route::get('/tracks', 'index');
    Route::get('/tracks/{track}', 'show');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/styling', function () {
    return view('styling');
});