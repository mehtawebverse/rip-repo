<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribute extends Model
{
    use HasFactory;

    public function obituary()
    {
        return $this->belongsTo(Obituary::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
