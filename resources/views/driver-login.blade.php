<!DOCTYPE html>
<html>
<head>
    <title>Driver Login</title>
</head>
<body>
    <h2>Driver Login</h2>
    <form method="POST" action="{{ route('driver.login') }}">
        @csrf <!-- Include a CSRF token for security -->
        <label for="email">Email Address:</label>
        <input type="email" id="driver_email" name="driver_email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="driver_password" name="driver_password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
