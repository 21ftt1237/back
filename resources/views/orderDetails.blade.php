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
        <h1>All Orders Details</h1>

        @forelse($orderDetails as $order)
            <div class="order-details">
                <p>Order ID: {{ $order->id }}</p>
                <p>Order Date: {{ $order->created_at }}</p>
                <!-- Add more details as needed -->

                <!-- Fetch product details related to the order -->
                @php
                    $productDetails = App\Models\Product::where('id', $order->product_id)->first();
                @endphp

                <!-- Display product details -->
                @if($productDetails)
                    <p>Product Name: {{ $productDetails->name }}</p>
                    <p>Product Price: {{ $productDetails->price }}</p>
                    <img src="{{ $productDetails->image }}" alt="Product Image">
                    <!-- Add more fields based on your actual product schema -->
                @else
                    <p>Product not found.</p>
                @endif
            </div>
            <hr>
        @empty
            <p>No orders found.</p>
        @endforelse
    </div>
</body>
</html>
