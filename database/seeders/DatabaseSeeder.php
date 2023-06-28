<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                "name" => "Category 1",
                "picture" => "pic 1",
            ],
        ];

        foreach($category as $item) {
            \App\Models\Category::create([
                "name" => $item["name"],
                "picture" => $item["picture"],
            ]);
        }

        $restaurants = [
            [
                "name" => "restaurant",
                "banner" => "banner",
                "rating" => 3.3,
                "reviews" => 231,
                "status" => "20-40 min",
                "category_id" => 1,
            ],
        ];

        foreach($restaurants as $item) {
            \App\Models\Restaurant::create([
                "name" => $item["name"],
                "banner" => $item["banner"],
                "rating" => $item["rating"],
                "reviews" => $item["reviews"],
                "status" => $item["status"],
                "category_id" => $item["category_id"],
            ]);
        }

        $offers = [
            [
                "name" => "Burger King",
                "discount" => 25,
                "size" => "sm", //sm lg
                "restaurant_id" => 1,
            ],
            [
                "name" => "Burger King",
                "discount" => 30,
                "size" => "sm", //sm lg
                "restaurant_id" => 1,
            ],
            [
                "name" => "Chez KFC",
                "discount" => 50,
                "size" => "sm", //sm lg
                "restaurant_id" => 1,
            ],
        ];

        foreach($offers as $k => $item) {
            \App\Models\Offer::create([
                "name" => $item["name"],
                "banner" => asset('/media/of-'.($k+1).'.jpg'),
                "discount" => $item["discount"],
                "size" => $item["size"],
                "restaurant_id" => $item["restaurant_id"],
            ]);
        }

        $promos = [
            [
                "name" => "Spécial Tabaski",
                "size" => "sm", //sm lg
                "mode" => "page", // page popup
            ],
            [
                "name" => "Code promo",
                "size" => "lg", //sm lg
                "mode" => "page", // page popup
            ],
        ];

        foreach($promos as $k => $item) {
            \App\Models\Promo::create([
                "name" => $item["name"],
                "banner" => asset('/media/pr-'.($k+1).'.jpg'),
                "size" => $item["size"],
                "mode" => $item["mode"],
            ]);
        }

        $shops = [
            [
                "name" => "H&M",
                "name" => "Mall",
                "name" => "A 3 points",
                "name" => "ELLE",
            ],
        ];

        foreach($shops as $item) {
            \App\Models\Shop::create([
                "name" => $item["name"],
                "logo" => asset('/media/sh-'.($k+1).'.png'),
            ]);
        }

        $menus = [
            [
                "name" => "Menu",
                "restaurant_id" => 1,
            ],
        ];

        foreach($menus as $item) {
            \App\Models\Menu::create([
                "name" => $item["name"],
                "restaurant_id" => $item["restaurant_id"],
            ]);
        }

        $menuItems = [
            [
                "name" => "Plat 1",
                "description" => "Description plat 1",
                "thumbnail" => "thumbnail",
                "price" => 2500,
                "old_price" => 3500,
                "quantity" => "1 pce", // 1 pce ou 23kg
                "menu_id" => 1,
            ],
        ];

        foreach($menuItems as $item) {
            \App\Models\MenuItem::create([
                "name" => $item["name"],
                "description" => $item["description"],
                "thumbnail" => $item["thumbnail"],
                "price" => $item["price"],
                "old_price" => $item["old_price"],
                "quantity" => $item["quantity"],
                "menu_id" => $item["menu_id"],
            ]);
        }
    }
}
