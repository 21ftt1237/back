<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <div>
        <h1>Admin Login</h1>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
