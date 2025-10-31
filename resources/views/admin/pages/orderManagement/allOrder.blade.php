@extends('admin.layout.master')
@section('title', 'dashboard')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> Manage</h4>
        <a href="" class="btn btn-warning my-3">Add Product</a>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Product Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th>Brand Name</th>
                                        <th>Product Name</th>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Electronics</td>
                                        <td>Samsung</td>
                                        <td>Galaxy S23 Ultra</td>
                                        <td>Latest Samsung flagship phone with powerful camera.</td>
                                        <td>125000 ৳</td>
                                        <td>115000 ৳</td>
                                        <td>25</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Fashion</td>
                                        <td>Nike</td>
                                        <td>Air Max 270</td>
                                        <td>Comfortable and stylish sneakers for daily wear.</td>
                                        <td>12000 ৳</td>
                                        <td>9990 ৳</td>
                                        <td>50</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Electronics</td>
                                        <td>HP</td>
                                        <td>HP Pavilion 15</td>
                                        <td>Powerful laptop for office and multimedia use.</td>
                                        <td>85000 ৳</td>
                                        <td>79900 ৳</td>
                                        <td>12</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Beauty</td>
                                        <td>L’Oréal</td>
                                        <td>Hydra Fresh Cream</td>
                                        <td>Moisturizing cream for smooth and glowing skin.</td>
                                        <td>1500 ৳</td>
                                        <td>1200 ৳</td>
                                        <td>80</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Home Appliance</td>
                                        <td>Walton</td>
                                        <td>Walton Refrigerator 250L</td>
                                        <td>Energy-efficient refrigerator with frost control.</td>
                                        <td>38000 ৳</td>
                                        <td>34900 ৳</td>
                                        <td>15</td>
                                        <td><span class="badge bg-danger">Inactive</span></td>
                                        <td></td>
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
