<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    @foreach ($orderDetails as $order)
    <p>Product: {{ $order['name'] }}</p>
    <p>Price: ${{ $order['price'] }}</p>
    <p>Quantity: {{ $order['quantity'] }}</p>
    <p>Total Price: ${{ $order['price'] }}</p>
    <hr>
@endforeach

</body>
</html>

