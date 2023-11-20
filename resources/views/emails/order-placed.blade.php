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
            {{-- Log order information for debugging --}}
            @php
                Log::info('Order Details: ' . json_encode($order));
            @endphp

            {{-- Check if the expected keys exist --}}
            @if (isset($order['product_name']) && isset($order['product_price']))
                <p>Product: {{ $order['product_name'] }}</p>
                <p>Price: ${{ $order['product_price'] }}</p>
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
