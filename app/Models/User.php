<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
