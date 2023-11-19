<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
</head>
<body>
    <h1>Order Placed Successfully</h1>

    <p>Thank you for placing your order. Here are the details:</p>

    <ul>
        <li><strong>Order ID:</strong> {{ $orderDetails['order_id'] }}</li>
        <li><strong>Product(s):</strong>
            <ul>
                @foreach ($orderDetails['products'] as $product)
                    <li>{{ $product['name'] }} - Quantity: {{ $product['quantity'] }}</li>
                @endforeach
            </ul>
        </li>
        <li><strong>Total Amount:</strong> ${{ $orderDetails['total_amount'] }}</li>
        <!-- Add more details as needed -->
    </ul>

    <p>Thank you for choosing our services.</p>

    <p>Best regards,<br> Your Company Name</p>
</body>
</html>
