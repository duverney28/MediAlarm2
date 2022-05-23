<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MedicamentosController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('medicamentos.index');
})->middleware("auth");

Route::get('/mismedicamentos', function () {
    return view('mis medicamentos.index');
})->middleware("auth");


//login google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//login facebook
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

//google
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login-gooogle');

Route::get('/google-callback', function () {

    $user = Socialite::driver('google')->user();

    $userExist = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    if ($userExist) {
        Auth::login($userExist);
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }

    return redirect('/medicamentos');
});

//facebook

Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login-facebook');

Route::get('/facebook-callback', function () {

    $user = Socialite::driver('facebook')->user();

    $userExist = User::where('external_id', $user->id)->where('external_auth', 'facebook')->first();
    if ($userExist) {
        Auth::login($userExist);
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'facebook',
        ]);

        Auth::login($userNew);
    }

    return redirect('/medicamentos');
});



Auth::routes();

Route::middleware(['auth'])->group(function () {


    Route::get('/informacion', [App\Http\Controllers\MedicamentosController::class, 'informacion'])->name('informacion');
    Route::get('/mimusica', [App\Http\Controllers\MedicamentosController::class, 'Mymusica'])->name('mimusica');
    Route::get('mismedicamentos/pdf', [App\Http\Controllers\MedicamentosController::class, 'pdf'])->name('mismedicamentos.pdf');
    Route::get('/mismedicamentos', [App\Http\Controllers\MedicamentosController::class, 'showallMediById'])->name('mismedicamentos');
    Route::get('/misfarmacias', [App\Http\Controllers\MedicamentosController::class, 'ShowMap'])->name('misfarmacias');
    Route::get('/medicamentos', [App\Http\Controllers\MedicamentosController::class, 'index'])->name('medicamentos');
    Route::get('/medicamentos/mostrar', [App\Http\Controllers\MedicamentosController::class, 'listByIdCalendar']);
    Route::get('/medicamentos/listar/{id}', [App\Http\Controllers\MedicamentosController::class, 'showmediById']);
    Route::post('/medicamentos/registro', [App\Http\Controllers\MedicamentosController::class, 'store']);
    Route::post('/profile/registro', [App\Http\Controllers\InformacionusersController::class, 'store']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/medicamentos/editar/{id}', [App\Http\Controllers\MedicamentosController::class, 'edit']);
    Route::post('/medicamentos/actualizar/{medicamentos}', [App\Http\Controllers\MedicamentosController::class, 'update']);
    Route::post('/medicamentos/borrar/{id}', [App\Http\Controllers\MedicamentosController::class, 'destroy']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
