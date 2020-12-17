<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exposants extends Model
{
    use HasFactory;

    protected $table = 'exposants';
    public $timestamps = true;

    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function edition()
    {
        return $this->hasOne(Editions::class);
    }

    public function country()
    {
        return $this->hasOne(Countries::class);
    }
}
