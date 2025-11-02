@extends('admin.layout.master')
@section('title', 'Pending Orders')
@section('content')

<div class="mx-md-4">
    <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> Manage</h4>
        <a href="" class="btn btn-warning my-3">Add Product</a>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Delivered Orders Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                    <caption>Orders Table</caption>
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>user_id</th>
                                            <th>order_number</th>
                                            <th>total_amount</th>
                                            <th>discount_amount</th>
                                            <th>payment_status</th>
                                            <th>order_status</th>
                                            <th>payment_method</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>101</td>
                                            <td>ORD-1001</td>
                                            <td>2500.00</td>
                                            <td>200.00</td>
                                            <td>Paid</td>
                                            <td>Delivered </td>
                                            <td>Credit Card</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>102</td>
                                            <td>ORD-1002</td>
                                            <td>1800.00</td>
                                            <td>0.00</td>
                                            <td>Pending</td>
                                            <td>Delivered</td>
                                            <td>bKash</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>103</td>
                                            <td>ORD-1003</td>
                                            <td>3200.00</td>
                                            <td>300.00</td>
                                            <td>Paid</td>
                                            <td>Delivered</td>
                                            <td>Cash on Delivery</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>104</td>
                                            <td>ORD-1004</td>
                                            <td>4500.00</td>
                                            <td>500.00</td>
                                            <td>Paid</td>
                                            <td>Delivered</td>
                                            <td>Nagad</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>105</td>
                                            <td>ORD-1005</td>
                                            <td>1200.00</td>
                                            <td>100.00</td>
                                            <td>Paid</td>
                                            <td>Delivered</td>
                                            <td>Rocket</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>105</td>
                                            <td>ORD-1005</td>
                                            <td>1200.00</td>
                                            <td>100.00</td>
                                            <td>Paid</td>
                                            <td>Delivered</td>
                                            <td>Rocket</td>
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
</div>
@endsection
