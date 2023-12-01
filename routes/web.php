<?php

use App\Http\Controllers\activites as ControllersActivites;
use App\Http\Controllers\PostController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\SessionController;
use App\Models\Activites;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\registerrequest;
use Illuminate\Support\Facades\Auth;


if
       ( auth()->user()->Role == "admin"){

Route::get('/Aprove', function () {

    

    return view('admin.welcome', [
        'users' => User::all(),
        'activites' => Activites::latest()->paginate(6)->withQueryString(),
        'registerrequest' => registerrequest::latest()->paginate(1234)->withQueryString(),
        'USER'=>User::count(),
        'ACTIVE'=>Activites::count(),
        'REQUEST'=>registerrequest::count()



]);
});
       }

Route::get('/myactivity', function () {

    $userid=Auth::user()->id;
    $appoint = registerrequest::where('user_id',$userid)->get();

    return view('user.myactivity', [
        'relation' => $appoint,
        'activites' => Activites::all()
    ]);
});

Route::get('/myactivity', function () {


    return view('user.myactivity');
})->middleware('guest');



Route::get('/', function () {

    return view('user.welcome', [
        'activites' => Activites::latest()->paginate(6)->withQueryString()

    ]);
})->middleware('guest');



Route::get('Enrol/{activites}', function ($id) {

    $attributes = [
        'user_id' => auth::id(), // Use Auth::id() to get the authenticated user's ID
        'activites_id' => $id,
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
        $userid=Auth::user()->id;



        $registerrequest=registerrequest::where('user_id',$userid)->get();
        if(auth()->user()->Role == "Student")
        {
        return view('user.welcome', [
            'activites' => Activites::latest()->paginate(6)->withQueryString(),
            'registerrequest' => $registerrequest

 ]);
       }elseif
       ( auth()->user()->Role == "admin")
       {


        return view('admin.welcome', [
            'users' => User::all(),
            'activites' => Activites::latest()->paginate(6)->withQueryString(),
            'registerrequest' => registerrequest::latest()->paginate(1234)->withQueryString(),
            'USER'=>User::count(),
            'ACTIVE'=>Activites::count(),
            'REQUEST'=>registerrequest::count()



 ]);
       }
    })->name('welcome');
});



