<?php

// app/Http/Controllers/FeedbackController.php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function submitFeedback($id, Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if a feedback record already exists for the user
        $existingFeedback = FeedBack::where('user_id', $id)->first();

        if ($existingFeedback) {
            // If a record exists, update it
            $existingFeedback->update([
                'rating' => $request->input('rating'),
                'comments' => $request->input('comments'),
            ]);

            return redirect('/feedback')->with('success', 'Feedback updated successfully.');
        }

        // If no record exists, create a new feedback record
        $attributes = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comments' => 'required|string',
        ]);

        $feedback = FeedBack::create([
            'user_id' => $id,
            'rating' => $attributes['rating'],
            'comments' => $attributes['comments'],
        ]);

        // Check if the feedback was successfully saved
        if ($feedback) {
            return redirect('/feedback')->with('success', 'Feedback submitted successfully.');
        } else {
            return redirect('/feedback')->with('error', 'Failed to submit feedback.');
        }
    }
}

