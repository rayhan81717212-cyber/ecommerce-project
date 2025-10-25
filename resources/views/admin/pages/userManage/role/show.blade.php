@extends('admin.layout.master')
@section('title', 'show')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role /</span> Details</h4>
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
                                        <th>{{$role_id->id}}</th>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <th>{{$role_id->name}}</th>
                                    </tr>
                                    
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection