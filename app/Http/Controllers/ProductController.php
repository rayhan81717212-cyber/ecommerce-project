<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;

class ProductController extends Controller
{

    public function create(){
          $brand = Brand::all(); 
          $categories = Categories::all(); 

        //   dd($brand, $categories);
          return view('admin.pages.productManagement.product.create', compact('brand', "categories"));      
    }

    public function store(){
        $product = Product::from('products as p')
        ->select('p.*', 'b.name as brand_name', 'c.name as category_name')
        ->join('brand as b', 'p.brand_id', '=', 'b.id')
        ->join('categories as c', 'p.category_id', '=', 'c.id')
        ->orderBy('p.id', 'desc')
        ->paginate(10);

        // dd($product);
        return view('admin.pages.productManagement.product.index', compact('product'));

    }

    public function destory($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route("product")->with('success', "Product Delete Successfully!");
        // dd($product);

        // return
    }
}