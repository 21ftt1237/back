<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
</head>
<body>
    <h1>Order Placed Successfully</h1>

    <p>Thank you for placing your order. Here are the details:</p>

    <ul>
        <li><strong>User ID:</strong> {{ $consolidatedOrder['user']->id }}</li>
        <li><strong>User Email:</strong> {{ $consolidatedOrder['user']->email }}</li>
        <li><strong>Consolidated Order:</strong></li>
        <li>
            <ul>
                <li>
                    <strong>Created At:</strong> {{ $consolidatedOrder['created_at'] }} -
                    <strong>Total Price:</strong> ${{ $consolidatedOrder['total_price'] }}
                </li>
            </ul>
        </li>
    </ul>

    <p>Thank you for choosing our services.</p>

    <p>Best regards,<br> Your Company Name</p>
</body>
</html>
