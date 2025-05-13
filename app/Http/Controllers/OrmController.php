<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Feedback;
use App\Models\Notification;
use App\Models\Resource;
use App\Models\Service;
use App\Models\User;

class OrmController extends Controller
{
    public function consultas(){

       // $user = User::find(2);
        //return $user->services;
        $print = "hola";
        return $print;
    }
}
