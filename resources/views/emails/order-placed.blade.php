<!DOCTYPE html>
<html>

<head>
    <title>Order Placed</title>
</head>

<body>
    <h1>Order Placed Successfully</h1>

    <p>Thank you for your order!</p>

    <p>User Email: {{ $userEmail }}</p>

    @foreach ($orderDetails as $createdAt => $orders)
        @foreach ($orders as $order)
            @if ($order['product']) {{-- Check if product is not null --}}
                <p>Product: {{ $order['product']['name'] }}</p>
                <p>Price: ${{ $order['product']['price'] }}</p>
                <p>Quantity: {{ $order['quantity'] }}</p>
                <p>Total Price: ${{ $order['Total_price'] }}</p>
                <!-- Add other fields as needed -->
            @endif
        @endforeach
    @endforeach

    <p>Thank you for choosing our services.</p>

    <p>Best regards,<br> Your Company Name</p>
</body>

</html>
