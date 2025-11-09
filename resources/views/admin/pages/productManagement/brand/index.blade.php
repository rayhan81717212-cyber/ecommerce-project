@extends('admin.layout.master')
@section('title', 'Brand')
@section('content')

    <div class="mx-md-4">
        <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Brand /</span> <span
                    class="text-warning">Manage</span></h4>
            <a href="{{ route('brand.create') }}" class="btn btn-warning my-3">Add Brand</a>
            <div class="row">
                @if (session('success') == "Brand Delete Successfully!")
                    <div class="alert alert-danger">
                        {{ session('success') }}
                    </div>
                @else
                <div class="alert alert-primary">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <h5 class="card-header">Brand Table</h5>
                        <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr class="bg-warning ">
                                            <th><i class="fas fa-hashtag me-1"></i>Id</th>
                                            <th><i class="fas fa-tags me-1"></i>Brand Name</th>
                                            <th><i class="fas fa-image me-1"></i>Photo</th>
                                            <th><i class="fas fa-cogs me-1"></i>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brand as $index => $item)
                                            <tr>
                                                @php
                                                    $sl = $brand->firstItem() + $index;
                                                @endphp
                                                <td>{{ $sl }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    @if ($item->logo)
                                                        <img src="{{ asset('storage/' . $item->logo)  }}" width="100" alt="{{ $item->name }}">
                                                     @else 
                                                        <img src="https://placehold.co/600x400" alt="">
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <form action="{{ route('brand.show', $item->id) }}">
                                                            <button type="submit"
                                                                class="btn btn-sm btn-primary me-1">Details</button>
                                                        </form>
                                                        <form action="{{ route('brand.edit', $item->id) }}" method="get">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-sm btn-warning me-1">Update</button>
                                                        </form>
                                                        <form action="{{ route('brand.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="5">
                                                {{ $brand->onEachSide(1)->links('vendor.pagination.bootstrap-5') }}
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
    </div>

@endsection
