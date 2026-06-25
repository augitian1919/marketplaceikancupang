<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Product::count();
        $myProducts = Product::where('user_id', Auth::id())->count();
        $totalCategories = Category::count();
        $totalUsers = User::count();
        $latestProducts = Product::with('category')->latest()->limit(5)->get();

        return view('dashboard', compact(
            'totalProduk', 'myProducts', 'totalCategories',
            'totalUsers', 'latestProducts'
        ));
    }
}