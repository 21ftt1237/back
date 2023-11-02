<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <title>Bruzone</title>

</head>

<style type="text/css">
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
header {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  height: 60px;
  width: 100%;
  background: black;
}


  header .wishlist img{
    width: 40px;
  }

  header .wishlist{
    position: relative;

  }

  header .wishlist span{
    background: red;
    border-radius: 50%;
    color: #fff;
    position: absolute;
    top: -5px;
    left: 80%;
    padding: 3px 10px;
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
    background-color: #000000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    z-index: 1000;
}

.logo {
    margin-left: 10px;
}

.logo a {
    color: white;
    margin-left: 15px;
    font-size: 35px;
    font-weight: 500;
    text-decoration: none;
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

.btn-sign-up {
    color: black;
    font-size: 12px;
    font-weight: bolder;
    width: 4%;
    padding: 5px;
    background-color: #F6E71D;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    margin-right: 20px;
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





.shopping img:hover,
.wishlist img:hover {
    color: red;
    transform: translateY(5px);
}



.heading ul {
  display: flex;
}

.logo{
  margin-left: 30px;
}

.logo a {
  color: white;
  transition-duration: 1s;
  font-weight: 800;
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








.footer-distributed{
  position: absolute;
  bottom: 0;
  margin-top: auto;
  background: black;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 40px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px sans-serif;
  margin: 0;
}

.footer-distributed h3 span{
  color:  #F6E71D;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  grey;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}


.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
  float: right;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  white;
  font-size: 16px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-icons{
  margin-left: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}


.footer-icons a ion-icon {
  color: white;
  background-color: black;
}
.footer-icons a:hover ion-icon{
  color: #F6E71D;
  transform: translateY(5px);
}

.footer-icons a i {
  color: white;
  background-color: black;
}
.footer-icons a:hover i{
  color: #F6E71D;
  transform: translateY(5px);
}




.footer-links a:hover {
  color: yellow;
  text-decoration: none;
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

.chatbox a i {
  margin-left: 250px;
  margin-right: 10px;
  color: white;
  background-color: black;
}
.chatbox a:hover i{
  color: #F6E71D;
  transform: translateY(5px);
}






</style>
<body>

      <header>
  


        <div class="navbar">

           <div class="logo" id="storeName" data-value="7"><a href="#">Bruzone</a></div>

        <div class="chatbox">
       
        <a href="#"><i class="fas fa-comment-dots fa-3x"></i></a>

        </div>

        <button class="view-button" onclick="togglePopup2()">VIEW</button>
         <button class="edit-button" onclick="togglePopup()">EDIT</button>

         <div class="shopping">
                <img src="image/shoppingCart.png">
                <span class="quantity">0</span>
            </div>

          <div class="wishlist">
            <a href="wishlist/Bruzone Wishlist.html">
                <img src="image/wishlist.png">
                <span class="quantity">0</span>
            </a>
        </div>



            <a href="dashboard.html" class="nav-link">HOME</a>
            <a href="#" class="nav-link">ABOUT US</a>
            <a href="profiletest.html" class="nav-link">MY ACCOUNT</a>
            <a href="Help/help.html" class="nav-link-last">HELP</a>
              <button class="btn-sign-up">SIGN UP</button>
        </div>
    </div>

  </header>

  <!-- Popup -->
 <div id="popup" class="popup" style="display: none;">
  <button class="close-button" onclick="togglePopup()">&#10006;</button>
  <div class="option-container">
    <h2>Customisation</h2>
    <br>
    <button class="option">Users</button>
  </div>
  <div class="option-container">
    <button class="option">Stores</button>
  </div>
    <div class="option-container">
    <button class="option">Products</button>
  </div>
</div>


  <!-- Popup -->
 <div id="popup2" class="popup2" style="display: none;">
  <button class="close-button" onclick="togglePopup2()">&#10006;</button>
  <div class="option-container">
    <h2>View</h2>
    <br>
    <button class="option">Orders</button>
  </div>
  <div class="option-container">
    <button class="option">Order history</button>
  </div>
</div>

    </div>
    <div class="card">
        <h1>Your Shopping Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <a id="checkoutLink" href="#">
            <div class="total">BND 0</div></a>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <script src="app.js">
    </script>
         

        </div>

      </div>
    </div>




  </section>
  <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Bru<span>zone</span></h3>

        <p class="footer-links">
          <a href="dashboard.html" class="link">HOME</a>
          
          <a href="#" class="link">ABOUT US</a>
        
          <a href="profiletest.html" class="link">MY ACCOUNT</a>
          
          <a href="Help/help.html" class="link">HELP</a>
          
        </p>

        <p class="footer-company-name">Bruzone © 2023</p>
      </div>


      <div class="footer-right">

        <p class="footer-company-about">
          <span></span>
          Life is short, so why not buy more.
        </p>

        <div class="footer-icons">

          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="mail"></ion-icon></a>
          <a href="https://www.paypal.com/bn/signin"><i class="fab fa-paypal fa-2x"></i></a>



        </div>

      </div>

    </footer>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="./ecommerce.js"></script>


</body>
</html>
