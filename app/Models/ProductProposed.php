<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProposed extends Model
{
    use HasFactory;

    public function exposants(){
        return $this->hasMany(Exposant::class);
    }
}
