<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurant';

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function editions()
    {
        return $this->hasOne(Edition::class);
    }
}
