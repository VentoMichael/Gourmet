<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exposant extends Model
{
    use HasFactory;

    protected $table = 'exposants';

    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
