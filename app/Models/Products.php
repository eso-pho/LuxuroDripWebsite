<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_name',
        'product_url',
        'product_description',
        'SKU',
        'price',
        'quantity',
    ];
}
