<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function editions()
    {
        return $this->hasOne(Collections::class);
    }
}
