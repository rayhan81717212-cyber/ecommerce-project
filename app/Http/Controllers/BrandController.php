<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    
    public function index(){

       $brand = Brand::select("id", 'name', 'logo', 'description')
       ->orderBy('id', 'desc')
        ->paginate(10);


        return view("admin.pages.productManagement.brand.index", compact('brand'));
        
    }
}
