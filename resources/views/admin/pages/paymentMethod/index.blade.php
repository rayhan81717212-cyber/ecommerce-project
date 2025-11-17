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
                                    <tr class="bg-warning">
                                        <th class="text-white"><i class="fas fa-hashtag me-1"></i>Payment ID</th>
                                        <th class="text-white"><i class="fas fa-user me-1"></i>Customer Name</th>
                                        <th class="text-white"><i class="fas fa-receipt me-1"></i>Order Number</th>
                                        <th class="text-white"><i class="fas fa-credit-card me-1"></i>Payment Method</th>
                                        <th class="text-white"><i class="fas fa-coins me-1"></i> Amount</th>
                                        <th class="text-white"><i class="fas fa-circle me-1"></i>Payment Status</th>
                                        <th class="text-white"><i class="fas fa-calendar-alt me-1"></i>Payment Date</th>
                                        <th class="text-white"><i class="fas fa-calendar-alt me-1"></i>Action</th>
                                        <th class="text-white"><i class="fas fa-calendar-alt me-1"></i>Invoice</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payment as $index => $item)
                                        <tr>
                                        <td>{{ $payment->firstItem() + $index }}</td>
                                        <td>{{$item->first_name}} {{$item->last_name}}</td>
                                        <td>{{$item->order_number}}</td>
                                        <td>
                                            @if ($item->payment_method == 'cod')
                                                Cash On Delivery
                                            @endif
                                        </td>
                                        <td>{{$item->grand_total }}</td>
                                        <td class="paid">
                                            @if ($item->status == "pending")
                                                <span class="badge bg-primary">Pending</span>
                                            @elseif ($item->status == "paid")
                                                <span class="badge bg-warning">Paid</span>
                                            @else
                                                <span class="badge bg-dark">Cancelled</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->updated_at->format('d M, Y') }}</td>
                                        <td>
                                            <form action="" method="POST">
                                                 <button class="btn btn-sm btn-warning">Update</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('invoice', $item->id) }}" class="btn btn-sm btn-dark">Invoice</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="9">
                                            {{ $payment->onEachSide(1)->links("vendor.pagination.bootstrap-5") }}
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
