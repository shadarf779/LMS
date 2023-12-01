<?php

namespace App\Http\Controllers;
use App\Models\registerrequest;
use App\Models\Activites;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $userId = auth()->user()->id;
        $registerRequests = RegisterRequest::where('user_id', $userId)->get();

        return view('user.welcome', [
            'activites' => Activites::latest()->paginate(6)->withQueryString(),
            'registerRequests' => $registerRequests,
        ]);
    }

    public function guestWelcome()
    {
        return view('user.welcome', [
            'activites' => Activites::latest()->paginate(6)->withQueryString(),
        ]);
    }

    public function adminWelcome()
    {
        return view('admin.welcome');
    }
}


