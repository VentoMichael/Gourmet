<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exposants extends Model
{
    use HasFactory;

    protected $table = 'exposants';

    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];


    public function country()
    {
        return $this->belongsTo(Countries::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }
}
