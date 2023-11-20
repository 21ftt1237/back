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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .order-details {
            margin: 20px 0;
            background-color: #fff;
            padding: 20px;
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

                @if ($order['product']) {{-- Check if product is not null --}}
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
                            <td>{{ $order['product_name'] }}</td>
                            <td>${{ $order['product_price'] }}</td>
                            <td>{{ $order['quantity'] }}</td>
                            <td>${{ $order['Total_price'] }}</td>
                        </tr>
                        <!-- Add other fields as needed -->
                    </table>
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
