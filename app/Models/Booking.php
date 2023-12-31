<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'product_id',
    'date',
    'duration',
    'time',
    'fullname',
    'email',
    'contact',
    'address',
    'status',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
