@extends('admin.layout.master')
@section('title', 'Review')
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
                                            <th>review_id</th>
                                            <th>user_id</th>
                                            <th>product_id</th>
                                            <th>rating</th>
                                            <th>review_title</th>
                                            <th>review_text</th>
                                            <th>review_date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>101</td>
                                            <td>P-1001</td>
                                            <td class="rating">⭐⭐⭐⭐⭐</td>
                                            <td>Excellent Product!</td>
                                            <td>Quality is awesome. Fast delivery and packaging was great.</td>
                                            <td>2025-10-01</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>102</td>
                                            <td>P-1002</td>
                                            <td class="rating">⭐⭐⭐⭐</td>
                                            <td>Good but Pricey</td>
                                            <td>Product works fine, but I think it's a little expensive.</td>
                                            <td>2025-10-02</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>103</td>
                                            <td>P-1003</td>
                                            <td class="rating">⭐⭐⭐</td>
                                            <td>Average Quality</td>
                                            <td>Not bad, but expected a bit better build quality.</td>
                                            <td>2025-10-03</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>104</td>
                                            <td>P-1004</td>
                                            <td class="rating">⭐⭐⭐⭐⭐</td>
                                            <td>Superb!</td>
                                            <td>Highly satisfied! Received exactly what was shown in the picture.</td>
                                            <td>2025-10-04</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>105</td>
                                            <td>P-1005</td>
                                            <td class="rating">⭐⭐</td>
                                            <td>Not as Expected</td>
                                            <td>The color was different from what I ordered.</td>
                                            <td>2025-10-05</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>106</td>
                                            <td>P-1006</td>
                                            <td class="rating">⭐⭐⭐⭐</td>
                                            <td>Good Purchase</td>
                                            <td>Works perfectly, battery backup could be better.</td>
                                            <td>2025-10-06</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>107</td>
                                            <td>P-1007</td>
                                            <td class="rating">⭐⭐⭐</td>
                                            <td>Okay Product</td>
                                            <td>Delivered on time, but quality is just okay.</td>
                                            <td>2025-10-07</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>108</td>
                                            <td>P-1008</td>
                                            <td class="rating">⭐⭐⭐⭐⭐</td>
                                            <td>Best Purchase Ever</td>
                                            <td>Loved it! Will definitely order again from this shop.</td>
                                            <td>2025-10-08</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>109</td>
                                            <td>P-1009</td>
                                            <td class="rating">⭐⭐⭐</td>
                                            <td>Just Fine</td>
                                            <td>Product is okay for the price, not too good not too bad.</td>
                                            <td>2025-10-09</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>110</td>
                                            <td>P-1010</td>
                                            <td class="rating">⭐⭐⭐⭐</td>
                                            <td>Happy Customer</td>
                                            <td>Fast delivery, decent quality, worth the money.</td>
                                            <td>2025-10-10</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
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
