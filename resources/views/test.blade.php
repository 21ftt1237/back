<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    
</head>
<body>
    <h1>Contact</h1>
    
    <form onsubmit="sendEmail(); reset(); return false;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
        <button type="submit">Send</button>
    </form>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script >
    function sendEmail(){
        Email.send({
            Host : "smtp.gmail.com",
            Username : "bruzonedept@gmail.com",
            Password : "klfc slad fbvp mlht",
            To : 'bruzonedept@gmail.com',
            From : document.getElementById("email").value,
            Subject : "hi qebs",
            Body : "And this is the body"
        }).then(
      message => alert(message)
    );
    }
</script>
</body>
</html>
