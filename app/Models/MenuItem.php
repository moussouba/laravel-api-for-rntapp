<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "thumbnail",
        "price",
        "old_price",
        "quantity",
        "menu_id",
    ];
}
