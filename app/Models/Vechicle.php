<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vechicle extends Model
{
    use HasFactory;
    protected $table = 'vechicles';
    protected $primaryKey = 'id';
    protected $fillable = ['name',
    'isEstimate',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
