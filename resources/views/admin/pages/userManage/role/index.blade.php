@extends('admin.layout.master')
@section('title', 'index')
@section('content')

<div class="mx-md-4">
    <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role /</span> Manage</h4>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Bordered Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($role as $item)
                                        <tr>
                                            <td>{{ $item->id }} </td>
                                            <td>{{$item->name }} </td>
                                            <td> 
                                               <a href="{{ route('role-details', $item['id']) }}" class="btn btn-warning btn-sm">Details</a>


                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                             </td>
                                        </tr>
                                    @endforeach
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
