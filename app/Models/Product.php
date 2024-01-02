<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
    'vechicle_id',
    'name',
    'price',
    'service',
    'availability',
    'duration',
    'duration_es' , 
     'description',
     'img',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function vechicles()
    {
        return $this->belongsTo(Vechicle::class, 'vechicle_id');
    }
}
