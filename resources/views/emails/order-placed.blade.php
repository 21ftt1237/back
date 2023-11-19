<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
@foreach ($orderDetails as $order)
    <p>Product: {{ $order->product->name }}</p>
    <p>Price: ${{ $order->product->price }}</p>
    <p>Quantity: {{ $order->quantity }}</p>
    <hr>
@endforeach

</body>
</html>

