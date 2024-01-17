<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obituary extends Model
{
    use HasFactory;
    protected $dates = ['birth_date', 'death_date'];
  

    public function tributes()
    {
        return $this->hasMany(Tribute::class);
    }

}
