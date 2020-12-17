<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    public function edition(){
        return $this->hasOne(Editions::class);
    }

    public function exposants(){
        return $this->hasMany(Exposants::class);
    }
}
