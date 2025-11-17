<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirmation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site-asset/css/custom.css') }}">
</head>
<body>

<div class="container">

    <div class="success-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-2.59a.75.75 0 10-1.22-.88l-3.483 4.82-1.69-1.69a.75.75 0 10-1.06 1.06l2.25 2.25a.75.75 0 001.14-.07l4.06-5.49z" clip-rule="evenodd"/></svg>
    </div>

    <h2>Your Order is Confirmed!</h2>
    <p class="center">Thank you for shopping with us. A confirmation email has been sent to your address.</p>

    <div class="order-box">
        <h3>Order Details</h3>
        <p><strong>Order ID:</strong> {{$order->order_number}}</p>
        <p><strong>Payment Method:</strong> {{$order->payment_method == "cod" ? "Cash on Delivery" : ""}}</p>
        <p><strong>Order Status:</strong> {{ $order->status==0 ? "Pending": "" }} </p>
        <p><strong>Payment Status:</strong> {{ $order->payment_status }} </p>
        <p><strong>Expected Delivery:</strong> 
            @if ($order->city == 'narayanganj' || $order->city == 'Narayanganj')
                3-5 Business Days
            @elseif ($order->city == 'Dhaka' || $order->city == 'dhaka')
                5-7 Business Days
            @else 
                7-10 Business Days
            @endif
        </p>

    </div>

    <div class="order-box">
        <h3>Delivery Address</h3>
        <p>{{ $order->first_name}} {{$order->last_name}}</p>
        <p>{{ $order->address }}</p>
        <p>Phone: {{ $order->phone }}</p>
        <p>Email: {{ $order->email }}</p>
    </div>

    <div class="order-box summary">
        <h3>Order Summary</h3>

        <div class="summary-item"><span>Subtotal</span> <span>৳ {{$order->amount}}.00</span></div>
        <div class="summary-item"><span>Shipping Fee</span> <span>৳ {{$order->shipping_fee}}.00</span></div>
        <div class="summary-item total"><span>Total</span> <span>৳ {{ $order->grand_total }}.00</span></div>

    </div>

    <div class="btn-area">
        <a href="/" class="btn">Continue Shopping</a>
    </div>
</div>

</body>
</html>
