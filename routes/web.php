<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TeamController;


Route::get('/error', function () {
    return view('Error');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/', function () {
    return view('Home');
});

Route::controller(DriverController::class)->group(function () {
    Route::get('/drivers', 'index');
    Route::get('/drivers/{driver}', 'show');
});


//Route::get('/drivers/{full}', function ($full) {
//    return view();
//});

Route::controller(TeamController::class)->group(function () {
    Route::get('/teams', 'index');
    Route::get('/teams/{team}', 'show');
});

Route::get('/calendar', function () {
    return view('Calendar');
});

Route::get('/tracks', function () {
    return view('Tracks');
});
#
#Route::get('/drivers/alex-albon', function () {
#    return view('aa23');
#});
#
Route::get('/drivers/fernando-alonso', function () {
    return view('fa14');
});
 
Route::get('/drivers/valtteri-bottas', function () {
    return view('vb77');
});

Route::get('/drivers/pierre-gasly', function () {
    return view('pg10');
});


Route::get('/drivers/lewis-hamilton', function () {
    return view('lh44');
});


Route::get('/drivers/nico-hulkenberg', function () {
    return view('nh27');
});


Route::get('/drivers/charles-leclerc', function () {
    return view('cl16');
});


Route::get('/drivers/kevin-magnussen', function () {
    return view('km20');
});


Route::get('/drivers/lando-norris', function () {
    return view('ln4');
});


Route::get('/drivers/esteban-ocon', function () {
    return view('eo31');
});


Route::get('/drivers/sergio-perez', function () {
    return view('sp11');
});


Route::get('/drivers/oscar-piastri', function () {
    return view('op81');
});


Route::get('/drivers/daniel-ricciardo', function () {
    return view('dr3');
});


Route::get('/drivers/george-russell', function () {
    return view('gr63');
});


Route::get('/drivers/carlos-sainz', function () {
    return view('cs55');
});


Route::get('/drivers/logan-sargeant', function () {
    return view('ls2');
});


Route::get('/drivers/lance-stroll', function () {
    return view('ls18');
});


Route::get('/drivers/yuki-tsunoda', function () {
    return view('yt22');
});


Route::get('/drivers/max-verstappen', function () {
    return view('mv1');
});


Route::get('/drivers/guanyu-zhou', function () {
    return view('gz24');
});

Route::get('/teams/mercedes', function () {
    return view('mercedes');
});

Route::get('/teams/red-bull', function () {
    return view('redbull');
});

Route::get('/teams/ferrari', function () {
    return view('ferrari');
});

Route::get('/teams/mclaren', function () {
    return view('mclaren');
});

Route::get('/teams/alpine', function () {
    return view('alpine');
});

Route::get('/teams/aston-martin', function () {
    return view('astonmartin');
});

Route::get('/teams/haas', function () {
    return view('haas');
});

Route::get('/teams/kick-sauber', function () {
    return view('kicksauber');
});

Route::get('/teams/rb-visa-cashapp', function () {
    return view('rb');
});

Route::get('/teams/williams', function () {
    return view('williams');
});