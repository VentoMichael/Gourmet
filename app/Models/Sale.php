<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function getTotalPrice() {
        return $this->buyDetails()->sum(DB::raw('ticketCount * ticketPrice'));
    }

    public function editions()
    {
        return $this->hasOne(Edition::class);
    }
}
