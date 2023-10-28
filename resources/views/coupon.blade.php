@php
    $pageName = 'Bruzone';
@endphp
@include('layouts.header')
<!DOCTYPE html>
<html>
<head>
<style>
/** {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}*/


  /*FOOTER*/


.footer-distributed{
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
</style>
</head>
<body>

<div class="container">
  <div class="top-section">
  <h1>Loyalty Point Balance:{{ $loyaltyPoints }}</h1>
  <h1>Active Coupon:  ${{ $redeemCoupon }}</h1>
   

  </div>       
  <div class="bottom-section">
    <div class="box">
      <h3>$2 OFF</h3>
      <h2>-200 Loyalty Points</h2>
      <h4>Click to Redeem $2 Off Delivery Fee</h4>
        <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="200">
            <button type="submit">Redeem $2 off</button> 
        </form>
    </div>

    <div class="box">
      <h3>$3 OFF</h3>
      <h2>-300 Loyalty Points</h2>
      <h4>Click to Redeem $3 Off Delivery Fee</h4>
      <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="300">
            <button type="submit">Redeem $3 off</button> 
        </form>
    </div>

    <div class="box">
      <h3>$5 OFF</h3>
      <h2>-500 Loyalty Points</h2>
      <h4>Click to Redeem $5 Off Delivery Fee</h4>
      <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="500">
            <button type="submit">Redeem $5 off</button>
        </form>
    </div>

  </div>
</div>
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
          <a href="#"><i class="fab fa-paypal fa-2x"></i></a>



        </div>

      </div>

    </footer>
</body>
</html>
