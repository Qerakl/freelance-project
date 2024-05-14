<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tovar_id',
        'tovar_name',
        'tovar_count',
        'tovar_price',
        'tovar_img'
    ];

}
