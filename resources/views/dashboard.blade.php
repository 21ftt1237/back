@php
    $pageName = 'Bruzone';
@endphp
@include('layouts.header')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./ecommerce.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">




  <title>Bruzone</title>
</head>

<style type="text/css">

  @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

  body{
    overflow-x: hidden;
  }
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/*CONTENT*/
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto:wght@300;400;500;900&display=swap");



main {
  position: relative;
  width: calc(min(110rem));
  margin: 0 auto;
  padding-block: min(20vh, 3rem);
  padding-bottom: 200px; /* Adjust the value as needed */

}

.bg {
  position: fixed;
  top: -4rem;
  left: -12rem;
  z-index: -1;
  opacity: 0;
}

.bg2 {
  position: fixed;
  bottom: -2rem;
  right: -3rem;
  z-index: -1;
  width: 9.375rem;
  opacity: 0;
}



main > div span {
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: 1rem;
  color: #717171;
  margin-left: 3px;
}

main > div h1 {
  text-transform: capitalize;
  letter-spacing: 0.8px;
  font-family: "Roboto", sans-serif;
  font-weight: 900;
  font-size: clamp(3.4375rem, 3.25rem + 0.75vw, 4rem);

}

h1{
  padding-bottom: 26px;
}

.head-title {
  position: relative;
  margin-top: 10px;
  width: 800px;
  margin-left: 0px;
  margin-bottom: 25px;
}
.head-title::before,
.head-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 4px;
  border-radius: 2px;
}
.head-title::before {
  width: 100%;
  background: #F6E71D;
}
.head-title::after {
  width: 200px;
  background: black;
}




main > div p {
  line-height: 1.6;
}

main a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  color: #717171;
  font-weight: 500;
  background: #fff;
  border-radius: 3.125rem;
  transition: 0.3s ease-in-out;
}

main > div > a {
  border: 2px solid #c2c2c2;
  margin-top: 2.188rem;
  padding: 0.625rem 1.875rem;
}

main > div > a:hover {
  border: 0.125rem solid #005baa;
  color: #005ba
}

.swiper {
  position: absolute;
  right: 0%;
  top: 15%;
  width: 50%;
  border-style: ridge;
  border-color: white;
  box-shadow: 0 0 5px black;
}

.swiper-pagination-bullet,
.swiper-pagination-bullet-active {
  background: #fff;
}

.swiper-pagination {
  bottom: 1.25rem !important;
}

.swiper-slide {
  width: 18.75rem;
  height: 28.125rem;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: self-start;
}

.swiper-slide h2 {
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.4;
  margin-bottom: 0.625rem;
  padding: 0 0 0 1.563rem;
  text-transform: uppercase;
}

.swiper-slide p {
  color: #dadada;
  font-family: "Roboto", sans-serif;
  font-weight: 300;
  text-shadow: 2px black;
  padding: 0 1.563rem;
  line-height: 1.6;
  font-size: 0.75rem;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.swiper-slide a {
  margin: 1.25rem 1.563rem 3.438rem 1.563rem;
  padding: 0.438em 1.875rem;
  font-size: 0.9rem;
}

.swiper-slide a:hover {
  color: #005baa;
}

.swiper-slide div {
  display: none;
  opacity: 0;
  padding-bottom: 0.625rem;
}

.swiper-slide-active div {
  display: block;
  opacity: 1;
}

.swiper-slide--one {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
    url("image/netcom.jpg")
      no-repeat 50% 60% / cover;
}

.swiper-slide--two {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
    url("image/gamecentral.png")
      no-repeat 50% 50% / cover;
}

.swiper-slide--three {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
    url("image/guardian.jpg")
      no-repeat 50% 50% / cover;
}

.swiper-slide--four {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
    url("image/88avenue.png")
      no-repeat 50% 50% / cover;
}

.swiper-slide--five {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400),
    url("image/.png")
      no-repeat 50% 50% / cover;
}

.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right {
  background-image: none;
}


/*SEARCH BAR*/


 button[type="submit"] {
  background: black;
  border: 1px solid black;
  color: #fff;
  height: 50px;
  padding: 0 30px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

 button[type="submit"]:hover {
  background: #F6E71D;
  border: 1px solid #F6E71D;
  color: black;
}

.flex-form {
  margin-top: 30px;
  display: -webkit-box;
  display: flex;
  z-index: 10;
  position: relative;
  width: 745px;
  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.3);
}

.flex-form > * {
  border: 0;
  padding: 0 0 0 10px;
  background: #fff;
  line-height: 50px;
  font-size: 1rem;
  border-radius: 0;
  outline: 0;
  -webkit-appearance: none;
}

input[type="search"] {
  flex-basis: 650px;
}


#goToSearch{
    width: 750px;
}

/*POPULAR SECTION*/
/* -------- title style ------- */
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");

h2 {
  margin-bottom: 50px;
  margin-right: 200px;
  padding-bottom: 26px;
  font-size: 40px;
  line-height: 28px;
  font-weight: 700;
  position: relative;
  text-transform: capitalize;
}

button {
  outline: none !important;
}

.line-title {
  position: relative;
  width: 600px;
  margin-left: 18px;
  margin-bottom: 25px;
}
.line-title::before,
.line-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 4px;
  border-radius: 2px;
}
.line-title::before {
  width: 100%;
  background: #F6E71D;
}
.line-title::after {
  width: 32px;
  background: black;
}

/******* Middle section CSS Start ******/
/* -------- Landing page ------- */
.popular-section {
  padding: 60px 50px;

}
.popular-section .owl-stage {
  margin: 15px 0;
  display: flex;
  display: -webkit-flex;
}
.popular-section .item {
  margin: 0 15px 60px;
  width: 320px;
  height: 400px;
  display: flex;
  display: -webkit-flex;
  align-items: flex-end;
  -webkit-align-items: flex-end;
  background: #343434 no-repeat center center / cover;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
  cursor: pointer;
}
.popular-section .item.active {
  width: 500px;
  box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
}
.popular-section .item:after {
  content: "";
  display: block;
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
}
.popular-section .item-desc {
  padding: 0 24px 12px;
  color: #fff;
  position: relative;
  z-index: 1;
  overflow: hidden;
  transform: translateY(calc(100% - 54px));
  -webkit-transform: translateY(calc(100% - 54px));
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
.popular-section .item.active .item-desc {
  transform: none;
  -webkit-transform: none;
}
.popular-section .item-desc p {
  opacity: 0;
  -webkit-transform: translateY(32px);
  transform: translateY(32px);
  transition: all 0.4s ease-in-out 0.2s;
  -webkit-transition: all 0.4s ease-in-out 0.2s;
}
.popular-section .item.active .item-desc p {
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
.popular-section .owl-theme.custom-carousel .owl-dots {
  margin-top: -20px;
  position: relative;
  z-index: 5;
}

.item .item-button {
  position: relative;
  top: 50%;
  left: 90%;
  margin-top: 30px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 16px;
  padding: 5px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.item .item-button:hover {
  background-color: black;
  color: white;
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









@media screen and (max-width: 1536px) {

/*NAVBAR*/

header{
  height: 85px;
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
    margin-right: 10px;
    margin-left: 20px;
}

.nav-link, .nav-link-last {
    color: white;
    font-size: 12px;
    text-decoration: none;
    margin-right: 10px;
    margin-left:10px ;
    font-weight: 600;
}



.search {
  display: flex;
  margin-left: 30px;
  margin-right: 45px;

}

.search #input{
  width: 700px;
  border-radius: 0px;
}



/*SWIPER*/
.swiper {
  position: absolute;
  right: 15%;
  top: 15%;
  width: 36%;
  height: 70%;
  border-style: ridge;
  border-color: white;
  box-shadow: 0 0 5px black;
}


.swiper-slide {
  width: 38rem;
  height: 28.125rem;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: self-start;
}







@media screen and (max-width: 500px) {
  .heading ul li {
    display: none;
  }
  .heading1 {
    opacity: 1;

    bottom: 8px;
  }

  header {
    height: 250px;
    flex-wrap: wrap;
    display: flex;
    flex-direction: column;
  }
  #input {
    width: 150px;
  }


  .search a {
    margin-right: 10px;
  }







</style>


<body>
<main>
  <br>
  <br>
  <div>
    <span>discover</span>
    <br>
    <h1 class="head-title">FIND YOUR STORE ONLINE AT ONE CLICK AWAY</h1>
    @auth
<!-- Content for authenticated users -->
<p>Welcome, {{ auth()->user()->name }}!</p>
<!-- Add your other content here -->
@else
<!-- Content for guest users -->
<p>No decision should be made in an empty shopping cart because if you can't stop thinking about it...Buy it!</p>
<!-- Add your other content here -->
@endauth
    <div class="cover">
    <form  class="flex-form" action="{{ route('searchFilter') }}" method="get" onsubmit="return redirectToSearchPage()">

      <label for="from">
        <i class="ion-location"></i>
      </label>

        <a href="{{ route('searchFilter') }}" id="goToSearch">
<!--       <input type="text" placeholder="What are you looking for?" onclick="click()"> -->
            What are you looking for?
        </a>
      <a href="{{ route('searchFilter') }}">
      <button type="submit" value="Search">SEARCH</button>
      </a>

    </form>
  </div>
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide--one">
        <div>
          <h2>Comnet</h2>
          <p>Comnet is one of the largest computer retail shop in Brunei, offering after sales service and repairs, professional resources and expertise in technology solutions, with five retail outlets and one online outlet at strategic locations nationwide</p>
          <a href="{{ route('netcom.products') }}" target="_blank">explore</a>
        </div>
      </div>
      <div class="swiper-slide swiper-slide--two">
        <div>
          <h2>Game Central</h2>
          <p>
            At Game Central, we live and breathe games. We're not just a store; we're a community of gamers dedicated to providing you with the best gaming experience possible.
          </p>
          <a href="{{ route('gamecentral') }}" target="_blank">explore</a>
        </div>
      </div>

      <div class="swiper-slide swiper-slide--three">

        <div>
          <h2>Defender</h2>
          <p>
            Defender has been around in Brunei for three decades providing high-quality products at affordable prices and became the leading health, beauty and personal care retailer. The company's 31 years of experience in the Brunei market is a testament to the company's ability to adapt to local needs.
          </p>
          <a href="{{ route('Guardian') }}" target="_blank">explore</a>
        </div>
      </div>

      <div class="swiper-slide swiper-slide--four">

        <div>
          <h2>Route 66th</h2>
          <p>
            YOUR ONE-STOP T-SHIRT SHOP, we have a rare kind, vintage kind, band and even graphic tees, we have all designs you need. Find us at Route 66th in kiarong.
          </p>
          <a href="{{ route('avenue') }}" target="_blank">explore</a>
        </div>
      </div>

      <div class="swiper-slide swiper-slide--five">

        <div>
          <h2>Simanja</h2>
          <p>
            Simanja is Brunei's largest online pet store featuring over 3,000 products and 47 international brands. We provide local pet lovers with convenience, better prices and a variety of quality pet products on an electronic platform.
          </p>
          <a href="{{ route('Nimanja') }}" target="_blank">explore</a>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <img src="https://cdn.pixabay.com/photo/2021/11/04/19/39/jellyfish-6769173_960_720.png" alt="" class="bg">
  <img src="https://cdn.pixabay.com/photo/2012/04/13/13/57/scallop-32506_960_720.png" alt="" class="bg2">
</main>

<section class="popular-section">
  <h2 class="line-title">POPULAR STORE TODAY</h2>
  <div class="owl-carousel custom-carousel owl-theme">

    <div class="item active" style="background-image: url(image/netcom.jpg);" data-url="{{ route('netcom.products') }}">
      <div class="item-desc">
        <h3>Comnet</h3>
        <p>Comnet is one of the largest computer retail shop in Brunei, offering after sales service and repairs, professional resources and expertise in technology solutions, with five retail outlets and one online outlet at strategic locations nationwide</p>
        <a href="{{ route('netcom.products') }}">
        <button class="item-button">view</button>
        </a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/gclogo.png);" data-url="gamecentral.blade.php">
      <div class="item-desc">
        <h3>Game Central</h3>
        <p>At Game Central, we live and breathe games. We're not just a store; we're a community of gamers dedicated to providing you with the best gaming experience possible.</p>
              <a href="{{ route('gamecentral') }}">
        <button class="item-button">view</button>
        </a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/88avenue.jpg);" data-url="{{ route('avenue') }}">
      <div class="item-desc">
        <h3>Route 66th</h3>
        <p>YOUR ONE-STOP T-SHIRT SHOP, we have a rare kind, vintage kind, band and even graphic tees, we have all designs you need. Find us at Route 66th in kiarong.</p>
              <a href="{{ route('avenue') }}">
        <button class="item-button">view</button>
        </a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/guardianlogo.jpg);" data-url="{{ route('Guardian') }}">
      <div class="item-desc">
        <h3>Defender</h3>
        <p>Defender has been around in Brunei for three decades providing high-quality products at affordable prices and became the leading health, beauty and personal care retailer. The company's 31 years of experience in the Brunei market is a testament to the company's ability to adapt to local needs.</p>
             <a href="{{ route('Guardian') }}">
        <button class="item-button">view</button>
        </a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/nimanjalogo.png);" data-url="{{ route('Nimanja') }}">
      <div class="item-desc">
        <h3>Simanja</h3>
        <p>Simanja is Brunei's largest online pet store featuring over 3,000 products and 47 international brands. We provide local pet lovers with convenience, better prices and a variety of quality pet products on an electronic platform.</p>
              <a href="{{ route('Nimanja') }}">
        <button class="item-button">view</button>
        </a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/digital.jpg);" data-url="{{ route('digital') }}">
      <div class="item-desc">
        <h3>Digital universe</h3>
        <p>Digital universe is mainly a phone shop. As their reputation arises, their shop grows as now one of the biggest company in Brunei. Alternatively, other than phones that they sell, they also have laptops, watches, gaming accessories and even other electronic devices and accessories.</p>
              <a href="{{ route('digital') }}">
        <button class="item-button">view</button>
        </a>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="popular-section">
  <h2 class="line-title">STORE CATEGORIES</h2>
  <div class="owl-carousel custom-carousel owl-theme">
    <div class="item active" style="background-image: url(image/clothing.jpg);">
      <div class="item-desc">
        <h3>Clothing</h3>
        <p>Clothing comprises garments worn on the body for protection, comfort, and style, including items like shirts, pants, dresses, and more. It serves both functional and expressive purposes, reflecting individual tastes and cultural identity.</p>
        <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button>
      </a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/electronics.jpg);">
      <div class="item-desc">
        <h3>Electronics</h3>
        <p>Electronics encompass a wide range of devices and systems that utilize electrical circuits and signals to perform various functions. This category includes items such as smartphones, laptops, televisions, and other gadgets that enhance communication, entertainment, and productivity.</p>
        <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/health.jpg);">
      <div class="item-desc">
        <h3>Health, personal care & beauty</h3>
        <p>Discover products that enhance well-being and radiance. From skincare to fitness equipment, find everything you need to feel and look your best.</p>
                    <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/accessories.png);">
      <div class="item-desc">
        <h3>Apparel & accessories</h3>
        <p>Elevate your style with a curated selection of clothing and accessories. From trendy outfits to essential basics, express your unique fashion sense.</p>
                    <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/petcare.jpg);">
      <div class="item-desc">
        <h3>Petcare</h3>
        <p>Pamper your furry friends with the best in pet care. From nutritious food to comfy beds, ensure your pets are happy, healthy, and loved.</p>
                    <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
    </div>
    <div class="item" style="background-image: url(image/furniture.jpg);">
      <div class="item-desc">
        <h3>Home furniture and decor</h3>
        <p>Transform your living space with our stylish furniture and decor options. Create a cozy and inviting atmosphere that reflects your personality.</p>
                    <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
       </div>
          <div class="item" style="background-image: url(image/office.jpg);">
      <div class="item-desc">
        <h3>Office equipment</h3>
        <p>Boost productivity and efficiency with top-notch office equipment. From ergonomic chairs to cutting-edge technology, equip your workspace for success.</p>
                    <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
       </div>
          <div class="item" style="background-image: url(image/others.jpg);">
      <div class="item-desc">
        <h3>Others</h3>
        <p>This category will show you others that are not listed here like toys, books, groceries etc.</p>
                    <a href="{{ route('searchFilter') }}">
        <button class="item-button">view</button></a>
      </div>
    </div>
  </div>
  </div>
</section>
<br>
<br>
<br>
<br>


  
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="./ecommerce.js"></script>


  <script type="text/javascript">

 function handleSearch() {

    // const inputValue = document.getElementById('input').value;



    window.location.href = `{{ route('searchFilter') }}`;
  }


  document.querySelector('.search ion-icon').addEventListener('click', handleSearch);


 // footer
 window.addEventListener("scroll", function () {
  var footer = document.querySelector(".footer-distributed");
  if (window.pageYOffset > 100) {
    footer.style.bottom = "10"; /* Show the footer */
  } else {
    footer.style.bottom = "-100px"; /* Hide the footer */
  }
});
      function click(){
      window.location.href = `{{ route('searchFilter') }}`;
      }


  </script>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">

      // CAROUSEL

    document.addEventListener("DOMContentLoaded", function ()  {
        var swiper = new Swiper(".swiper", {
            grabCursor: true,
            centeredSlides: true,
            effect: "slide",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true
            },
            autoplay: {
                delay: 3000,
                stopOnLastSlide: false,
                disableOnInteraction: false
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },

        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $(".custom-carousel").owlCarousel({
      autoWidth: true,
      loop: true,
      slidesPerView: 3
    });


    $(".custom-carousel .item").click(function () {
      $(".custom-carousel .item").not($(this)).removeClass("active");
      $(this).toggleClass("active");
    });
  });
</script>
<script type="text/javascript">
    let latitude, longitude;
    getLocation()
    function getLocation() {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(showLocation, showError);
        } else {
            alert("Geolocation is not supported by your browser.");
        }
    }

    function showLocation(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;

        // Store latitude and longitude in local storage
        localStorage.setItem('latitude', latitude);
        localStorage.setItem('longitude', longitude);

        const mapElement = document.getElementById("maplocation");
        mapElement.innerHTML = `<p>Latitude: ${latitude}</p><p>Longitude: ${longitude}</p>`;

        initMap();
    }

    function showError(error) {
        // Handle error if geolocation is not available or if the user denies the request.
        alert("Error getting your location: " + error.message);
    }

</script>
</body>

</html>
@include('layouts.footer')
