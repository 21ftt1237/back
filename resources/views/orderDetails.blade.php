<div class="container">
    <h1>Order Details</h1>

    @if($order)
        <p>Order ID: {{ $order->id }}</p>
        <p>Order Date: {{ $order->created_at }}</p>
        <!-- Add more details as needed -->

        <!-- Display associated products -->
        @if($products->isNotEmpty())
            <h2>Associated Products:</h2>
            @foreach($products as $product)
                <p>Product Name: {{ $product->name }}</p>
                <p>Product Price: {{ $product->price }}</p>
                <img src="{{ $product->image }}" alt="Product Image">
                <!-- Add more fields based on your actual product schema -->
                <hr>
            @endforeach
        @else
            <p>No associated products found.</p>
        @endif
    @else
        <p>Order not found.</p>
    @endif
</div>
