<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Player;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $player = Player::find(1);
        $playerCategories = $player->categories;
        $playerProducts = $player->product;

        return Inertia::render('MainScene', [
            'products' => $products,
            'categories' => $categories,
            'player' => $player,
            'playerCategories' => $playerCategories,
            'playerProducts' => $playerProducts,
        ]); 
    }

    public function main()
    {
        return Inertia::render('MainScene');

    }
}
