<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>

    <!-- Your existing code -->

    @if(isset($cart) && $cart->isNotEmpty()) <!-- Check if $cart is set and not empty -->
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $cartItem)
                    <tr>
                        <td>{{ $cartItem['product_name'] }}</td>
                        <td>${{ $cartItem['price'] }}</td>
                        <td>{{ $cartItem['quantity'] }}</td>
                        <td>${{ $cartItem['total_price'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No items in the cart.</p>
    @endif

    <!-- Your existing code -->

</body>
</html>

