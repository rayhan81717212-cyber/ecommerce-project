@extends('admin.layout.master')
@section('title', 'Product')
@section('content')

    <div class="mx-md-4">
        <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product Gallery /</span> <span
                    class="text-warning">Manage</span></h4>
            <a href="{{ route('productgallery.create') }}" class="btn btn-warning my-3">Add Product</a>
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card p-4">
                        <h5 class="card-header">Product Gallery</h5>
                        @if (session('success') == 'Product Delete Successfully!')
                            <div class="alert alert-danger">
                                {{ session('success') }}
                            </div>
                        @elseif (session('success') == 'Product Update Successfully!' || session('success') == 'Product Add Successfully!')
                            <div class="alert alert-dark">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr class="bg-warning ">
                                            <th class="text-white align-middle"><i class="fas fa-hashtag me-1"></i>Id</th>
                                            <th class="text-white align-middle"><i class="fas fa-box me-1"></i>Product Name</th>
                                            <th class="text-white align-middle"><i class="fas fa-tags me-1"></i>Brand Name</th>
                                            <th class="text-white align-middle"><i class="fas fa-dollar-sign me-1"></i>photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
