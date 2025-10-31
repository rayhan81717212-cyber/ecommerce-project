@extends('admin.layout.master')
@section('title', 'dashboard')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Categories /</span> Manage</h4>
        <a href="" class="btn btn-warning my-3">Add Categories</a>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Categories Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Status </th>
                                        <th>Photo </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Electronics</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><img src="uploads/categories/electronics.jpg" width="50" height="50"
                                                class="rounded" alt="Electronics"></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Fashion</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><img src="uploads/categories/fashion.jpg" width="50" height="50"
                                                class="rounded" alt="Fashion"></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Groceries</td>
                                        <td><span class="badge bg-danger">Inactive</span></td>
                                        <td><img src="uploads/categories/groceries.jpg" width="50" height="50"
                                                class="rounded" alt="Groceries"></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Home Appliances</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><img src="uploads/categories/appliances.jpg" width="50" height="50"
                                                class="rounded" alt="Home Appliances"></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Sports & Fitness</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><img src="uploads/categories/sports.jpg" width="50" height="50"
                                                class="rounded" alt="Sports"></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
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
