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

        //$user = User::find(2);// los servicios que ofrece el usuario con id 2 proveedor lina
        //return $user->services;

        //$users = User::all(); // todos los usuarios
        //return $users;
        // $events = Event::all(); // todos los eventos
        //return $events;
        
    /*   return Event::with([
        'resources',
        'feedbacks',
        'notifications'

    ])->get();*/

       return User::with([
        'events',
        'events.resources',
        'events.notifications',
        'events.feedbacks',
        'feedbacks',
        'services'

    ])->get();    
   /*
    $user = User::with('events')->get();// todos los eventos de los usuarios
        return $user;*/
    }
}
