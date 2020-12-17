<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function edition()
    {
        return $this->hasOne(Editions::class);
    }
}
