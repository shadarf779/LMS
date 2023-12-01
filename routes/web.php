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


Route::get('/Create', function () {
    if(auth()->user()->Role == "admin")  {
    return view('admin.Create');
        }
});
Route::get('/users', function () {
    if(auth()->user()->Role == "admin")  {
    return view('admin.users', [
            'users' => User::all(),
            'USER'=>User::count(),

]);
        }
});


Route::get('/Activities', function () {
    if(auth()->user()->Role == "admin")  {
    return view('admin.Activites', [
        'activites' => Activites::latest()->paginate(30)->withQueryString(),
        'ACTIVE' => Activites::count()

]);
        }
});

Route::get('/Rejected', function () {
    if(auth()->user()->Role == "admin")  {
    return view('admin.Rejected', [
        'users' => User::all(),
        'activites' => Activites::latest()->paginate(6)->withQueryString(),
        'registerrequest' => RegisterRequest::where('status', 'rejected')->get(),
        'REQUEST' => RegisterRequest::where('status', 'rejected')->count()


]);
        }
});

Route::get('/Aproved', function () {
    if(auth()->user()->Role == "admin")  {
    return view('admin.Aprove', [
        'users' => User::all(),
        'activites' => Activites::latest()->paginate(6)->withQueryString(),
        'registerrequest' => RegisterRequest::where('status', 'Aproved')->get(),
        'REQUEST' => RegisterRequest::where('status', 'Aproved')->count()


]);
        }
});

Route::get('/Pending', function () {
    if(auth()->user()->Role == "admin")  {
    return view('admin.Pending', [
        'users' => User::all(),
        'activites' => Activites::latest()->paginate(6)->withQueryString(),
        'registerrequest' => RegisterRequest::where('status', 'Pending')->get(),
        'REQUEST' => RegisterRequest::where('status', 'Pending')->count()



]);
        }
});

Route::get('/Aprove/{id}', function ($id) {
    if(auth()->user()->Role == "admin")  {
    $request = RegisterRequest::findOrFail($id);
    $request->update(['status' => 'Aproved']);
    return view('admin.welcome', [
        'success' => 'Registration request approved successfully.',
        'users' => User::all(),
        'activites' => Activites::latest()->paginate(6)->withQueryString(),
        'registerrequest' => registerrequest::latest()->paginate(1234)->withQueryString(),
        'USER'=>User::count(),
        'ACTIVE'=>Activites::count(),
        'REQUEST'=>registerrequest::count()



]);
        }
});

Route::get('/reject/{id}', function ($id) {
    if(auth()->user()->Role == "admin")  {
    $request = RegisterRequest::findOrFail($id);
    $request->update(['status' => 'rejected']);
    return view('admin.welcome', [
        'users' => User::all(),
        'activites' => Activites::latest()->paginate(6)->withQueryString(),
        'registerrequest' => registerrequest::latest()->paginate(1234)->withQueryString(),
        'USER'=>User::count(),
        'ACTIVE'=>Activites::count(),
        'REQUEST'=>registerrequest::count()



])->with('success', 'Registration request rejected successfully.');
        }
});

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



