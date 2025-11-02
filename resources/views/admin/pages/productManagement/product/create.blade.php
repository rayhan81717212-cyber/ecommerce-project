@extends('admin.layout.master')
@section('title', 'dashboard')
@section('content')

<div class="mx-md-4">
    <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Product</span> 
            <span class="text-warning"> / Create</span>
        </h4>
        <div class="card p-4">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Product Name</label>
                                <input type="text" name='name' class="form-control" value="{{ old('name') }}"
                                    autofocus>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Categories Name :</label>
                                <select name="categories" class="form-control">
                                    <option value="">Select Categories</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Brand Name :</label>
                                <select name="categories" class="form-control">
                                    <option value="">Select Brand</option>
                                    @foreach ($brand as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="description">Product Description</label>
                                <textarea name="description" id="description" rows="5" class="form-control">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="price">Product Price</label>
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="discount-price">Product Discount Price</label>
                                <input type="text" name="discount-price" value="{{ old('discount-price') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="stock-quantity">Stock Quantity</label>
                                <input type="text" name="stock-quantity" value="{{ old('stock-quantity') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Brand Name :</label>
                                <select name="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="Ative">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="photo">Product Photo</label>
                                <input type="file" name='photo' class="form-control">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

@endsection
