<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PraticalInfos extends Model
{
    use HasFactory;

    protected $table = 'praticalInfos';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded =[];

    public function edition(){
        return $this->hasOne(Editions::class);
    }

}
