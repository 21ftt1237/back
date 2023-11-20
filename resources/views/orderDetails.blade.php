<div class="container">
    <h1>Order Details</h1>

    <!-- Display associated product details -->
    <p>Product Name: {{ $order->product->name }}</p>
    <p>Product Price: {{ $order->product->price }}</p>
    <img src="{{ $order->product->image }}" alt="Product Image">
</div>
