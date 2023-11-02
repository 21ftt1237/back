<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="lala">
                <img src="image/BruZone_Logo.png" style="width: 45px"><h1>Bruzone</h1>
            </div>
            <div class="aa">
                <h1 id="titla">Login To Your Account</h1>
                <form action="{{ route('login') }}" method="post"> 
                    @csrf 
                    <input type="email" name="email" id="email" required>
                    <input type="password" name="password" id="password" required/>
                    <input type="submit" value="Login" id="sub">
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    <br><br>
                    <h1>OR</h1>
                    <br>
                    <button> <a href="{{ route('dashboard') }}">Continue As Guest</a></button>
                </form>
            </div>
        </div>
        <div class="reg">
            <h1>New Here?</h1>
            <h1>Life Is Short</h1>
            <h1>So Why Not Sign Up Here!</h1>
            <div class="imagine">
                <img src="image/location.png" style="width: 300px; transform: rotate(20deg);"  onclick="haha()">
                <a href="Bruzone_Sign_Up" class="sign_up">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>

