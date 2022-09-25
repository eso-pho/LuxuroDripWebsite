<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'category_id',
        'inventory_id',
        'discount_id',
        'image',
        'SKU',
        'price',
        'quantity',
    ];
}
