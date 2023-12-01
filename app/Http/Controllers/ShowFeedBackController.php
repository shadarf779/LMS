<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class ShowFeedBackController extends Controller
{

    public function showFeedback()
    {
        if(auth()->user()->Role == "admin")  {
        $feedbacks = FeedBack::all();

        return view('admin.Feedback', ['feedbacks' => $feedbacks]);
    }else {
        return view('user.feedback');
    }
    }
}
