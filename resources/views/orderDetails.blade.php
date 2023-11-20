<div class="container">
    <h1>Order Details</h1>

    @forelse($orderDetails as $order)
       

            <!-- Fetch and display product details for each order -->
            @foreach($order->products as $product)
                <p>Product Name: {{ $product->name }}</p>
                <p>Product Price: {{ $product->price }}</p>
                <img src="{{ $product->image }}" alt="Product Image">
                <!-- Add more fields based on your actual product schema -->
            @endforeach
        </div>
        <hr>
    @empty
        <p>No orders found.</p>
    @endforelse
</div>
