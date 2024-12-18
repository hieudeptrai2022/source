<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'brands';
    protected $fillable = ['name', 'description', 'user_id', 'date_create'];
    protected $casts = [
        'date_create' => 'datetime',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
