<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BettingNumber extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function location()
    {
        return $this->belongsTo(BettingLocation::class,'betting_location_id','id'); 
    }
}
