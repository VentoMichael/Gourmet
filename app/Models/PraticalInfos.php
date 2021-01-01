<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PraticalInfos extends Model
{
    use HasFactory;

    protected $table = 'praticalInfos';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded =[];
protected $fillable = ['startDate','endDate'];
    public function editions(){
        return $this->hasOne(Edition::class);
    }

}
