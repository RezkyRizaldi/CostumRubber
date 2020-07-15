<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name', 'description', 'image', 'type', 'price', 'stock', 'status'
    ];
}
