@extends('admin.layout.master')
@section('title', 'Pending Orders')
@section('content')

<div class="mx-md-4">
    <div class="container-fluid p-md-5 flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Delevered Order /</span> Manage</h4>
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Delivered Orders Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered text-center">
                                    <caption>Orders Table</caption>
                                        <thead>
                                        <tr class="bg-warning">
                                            <th class="text-white text-align-center"><i class="fa-solid fa-hashtag"></i> ID</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-user"></i>Customer Name</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-receipt"></i> Order Number</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-dollar-sign"></i> Amount</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-truck-fast"></i> Shipping Fee</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-calculator"></i> Total</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-wallet"></i> Payment Status</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-money-bill-wave"></i> Payment Method</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-clipboard-check"></i> Order Status</th>
                                            <th class="text-white text-align-center"><i class="fa-solid fa-gear"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($order as $index => $item)
                                        <tr >
                                            <td>{{ $order->firstItem() + $index }}</td>
                                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                            <td>{{ $item->order_number }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->shipping_fee }}</td>
                                            <td>{{ $item->grand_total }}</td>
                                            <td>{{ $item->payment_status }}</td>
                                            <td>{{ $item->payment_method == 'cod' ? "Cash on Delivery" : "" }}</td>
                                            <td>
                                                {{ $item->status }}
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning">Update</button>
                                                <button class="btn btn-sm btn-primary">View</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="10">
                                               {{ $order->onEachSide(1)->links('pagination::bootstrap-5') }}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
