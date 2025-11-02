@extends('admin.layout.master')
@section('title', 'dashboard')
@section('content')

<div class="mx-md-4">
    <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Brand /</span> Manage</h4>
        <a href="" class="btn btn-warning my-3">Add Brand</a>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Brand Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Brand Name</th>
                                        <th>Photo </th>
                                        <th>Descriptions </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brand as $index => $item)
                                        <tr>
                                            @php
                                                $sl = $brand->firstItem() + $index;
                                            @endphp
                                            <td>{{$sl}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->logo}}</td>
                                            <td class="text-wrap">{{$item->description}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                       
                                    @endforeach
                                     <tr>
                                        <td colspan="5">
                                            {{$brand->onEachSide(1)->links("vendor.pagination.bootstrap-5")}}
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
