<!DOCTYPE html>
<html>
<head>
        <title>Sign_up</title>
        <link rel="stylesheet" type="text/css" href="Sign_up.css">
</head>
<body>
<div class="container">
<div class="form">
        <div class="lala">
        <img src="image/Bruzone_Logo.png" style="width: 50px"><h1>Bruzone</h1>
        </div>
        <div class="aa">
<h1 id="titla">Create A New Account</h1>
<form method="post" action="store.php" id="form">
<input type="email" name="email" placeholder="Email Address" id="email">
<input type="password" name="password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<input type="password" name="" placeholder="Reenter Password" id="confirmpass" onblur="validate()">
<input type="submit" name="submit" value="Sign Up">
</form>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<div class="back">
<img src="image/back.png" style="width: 50px"><p>Back To Homepage</p>
</div>
</div>
<div class="reg">
<h1>Already Got An Account?</h1>
<div class="imagine">
<img src="image/Carta.png" style="width: 250px"  onclick="haha()">
<a href="Login.php" class="sign_in">Sign In</a>
</div>
</div>
</div>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function validate() {
var x= document.getElementById("psw");
    var y= document.getElementById("confirmpass");
if(x.value==y.value);
else alert("password not same");
}


</script>
</body>
</html>