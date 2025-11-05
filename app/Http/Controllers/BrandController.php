<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    
    public function index(){

       $brand = Brand::select("id", 'name', 'logo', 'description')
       ->orderBy('id', 'desc')
        ->paginate(10);
        return view("admin.pages.productManagement.brand.index", compact('brand'));
    }

    public function show($id){
        $brandId = Brand::from('brand as b')
                    ->select('b.*')
                    ->where('b.id', '=', $id)
                    ->first();
        // dd($brandId);
        return view("admin.pages.productManagement.brand.show", compact('brandId'));
    }

    public function create(){
        return view('admin.pages.productManagement.brand.create');
    }

    public function store(Request $request ){
        // dd($request->all());

         if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('brands', 'public');
        }else{
           $photo = null; 
        }

        $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
    ]);

        $brand = Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $photo,
        ]);

        return redirect()->route('brand.index')->with('success', "Brand Add Successfull!");
    }

    

    public function destroy($id){
        $brandId = Brand::find($id);

        $brandId->delete();

        // dd($brandId);
        return redirect()->route("brand.index")->with('success', "Brand Delete Successfully!");
    }

}
