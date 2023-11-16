<?php


use App\Http\Controllers\PostController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\SessionController;
use App\Models\Activites;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome', [
               'activites' => Activites::latest()->paginate(6)->withQueryString()
    ]);
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('welcome');
});
