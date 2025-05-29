<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
     public function index()
    {
        $feedbacks = Feedback::all();

        return view('feedback.index', compact ('$feedbacks'));
}
}