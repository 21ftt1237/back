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

    @forelse($orders as $orderDetails)
        <div class="order">
            <p>Order ID: {{ $orderDetails->id }}</p>
            <p>Order Date: {{ $orderDetails->created_at }}</p>
            <!-- Add more details as needed -->

            <!-- Display user and product details -->
            @if($orderDetails->user)
                <p>Customer Name: {{ $orderDetails->user->name }}</p>
            @endif

            @if($orderDetails->product)
                <p>Product: {{ $orderDetails->product->name }}</p>
                <p>Price: ${{ $orderDetails->product->price }}</p>
                <p>Quantity: {{ $orderDetails->quantity }}</p>
                <!-- Add more product details as needed -->
            @endif
        </div>
    @empty
        <p>No orders found.</p>
    @endforelse
</div>



    <!-- Add your JavaScript links or scripts here -->
</body>
</html>
