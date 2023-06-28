<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Offer;
use App\Models\Promo;
use App\Models\Shop;

class ApiController extends Controller
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function getAllOffers()
    {
        return Offer::all();
    }

    public function getAllPromos()
    {
        return Promo::all();
    }

    public function getAllShops()
    {
        return Shop::all();
    }

    public function getAllRestaurants()
    {
        return Restaurant::all();
    }

    public function getRestaurantById($id)
    {
        return Restaurant::find($id)->with(['menus', 'menus.menuItems'])->get();
    }
}
