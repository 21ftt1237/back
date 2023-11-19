<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
</head>
<body>
    <h1>Order Placed Successfully</h1>

    <p>Thank you for placing your order. Here are the details:</p>

    <ul>
        <li><strong>User ID:</strong> {{ $userData['user']->id }}</li>
        <li><strong>User Email:</strong> {{ $userData['user']->email }}</li>
        <li><strong>Orders:</strong>
            <ul>
                @foreach ($ordersData as $createdAt => $orders)
                    <li>
                        <strong>Created At:</strong> {{ $createdAt }} -
                        <strong>Total Price:</strong> ${{ array_sum(array_column($orders, 'Total_price')) }}
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

    <p>Thank you for choosing our services.</p>

    <p>Best regards,<br> Your Company Name</p>
</body>
</html>
