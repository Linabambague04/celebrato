<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
      public function index()
    {
        $notifications = Notification::all();

        return view('notification.index', compact ('$notification'));
}
}