<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;




class ShopController extends Controller
{
     public function getShopProduct() {
    $products = Product::from('products as p')
        ->select('p.*', 'b.name as brand_name', 'c.name as category_name')
        ->join('brand as b', 'p.brand_id', '=', 'b.id')
        ->join('categories as c', 'p.category_id', '=', 'c.id')
        ->where('p.category_id', 20)   
        ->orderBy('p.id', 'desc')
        ->paginate(20)
        ->onEachSide(1);

        $categories = Categories::all();
    return view('site.pages.shop-page.index', compact('products', 'categories'));
}

   public function getShopProductByCategory($id)
    {
        $products = Product::where('category_id', $id)->paginate(20);
        $categories = Categories::orderBy('name', 'asc')->get();

        // Optional: currently selected category
        $currentCategory = Categories::find($id);
        $brand = Brand::find($id);

        return view('site.pages.shop-page.index', compact('products', 'categories', 'currentCategory', 'brand'));
    }

}