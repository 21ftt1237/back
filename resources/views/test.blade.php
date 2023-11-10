<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
    <style>
        .container{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
<body>
<div class="container">
    <form onsubmit="sendEmail(); reset(); return false;">
        <h3>Test help</h3>
        <input type="text" id="name" placeholder="Your Name" required>
        <input type="email" id="email" placeholder="Email id" required>
        <input type="text" id="phone" placeholder="Phone Number" required>
        <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
        <button type="submit">Send</button>
    </form>
    
</div>
    <script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
            Host : "Bruzonestore@gmail.com",
            Username : "Bruzonestore@gmail.com",
            Password : "Bruzone2023",
            To : 'hafiysyahrulnizam@gmail.com',
            From : document.getElementById("email").value,
            Subject : "New Email",
            Body : "And this is the body"
        }).then(
          message => alert(message)
        );
        }
    </script>
</body>
</html>
