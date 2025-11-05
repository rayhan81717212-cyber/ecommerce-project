@extends('admin.layout.master')
@section('title', 'Product Update')
@section('content')



    <div class="mx-md-4">
        <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Product</span>
                <span class="text-warning"> / Update</span>
            </h4>
            <div class="card p-4">
    <div class="card-body">
        <h3 class="mb-4">Update Product</h3>

        <!-- Step Indicators -->
        <ul class="nav nav-pills mb-4">
            <li class="nav-item">
                <a class="nav-link active" href="#step1">Step 1: Basic Info <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step2">Step 2: Description <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step3">Step 3: Price & Stock <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step4">Step 4: Photo <span class="text-success d-none step-done">&#10003;</span></a>
            </li>
        </ul>

        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="productForm">
        @csrf
        @method('PATCH')
            <!-- Step 1: Basic Info -->
            <div id="step1" class="step-content">
                <input type="hidden" name="id" value="{{ $page }}" class="form-control">
                <div class="form-group mb-3">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $item)
                                <option value="{{ $item->id }}" @selected($item->id == $product->category_id)>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Brand</label>
                        <select name="brand_id" class="form-control" required>
                            <option value="">Select Brand</option>
                            @foreach($brand as $item)
                                <option value="{{ $item->id }}" @selected($item->id == $product->brand_id)>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="button" class="btn btn-warning next-step">Next</button>
            </div>

            <!-- Step 2: Description -->
            <div id="step2" class="step-content d-none">
                <div class="form-group mb-3">
                    <label>Product Description</label>
                    <textarea name="description" class="form-control" rows="10" required>{{ $product->description }}</textarea>
                </div>
                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                <button type="button" class="btn btn-warning next-step">Next</button>
            </div>

            <!-- Step 3: Price & Stock -->
            <div id="step3" class="step-content d-none">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Discount Price</label>
                        <input type="text" name="discount_price" class="form-control" value="{{ $product->discount_price }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>Stock Quantity</label>
                        <input type="text" name="stock_quantity" class="form-control" value="{{ $product->stock_quantity }}" >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control" >
                            <option value="">Select Status</option>
                            <option value="Active" @selected($product->status == "Active")>Active</option>
                            <option value="Inactive" @selected($product->status == "Inactive")>Inactive</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                <button type="button" class="btn btn-warning next-step">Next</button>
            </div>

            <!-- Step 4: Photo -->
            <div id="step4" class="step-content d-none">
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Product Photo</label>
                        @if($product->photo)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $product->photo) }}" alt="Product Image" class="img-fluid" width="150">
                            </div>
                        @endif

                        <input type="file" name="photo" id="photo" class="filepond" />
                        
                        @error('photo')
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>

                </div>
                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>

        </form>
    </div>
</div>



        </div>
    </div>

@endsection
