<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\User;
use Illuminate\Http\Request;

class ShowFeedBackController extends Controller
{

    public function showFeedback()
    {
        if(auth()->user()->Role == "admin")  {
        $feedbacks = FeedBack::all();
        $user =User::all();

        return view('admin.Feedback', ['feedbacks' => $feedbacks , 'user'=>$user]);
    }else {
        return view('user.feedback');
    }
    }
}
