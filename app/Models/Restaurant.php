<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "banner",
        "rating",
        "reviews",
        "status",
        "category_id",
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'restaurant_id');
    }
}
