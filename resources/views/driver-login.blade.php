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
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
