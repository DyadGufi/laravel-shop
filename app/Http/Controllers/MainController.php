<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show() {
        return view('welcome');
    }

    public function categories() {
        $categoriesItem = Category::get();
        return view('categories', compact('categoriesItem'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($product = null) {
        return view('product', ['product' => $product]);
    }
}
