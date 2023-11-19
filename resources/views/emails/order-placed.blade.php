<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
</head>
<body>
    <h1>Order Placed Successfully</h1>

<p>Thank you for your order!</p>

<p>User Email: {{ $userEmail }}</p>

@foreach ($orderDetails as $order)
    <p>Product: {{ $order['product_name'] }}</p>
    <p>Price: ${{ $order['price'] }}</p>
    <p>Quantity: {{ $order['quantity'] }}</p>
    <p>Total Price: ${{ $order['total_price'] }}</p>
    <hr>
@endforeach

    <p>Thank you for choosing our services.</p>

    <p>Best regards,<br> Your Company Name</p>
</body>
</html>
