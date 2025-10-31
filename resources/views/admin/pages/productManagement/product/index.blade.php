@extends('admin.layout.master')
@section('title', 'dashboard')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> Manage</h4>
        <a href="{{ route('product.create') }}" class="btn btn-warning my-3">Add Product</a>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <h5 class="card-header">Product Table</h5>
                    @if (session('success'))
                        <div class="alert alert-success" >
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Description</th>
                                        <th>price</th>
                                        <th>Discount Price </th>
                                        <th>Stock Quantity </th>
                                        <th>Status </th>
                                        <th>Photo </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $index => $item )
                                        <tr>
                                            <td>{{$product->firstItem() + $index}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->category_name}}</td>
                                            <td>{{$item->brand_name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->discount_price}}</td>
                                            <td>{{$item->stock_quantity}}</td>
                                            <td>
                                                <span class="{{ $item->status == 'Active' ? 'badge bg-primary' : 'badge bg-danger' }}">
                                                    {{ $item->status }}
                                                </span>
                                            </td>
                                            <td>{{$item->photo}}</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm">Update</a>
                                                <a href="" class="btn btn-primary btn-sm">Details</a>
                                                <a href="{{ route('product.destory', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td colspan="11">
                                                {{  $product->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
                                            </td>

                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
