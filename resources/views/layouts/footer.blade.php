<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./ecommerce.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">



  <title></title>
</head>
<style>
    .footer-distributed{

  margin-top: auto;
  background: black;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 40px;
  z-index: 999;
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


/*PHONE SIZE*/    
@media (min-width: 480px){
        .footer-distributed{

  margin-top: auto;
  font: bold 9px sans-serif;
  padding: 10px 10px;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 50%;
}


.footer-distributed h3{
  font: normal 24px sans-serif;

}

/* Footer links */

.footer-distributed .footer-links{
  margin-top: 10px;
}


.footer-distributed .footer-company-name{
  font-size: 9px;
  margin-top: 20px;
}


.footer-distributed .footer-links a:before {
   font-size: 10px;
}


/* Footer Right */

.footer-distributed .footer-right{
  width: 35%;
}

.footer-distributed .footer-company-about{
  line-height: 5px;
  font-size: 9px;
}

.footer-distributed .footer-company-about span{
  font-size: 9px;
  margin-bottom: 20px;
}

.footer-icons{
  margin-left: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 20px;
}

.footer-distributed .footer-icons a{
  width: 15px;
  height: 15px;
  font-size: 11px;
  line-height: 3px;
}

} 

</style>

<body>
  <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Bru<span>zone</span></h3>

        <p class="footer-links">
          <a href="{{ route('dashboard') }}" class="link">HOME</a>

          <a href="#" class="link">ABOUT US</a>

          <a href="{{ route('profilev') }}" class="link">MY ACCOUNT</a>

          <a href="" class="link">HELP</a>

        </p>

        <p class="footer-company-name">Bruzone © 2023</p>
      </div>


      <div class="footer-right">

        <p class="footer-company-about">
          <span></span>
          Life is short, so why not buy more.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="#"><i class="fas fa-envelope fa-lg"></i></a>
          <a href="#"><i class="fab fa-paypal fa-lg"></i></a>



        </div>

      </div>

    </footer>
    
    <script>
         // footer
 window.addEventListener("scroll", function () {
  var footer = document.querySelector(".footer-distributed");
  if (window.pageYOffset > 100) {
    footer.style.bottom = "10"; /* Show the footer */
  } else {
    footer.style.bottom = "-100px"; /* Hide the footer */
  }
});
    </script>
</body>
</html>
