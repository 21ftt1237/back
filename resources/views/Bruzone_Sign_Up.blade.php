<!DOCTYPE html>
<html>
<head>
    <title>Sign_up</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Sign_up.css') }}">
</head>
<body>
<div class="container">
    <div class="form">
        <div class="lala">
            <img src="image/Bruzone_Logo.png" style="width: 50px"><h1>Bruzone</h1>
        </div>
        <div class="aa">
            <h1 id="titla">Create A New Account</h1>
            <form method="post" action="{{ route('register') }}"> 
                @csrf 
                <input type="text" name="name" placeholder="Name" id="name">
                <input type="email" name="email" placeholder="Email Address" id="email">
                <input type="password" name="password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="password" name="password_confirmation" placeholder="Reenter Password" id="confirmpass" onblur="validate()">
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
    </div>
    <div class="reg">
        <h1>Already Got An Account?</h1>
        <div class="imagine">
            <img src="image/carta.png" style="width: 250px" onclick="haha()">
            <a href="{{ route('BruzoneLogin') }}" class="sign_in">Sign In</a>
        </div>
    </div>
</div>
</body>
</html>
