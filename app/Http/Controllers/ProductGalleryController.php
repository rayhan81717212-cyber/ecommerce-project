<?php

namespace App\Http\Controllers;

use App\Models\ProductGallery;

use App\Models\Brand;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.productManagement.photo-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.pages.productManagement.photo-gallery.create', compact('brands'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $product_id = $request->product_id; 

        foreach ($request->file('photo') as $photo) {
            // dd($photo);

            $path = $photo->store('gallery', 'public'); 

            ProductGallery::create([
                'product_id' => $product_id,
                'photo' => $path
            ]);
        }
    

    // return redirect()->route('productgallery.index')->with('success', "Photo Save Successfully!");
}


    /**
     * Display the specified resource.
     */
    public function show(ProductGallery $productGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductGallery $productGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductGallery $productGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductGallery $productGallery)
    {
        //
    }
}
