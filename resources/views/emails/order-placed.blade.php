<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
</head>
<body>
    <h1>Order Placed Successfully</h1>

    <p>Thank you for your order!</p>

    <p>User Email: {{ $userEmail }}</p>

    @foreach ($orderDetails as $createdAt => $order)
        <p>Order Date: {{ $createdAt }}</p>
        @foreach ($order as $item)
            <p>Product: {{ $item['product_name'] }}</p>
            <p>Price: ${{ $item['price'] }}</p>
            <p>Quantity: {{ $item['quantity'] }}</p>
            <p>Total Price: ${{ $item['total_price'] }}</p>
            <hr>
        @endforeach
    @endforeach

    <p>Thank you for choosing our services.</p>

    <p>Best regards,<br> Your Company Name</p>
</body>
</html>
