<div class="container">
        <h1>Order Details</h1>

        @if($orderDetails)
            <p>Order ID: {{ $orderDetails->id }}</p>
            <p>Order Date: {{ $orderDetails->created_at }}</p>
            <!-- Add more details as needed -->

            <!-- Display product details -->
            @if($productDetails)
                <p>Product Name: {{ $productDetails->name }}</p>
                <p>Product Price: {{ $productDetails->price }}</p>
                <img src="{{ $productDetails->image }}" alt="Product Image">
                <!-- Add more fields based on your actual product schema -->
            @else
                <p>Product not found.</p>
            @endif

        @else
            <p>Order not found.</p>
        @endif
    </div>
