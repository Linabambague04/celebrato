<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
        'availability',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
