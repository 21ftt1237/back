<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Add your CSS links or styles here -->
</head>
<body>
    <div class="container">
        <h1>Order Details</h1>

        @if($orderDetails)
            <p>Order ID: {{ $orderDetails->id }}</p>
            <p>Order Date: {{ $orderDetails->created_at }}</p>
            <!-- Add more details as needed -->

            <!-- Example: Display other order details -->
            <p>Customer Name: {{ $orderDetails->customer_name }}</p>
            <p>Product: {{ $orderDetails->product_name }}</p>
            <p>Quantity: {{ $orderDetails->quantity }}</p>
            <!-- Add more fields based on your actual database schema -->

        @else
            <p>Order not found.</p>
        @endif
    </div>

    <!-- Add your JavaScript links or scripts here -->
</body>
</html>
