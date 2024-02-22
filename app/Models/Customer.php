<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use HasApiTokens, HasFactory;
    protected $guarded=[];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($customer) {
            $randomDigits = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
            $customer->cin_no = 'CIN' . $randomDigits;
        });
    }
}
