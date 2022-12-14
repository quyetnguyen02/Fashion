<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory;
    use SoftDeletes;

    private $fillable = [
        'user_id',
        'product_id',
        'rank',
        'content',
    ];
}
