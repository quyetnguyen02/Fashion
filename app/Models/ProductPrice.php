<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPrice extends Model
{
    use HasFactory;
    use SoftDeletes;

    private $fillable = [
        'product_id',
        'price',
        'promotional_price',
    ];
}
