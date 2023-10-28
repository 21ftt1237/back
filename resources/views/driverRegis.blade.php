<!DOCTYPE html>
<html>
<head>
    <title>Driver Registration Form</title>
</head>
<body>
    <h2>Driver Registration Form</h2>
   <form action="{{ route('driver.register') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="driver_email">Email Address:</label>
    <input type="email" id="driver_email" name="driver_email" required><br><br>

    <label for="driver_password">Password:</label>
    <input type="password" id="driver_password" name="driver_password" required><br><br>

    <label for="driver_password_confirmation">Reenter Password:</label>
    <input type="password" id="driver_password_confirmation" name="driver_password_confirmation" required><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>

