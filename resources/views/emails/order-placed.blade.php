<!DOCTYPE html>
<html>

<head>
    <title>Order Placed</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            margin: 10px 0;
        }

        .order-details {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            background-color: #fff;
        }

        .order-details p {
            margin: 5px 0;
        }

        .thank-you {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin: 20px 0;
        }

        .best-regards {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="order-details">
        <h1>Order Placed Successfully</h1>

        <p>Thank you for your order!</p>

        <p>User Email: {{ $userEmail }}</p>

        @foreach ($orderDetails as $createdAt => $orders)
            @foreach ($orders as $order)
                {{-- Log order information for debugging --}}
                @php
                    Log::info('Order Details: ' . json_encode($order));
                @endphp

              @if (isset($order['product_name']) && isset($order['product_price']))
                    <div class="product-details">
                         <p>Product: {{ $order['product_name'] }}</p>
                         <p>Price: ${{ $order['product_price'] }}</p>
                         <p>Quantity: {{ $order['quantity'] }}</p>
                         <p>Total Price: ${{ $order['Total_price'] }}</p>
                        <!-- Add other fields as needed -->
                    </div>
                @endif
            @endforeach
        @endforeach

        <div class="thank-you">
            <p>Thank you for choosing our services.</p>
        </div>

        <p class="best-regards">Best regards,<br> Bruzone</p>
    </div>
</body>

</html>
