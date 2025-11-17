<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body class="full-body">

<div class="invoice-box">

    <!-- Header -->
    <div class="invoice-header">
        <div>
            <h2>INVOICE</h2>
            <p>Date: {{ date('d M, Y') }}</p>
            <p>Order No: #{{ $orderInfo->order_number ?? '00000' }}</p>
        </div>

        <div class="company-details">
            <h3>Rayhan Enterprice</h3>
            <p>Address: Madanganj, Bandar, Narayanganj</p>
            <p>Phone: 01705675623</p>
            <p>Email: rayhan8171@gmail.com</p>
        </div>
    </div>

    <!-- Customer Info -->
    <div class="customer-info">
        <h3>Billing Details</h3>
        <p><strong>Name:</strong> {{ $orderInfo->first_name }} {{ $orderInfo->last_name }}</p>
        <p><strong>Phone:</strong> {{ $orderInfo->phone }}</p>
        <p><strong>Email:</strong> {{ $orderInfo->email }}</p>
        <p><strong>Address:</strong> {{ $orderInfo->address }}</p>
        <p><strong>City:</strong> {{ $orderInfo->city }}</p>
        <p><strong>Payment Method:</strong> 
            @if($orderInfo->payment_method == "cod")
                Cash On Delivery
            @endif
        </p>
    </div>

    <!-- Items Table -->
    <table>
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Price (৳)</th>
                <th>Total (৳)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItem as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->product}}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->price, 2) }}</td>
                <td>{{ number_format($item->price * $item->quantity, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total Section -->
    <div class="total-box">
        <table>
            <tr>
                <td>Subtotal:</td>
                <td>৳ {{ number_format($orderInfo->amount, 2) }}</td>
            </tr>
            <tr>
                <td>Shipping Fee:</td>
                <td>৳ {{ number_format($orderInfo->shipping_fee, 2) }}</td>
            </tr>
            <tr class="grand-total">
                <td>Total:</td>
                <td>৳ {{ number_format($orderInfo->grand_total, 2) }}</td>
            </tr>
        </table>
    </div>

    <div style="clear: both;"></div>

    <p style="margin-top: 40px; text-align:center; color:#777;">
        ** Thank you for shopping with us! **
    </p>

</div>

</body>
</html>
