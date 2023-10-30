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
                <img src="image/Bruzone_Logo.png" style="width: 50px"><h1>Bruzone</h1>
            </div>
            <div class="aa">
                <h1 id="titla">Login To Your Account</h1>
                <form action="{{ route('login') }}" method="post"> 
                    @csrf 
                    <input type="email" name="email" id="email" required>
                    <input type="password" name="password" id="password" required/>
                    <input type="submit" value="Login" id="sub">
                    <a href="forgot_pass.html">Forgot Your Password?</a>
                    <br><br>
                    <h1>OR</h1>
                    <br>
                    <button>Continue as Guest</button>
                </form>
            </div>
            <div class="back">
                <img src="image/back.png" style="width: 50px"><p>Back To Homepage</p>
            </div>
        </div>
        <div class="reg">
            <h1>New Here?</h1>
            <h1>Life Is Short</h1>
            <h1>So Why Not Sign Up Here!</h1>
            <div class="imagine">
                <img src="image/location.png" style="width: 300px; transform: rotate(20deg);"  onclick="haha()">
                <a href="{{ route('bruzone_sign_up') }}" class="sign_up">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>

