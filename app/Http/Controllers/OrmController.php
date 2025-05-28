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

        /*$user = User::find(2);// los servicios que ofrece el usuario con id 2 proveedor lina
        return $user->services;*/

       /* $event=Event::find(2);// las personas que asisten al evento co id 2
        return $event->users;*/

        /*$event = event::find(2);
        return $event->resources;// los recursos que tiene el evento con id 2*/

        /*$event = event::find(1); 
        return $event->feedbacks;// los feedbacks que tiene el evento con id 1*/

        /*$event = event::find(1);
        return $event;// los eventos que tiene el evento con id 1*/

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
        'events',// todos los eventos que tiene el usuario
        'events.resources',// todos los recursos que tiene el evento
        'events.notifications',// todos los eventos que tiene el usuario
        'events.feedbacks',// todos los feedbacks que tiene el evento
        'feedbacks',// todos los feedbacks que tiene el usuario
        'services'// todos los servicios que tiene el usuario

    ])->get();
        
   /*
    $user = User::with('events')->get();// todos los eventos de los usuarios
        return $user;*/
    }
}