<?php

use App\Http\Controllers\activites as ControllersActivites;
use App\Http\Controllers\PostController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\SessionController;
use App\Models\Activites;
use Illuminate\Support\Facades\Route;
use App\Models\registerrequest;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return view('user.welcome', [
               'activites' => Activites::latest()->paginate(6)->withQueryString()
    ]);
});



Route::get('Enrol/{activites}', function ($id) {

    $attributes = [
        'UserID' => auth::id(), // Use Auth::id() to get the authenticated user's ID
        'avtivityID' => $id,
        'Status'=>'pending'
    ];

    registerrequest ::create($attributes);


    return redirect('/')->with('success', 'Your account has been created.');
});
Route::get('Activites/{activites}', function ($id) {

    $activites = Activites::findOrFail($id); // Assuming you are fetching the Activites model by its ID
    return view('user.show', [
        'activites' => $activites
    ]);
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.welcome', [
            'activites' => Activites::latest()->paginate(6)->withQueryString()
 ]);
    })->name('welcome');
});
