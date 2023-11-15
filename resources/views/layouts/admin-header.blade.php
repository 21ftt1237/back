@auth
    @php
        $loggedIn = true;
    @endphp
@else
    @php
        $loggedIn = false;
    @endphp
@endauth
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{ asset('css/header.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="./ecommerce.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   
    <title></title>
    <style>
header {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  height: 60px;
  width: 100%;
  background: black;
}




   /*NAVBAR*/
     body {
    font-family: Arial, sans-serif;
    margin: 0;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: darkblue;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    z-index: 1000;
}

.logo {
    margin-left: 30px;
    margin-right: 800px;
}

.logo a {
    color: white;
    margin-left: 15px;
    font-size: 35px;
    font-weight: 800;
    text-decoration: none;
    transition-duration: 1s;
     margin-right: 40px;
}

    .logo {
    margin-left: 10px;
}

.logo a {
    color: white;
    margin-left: 15px;
    font-size: 35px;
    font-weight: 800;
    text-decoration: none;
    transition-duration: 1s;
     margin-right: 40px;
}

.nav-links {
    font-size: 9px;
    display: flex;
    align-items: center;

}

.nav-link, .nav-link-last {
    color: white;
    font-size: 12px;
    text-decoration: none;
    font-weight: 600;
}



.btn-sign-up:hover {
    background-color: #555;
}


    .navbar, .nav-link:hover{
    color: #F6E71D;
    text-decoration: none;
}

  .nav-link-last:hover{
    color: #F6E71D;
    text-decoration: none;
  }



.heading ul {
  display: flex;
}

.logo a:hover {
  color: rgb(240, 197, 6);
  transition-duration: 1s;
}
.heading ul li {
  list-style: none;
}
.heading ul li a {
  margin: 5px;
  text-decoration: none;
  color: black;
  font-weight: 500;
  position: relative;
  color: white;
  font-size: 18px;
  transition-duration: 1s;
}
.heading ul li a:active {
  color: red;
}
.heading ul li a:hover {
  color: rgb(243, 168, 7);
  transition-duration: 1s;
}

.heading ul li a::before {
  content: "";
  height: 2px;
  width: 0px;
  position: absolute;
  left: 0;
  bottom: 0;
  background-color: white;
  transition-duration: 1s;
}
.heading ul li a:hover::before {
  width: 100%;
  transition-duration: 1s;
  background-color: rgb(243, 168, 7);
}

.logo a {
  color: white;
  font-size: 35px;
  font-weight: 500;
  text-decoration: none;
}
ion-icon {
  width: 30px;
  height: 30px;
  background-color: white;
  color: black;
}
ion-icon:hover {
  cursor: pointer;
}

header a ion-icon {
  position: relative;
  right: 3px;
}

/*POPUP*/

.btn-sign-up:hover {
    background-color: #555;
}

.edit-button {
  color: black;
    font-size: 24px;
    
    font-weight: bolder;
    width: 10%;
    padding: 5px;
    background-color: #F6E71D;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    
}

.edit-button:hover {
    background-color: #555;
}

.view-button {
  color: black;
    font-size: 24px;
    
    font-weight: bolder;
    width: 10%;
    padding: 5px;
    background-color: #F6E71D;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    
}

.view-button:hover {
    background-color: #555;
}

.popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 40%;
  transform: translate(-50%, -50%);
  background-color: white;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 10px;
  z-index: 1000;
  text-align: center;

}

.popup2 {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 40%;
  transform: translate(-50%, -50%);
  background-color: white;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 10px;
  z-index: 1000;
  text-align: center;

}

.close-button {
  position: absolute;
  top: 10px;
  right: 10px;
  background: none;
  border: none;
  font-size: 20px;
  cursor: pointer;
  color: #999;
}

.option-container {
  text-align: center;
  margin: 30px 0;
}

.option {
  background: #F6E71D;
  color: black;
  font-size: 24px;
  width: 80%;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}



        
    </style>
</head>
<body>
<header>
<div class="admin-landing-page">
    <div class="navbar">
        <div class="logo" id="storeName" data-value="7"><a href="{{ url('admin/adminDashboard') }}">Bruzone</a></div>
        <button class="view-button" onclick="togglePopup2()">ORDERS</button>
        <button class="edit-button" onclick="togglePopup()">EDIT</button>


        <a href="{{ url('Dashboard-adm') }}" class="nav-link">HOME</a>
        <a href="{{ url('profiletest') }}" class="nav-link">MY ACCOUNT</a>
        
	@if($loggedIn)
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-sign-up" id="sub">Logout</button>
            </form>
        @endif

        
    </div>
    </div>

    
         <!-- Popup -->
 <div id="popup" class="popup" style="display: none;">
  <button class="close-button" onclick="togglePopup()">&#10006;</button>
  <div class="option-container">
    <h2>Customisation</h2>
    <br>
    <a href="{{ route('dashboard.admin') }}" class="option-users">Users</a>
  </div>
  <div class="option-container">
    <button class="option">Stores</button>
</div>
 </div>


  <!-- Popup -->
 <div id="popup2" class="popup2" style="display: none;">
  <button class="close-button" onclick="togglePopup2()">&#10006;</button>
  <div class="option-container">
    <h2>View</h2>
    <br>
  </div>
</div>
    
    <script src="app.js">
    </script>
         
     </div>
</header>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="./ecommerce.js"></script>

<script type="text/javascript">
    //POPUP
  function togglePopup() {
    const popup = document.getElementById("popup");
    if (popup.style.display === "block") {
        popup.style.display = "none";
    } else {
        popup.style.display = "block";
    }
}


function togglePopup2() {
    const popup = document.getElementById("popup2");
    if (popup.style.display === "block") {
        popup.style.display = "none";
    } else {
        popup.style.display = "block";
    }
}

</script>

</body>
</html>
