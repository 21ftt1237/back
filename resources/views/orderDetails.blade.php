<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Add your CSS links or styles here -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Details</h1>

        @forelse($orders as $orderDetails)
            <table>
                <tr>
                    <th>Order ID</th>
                    <td>{{ $orderDetails->id }}</td>
                </tr>
                <tr>
                    <th>Order Date</th>
                    <td>{{ $orderDetails->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                <!-- Add more details as needed -->

                <!-- Display user and product details -->
                @if($orderDetails->user)
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $orderDetails->user->name }}</td>
                    </tr>
                @endif

                @if($orderDetails->product)
                    <tr>
                        <th>Product</th>
                        <td>{{ $orderDetails->product->name }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>${{ number_format($orderDetails->product->price, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{ $orderDetails->quantity }}</td>
                    </tr>
                    <!-- Add more product details as needed -->
                @endif
            </table>
        @empty
            <p>No orders found.</p>
        @endforelse
    </div>

    <!-- Add your JavaScript links or scripts here -->
</body>
</html>
