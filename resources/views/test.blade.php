<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to = "Bruzonestore@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Your Email:</label>
        <input type="email" name="email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Message:</label>
        <textarea name="message" rows="4" required></textarea><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>
