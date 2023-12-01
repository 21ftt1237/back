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
                    <th>Order Date</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <!-- Add more headers as needed -->
                </tr>
                <tr>
                    <td>{{ $orderDetails->id }}</td>
                    <td>{{ $orderDetails->created_at->format('Y-m-d H:i:s') }}</td>
                    @if($orderDetails->user)
                        <td>{{ $orderDetails->user->name }}</td>
                    @else
                        <td>N/A</td>
                    @endif
                    @if($orderDetails->product)
                        <td>{{ $orderDetails->product->name }}</td>
                        <td>${{ number_format($orderDetails->product->price, 2) }}</td>
                        <td>{{ $orderDetails->quantity }}</td>
                        <!-- Add more data cells as needed -->
                    @else
                        <td colspan="3">N/A</td>
                    @endif
                </tr>
            </table>
        @empty
            <p>No orders found.</p>
        @endforelse
    </div>

    <!-- Add your JavaScript links or scripts here -->
</body>
</html>
