<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>

<h2>Email Sender</h2>


  

    <button type="button" onclick="sendEmail()">Send Email</button>


<script>
 const nodemailer = require("nodemailer");

// Set up nodemailer transporter
const transporter = nodemailer.createTransport({
  service: "gmail", // Use the email service provider you prefer
  auth: {
    user: "Bruzonestore@gmail.com", // Your email address
    pass: "Bruzone2023" // Your email password or an app-specific password
  }
});

// Function to send an email
function sendEmail(toEmail, subject, htmlContent) {
  // Email options
  const mailOptions = {
    from: "Bruzonestore@gmail.com", // Your email address
    to: toEmail,
    subject: subject,
    html: htmlContent
  };

  // Send email
  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      console.error("Error sending email:", error);
    } else {
      console.log("Email sent:", info.response);
    }
  });
}

// Example usage
const toEmail = "hafiysyahrulnizam@gmail.com";
const subject = "Subject of your email";
const htmlContent = "<p>This is your HTML content</p>";

sendEmail(toEmail, subject, htmlContent);

</script>

</body>
</html>
