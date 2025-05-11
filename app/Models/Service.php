<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Service extends Model
{
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
