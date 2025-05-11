<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function resources()
    {
    return $this->hasMany(Resource::class);
    }

    public function feedbacks()
    {
    return $this->hasMany(Feedback::class);
    }
}
