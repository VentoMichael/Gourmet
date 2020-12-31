<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $dates = ['deleted_at'];

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
