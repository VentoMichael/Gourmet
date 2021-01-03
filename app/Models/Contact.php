<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['nameSurname', 'email', 'subject', 'message'];


    public function editions(){
        return $this->hasOne(Edition::class);
    }
}
