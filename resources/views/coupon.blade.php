@php
    $pageName = 'Bruzone (Coupon)';
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
 
.container {
  width: 1200px;
  height: 600px;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 5px 5px 15px rgba(0.5, 0.5, 0.5, 0.5);
  margin: 20px auto;
  display: flex;
  flex-direction: column;
  margin-top: 80px;
  margin-bottom: 80px;
}
.top-section {
  flex: 1;
/*  border: 1px solid #000;*/
  padding: 10px;
  margin: 15px;
  height: 40%;
}
.bottom-section {
  height: 60%;
  margin: 15px;
  flex: 2;
  display: flex;
  justify-content: space-between;
  margin-bottom: 30px;
}
.box {
  width: 30%;
  height: 100%;
 border: 1px solid #ccc;
 background-color: #D3D3D3;
  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
    
    text-align: center;
}
  .butt {
            background-color: white; /* Green background color */
            color: black; /* White text color */
            padding: 10px 20px; /* Padding around text */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Cursor on hover */
            font-size: 16px; /* Font size */
            margin-top: 25px;
        }
        /* Style the button on hover */
        button:hover {
            background-color: yellow; /* Slightly darker green on hover */
        }
h3 {
    font-size: 45px;
  }
  h2 {
    font-size: 30px;
    color: #808080;
  }
   h4 {
    font-size: 18px;
    
  }


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

    .alert {
    padding: 15px;
    background-color: #4CAF50; /* Green background color */
    color: white; /* White text color */
    border-radius: 4px;
    text-align: center;
    margin-bottom: 20px; /* Add some spacing between messages */
}

/* Style for the message text */
.alert p {
    margin: 0; /* Remove default margin */
}
</style>
</head>
<body>

<div class="container">
  <div class="top-section">
  <h1>Loyalty Point Balance:{{ $loyaltyPoints }}</h1>
  <h1>Active Coupon:  ${{ $redeemCoupon }}</h1>
   @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
   @endif

   

  </div>       
  <div class="bottom-section">
    <div class="box">
      <h3>$2 OFF</h3>
      <h2>-200 Loyalty Points</h2>
      <h4>Click to Redeem $2 Off Delivery Fee</h4>
        <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="200">
            <button class="butt" type="submit">Redeem $2 off</button> 
        </form>
    </div>

    <div class="box">
      <h3>$3 OFF</h3>
      <h2>-300 Loyalty Points</h2>
      <h4>Click to Redeem $3 Off Delivery Fee</h4>
      <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="300">
            <button class="butt" type="submit">Redeem $3 off</button> 
        </form>
    </div>

    <div class="box">
      <h3>$5 OFF</h3>
      <h2>-500 Loyalty Points</h2>
      <h4>Click to Redeem $5 Off Delivery Fee</h4>
      <form method="post" action="{{ route('redeemCoupon') }}">
            @csrf
            <input type="hidden" name="coupon_amount" value="500">
            <button class="butt" type="submit">Redeem $5 off</button>
        </form>
    </div>

  </div>
</div>

</body>
</html>
@include('layouts.footer')
