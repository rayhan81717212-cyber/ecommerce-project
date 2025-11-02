@extends('admin.layout.master')
@section('title', 'Payment Method')
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
                                <caption>Payment Records Table</caption>
                                <thead>
                                    <tr>
                                        <th>payment_id</th>
                                        <th>user_id</th>
                                        <th>order_number</th>
                                        <th>payment_method</th>
                                        <th>amount</th>
                                        <th>discount</th>
                                        <th>final_amount</th>
                                        <th>payment_status</th>
                                        <th>payment_date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>101</td>
                                        <td>ORD-1001</td>
                                        <td>Credit Card</td>
                                        <td>2500</td>
                                        <td>200</td>
                                        <td>2300</td>
                                        <td class="paid">Paid</td>
                                        <td>2025-10-01</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>102</td>
                                        <td>ORD-1002</td>
                                        <td>bKash</td>
                                        <td>1800</td>
                                        <td>0</td>
                                        <td>1800</td>
                                        <td class="pending">Pending</td>
                                        <td>2025-10-02</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>103</td>
                                        <td>ORD-1003</td>
                                        <td>Cash on Delivery</td>
                                        <td>3200</td>
                                        <td>300</td>
                                        <td>2900</td>
                                        <td class="paid">Paid</td>
                                        <td>2025-10-03</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>104</td>
                                        <td>ORD-1004</td>
                                        <td>Nagad</td>
                                        <td>4500</td>
                                        <td>500</td>
                                        <td>4000</td>
                                        <td class="failed">Failed</td>
                                        <td>2025-10-04</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>105</td>
                                        <td>ORD-1005</td>
                                        <td>Rocket</td>
                                        <td>1200</td>
                                        <td>100</td>
                                        <td>1100</td>
                                        <td class="paid">Paid</td>
                                        <td>2025-10-05</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>106</td>
                                        <td>ORD-1006</td>
                                        <td>Debit Card</td>
                                        <td>2400</td>
                                        <td>200</td>
                                        <td>2200</td>
                                        <td class="pending">Pending</td>
                                        <td>2025-10-06</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>107</td>
                                        <td>ORD-1007</td>
                                        <td>PayPal</td>
                                        <td>5000</td>
                                        <td>500</td>
                                        <td>4500</td>
                                        <td class="paid">Paid</td>
                                        <td>2025-10-07</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>108</td>
                                        <td>ORD-1008</td>
                                        <td>bKash</td>
                                        <td>1900</td>
                                        <td>0</td>
                                        <td>1900</td>
                                        <td class="failed">Failed</td>
                                        <td>2025-10-08</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>109</td>
                                        <td>ORD-1009</td>
                                        <td>Upay</td>
                                        <td>2100</td>
                                        <td>100</td>
                                        <td>2000</td>
                                        <td class="paid">Paid</td>
                                        <td>2025-10-09</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>110</td>
                                        <td>ORD-1010</td>
                                        <td>Nagad</td>
                                        <td>2750</td>
                                        <td>250</td>
                                        <td>2500</td>
                                        <td class="pending">Pending</td>
                                        <td>2025-10-10</td>
                                    </tr>

                            </table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
