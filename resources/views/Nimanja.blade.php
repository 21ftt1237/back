@php
    $pageName = 'Bruzone (Simanja)';
    $storehere = 'true';
    $storenumber = '7';
    $carts = 'true';
@endphp
@auth
    @php
    $loggedIn = true;
    @endphp
@else
    @php
    $loggedIn = false;
    @endphp
@endauth
@include('layouts.header')

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

.desc{
  height: 150px;
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

    #quantityup {
    width: 20px;
    height: 20px;
    margin-left: 90px;
    margin-right: 20px;
}

#quantitydown {
    width: 20px;
    height: 20px;
    margin-left: 20px;
}

.listCard li div {
    padding: 10px;
}

.item-quantity {
    justify-content: center;
    align-items: center !important;
    position: fixed;
    margin-left: 350px;
}

.item-price {
    position: fixed;
    margin-left: 180px;
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
    font-size: 14px;
    display: flex;
    align-items: center;
    margin-right: 0px;
    margin-left: 20px;
}

.nav-link, .nav-link-last {
    color: white;
    font-size: 16px;
    text-decoration: none;
    margin-right: 0px;
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



#input {
    height: 30px;
    width: 30px;
    border: none;
    padding: 5px;
}

.search ion-icon {
    width: 30px;
    height: 30px;
    background-color: white;
    color: black;
    cursor: pointer;
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

.search {
  display: flex;
  margin-left: 30px;
  margin-right: 45px;

}

.search #input{
  width: 900px;
  border-radius: 0px;
}


    


.info{
            height: 200px;
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
  margin: 2px 14px;
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
#input {
  height: 30px;
  width: 300px;
  text-decoration: none;
  border: 0px;
  padding: 5px;
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
.search a {
  display: flex;
}
header a ion-icon {
  position: relative;
  right: 3px;
}

.img-slider img {
  height: 720px;
   width: 1080px;
}
@keyframes slide {
  0% {
    left: 0px;
  }
  15% {
    left: 0px;
  }
  20% {
    left: -1080px;
  }
  32% {
    left: -1080px;
  }
  35% {
    left: -2160px;
  }
  47% {
    left: -2160px;
  }
  50% {
    left: -3240px;
  }
  63% {
    left: -3240px;
  }
  66% {
    left: -4320px;
  }
  79% {
    left: -4320px;
  }
  82% {
    left: -5400px;
  }
  100% {
    left: 0px;
  }
}
.img-slider {
  display: flex;
  float: left;
  margin-top: 0px;
  position: relative;
/*  width: 100%;*/
  width: 5400px;
  height: 2080px;
  animation-name: slide;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  transition-duration: 2s;
}

.heading1 {
  opacity: 0;
}




/*REVIEWS*/

  body{
font-family: 'Barlow Semi Condensed', sans-serif;
} 

.main-section{
float: right;
background:#D9D9D9;
width: 39.5%;
margin-bottom: 100px;
margin: 0 auto;
padding: 10px;
padding-left: 20px;
padding-right: 55px;
margin-top:65px;
margin-right: 5px;
box-shadow:0px 2px 7px 1px grey;
height: 1570px
}


.h2 h2{
  margin-top: 15px;
}

#review-form input.form-control {
  width: 20%; /* Adjust the width value as needed */
}


.star {
    width: 32px;
    height: 32px;
    transition: .6s all;

  }
  #rating {
    cursor: pointer;
    display: inline-block
  }
  #review-form .input-group-addon {
    min-width: 100px;
  }
  
.submit-btn{
  text-transform: uppercase;
  margin-top: 10px;
  margin-bottom: 40px;
  outline: 0;
  background: #F6E71D;
  width: 100%;
  border: 0;
  padding: 15px;
  font-weight: bold;
  color: black;
  font-size: 16px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.submit-btn:hover,.submit-btn:active,.submit-btn:focus {
  background: #C9BC0C;
}



  #review-form {
    min-width: 100px;
  }
  #review-form textarea {
    width: 100%;
  }
  #review-form input[type="text"]{
    width: 30%;
  }
  #review-form .form-group {
    margin-bottom: 15px;
  }
  #review-form .help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 20px;
  }
  
  blockquote {
    border-left: 5px solid yellow;
    padding-left: 20px;
  }
  
  blockquote .footer{
    display: block;
    font-size: 80%;
  }

  .stars-container {
    margin-bottom: 5px;
  }




.review {
  border-left:  solid #eee;
  padding-left: 20px;
  padding-right: 20px;
  margin-bottom: 20px;
  margin-left: 2px;
  width: ;


}

.review .stars-container {
  margin-bottom: 10px;
}

.review .stars-container svg {
  width: 18px;
  height: 18px;
  fill: #f39c12;
  margin-right: 2px;
}

.review .review-content {
  font-size: 16px;
  line-height: 1.4;
}

.review .review-content .reviewee {
  font-size: 14px;
  color: #888;
}

.para{
  margin-bottom: 20px;
  margin-right: 40px;
}

h2{
  margin-top: 50px;
  margin-bottom: 15px;
}

#rating{
  margin-bottom: 10px;
}

input {
  vertical-align: middle;
  border-radius: 5px;
  min-width: 65%;
  padding: 5px;
  border: none;
  margin-left: 10px;
}



textarea {
  border-radius: 5px;
  min-width: 50%;
  padding: 5px;
  border: none;
  margin-top: 15px;
}

.h2{
background:#D9D9D9;
width:100%;
height: 80vh;
padding-left: 20px;
overflow-y: auto;
box-shadow:0px 2px 7px 1px grey;
}

.h2 h2{
  padding-right: 4px;
}




.section1 {
  width: 1080px;
/*  width: 100%;*/

/*  width: 80%;*/
  height: 720px;
  overflow: hidden;
  float: left;

  justify-content: center;
  align-items: center;
  margin-top: 50px;
  margin-left: 45px;
  border-style: solid;
  border-color: black;
}


.section2, .container, .items{
  margin: 10px;
/*  margin-right:750px ;*/
  margin-left: 45px;
}

.section2{
  width: 1080px;
}
.section2 .container {
  display: flex;
/*  width: 1080px;*/
  width: 100%;
  height: max-content;
  flex-wrap: wrap;
  justify-content: center;
  margin: 10px auto;
}
.section2 .container .items {
  margin: 10px;
  width: 200px;
  height: 300px;
  background-color: white;
  border: 2.5px solid black;
  border-radius: 12px;
}
.section2 .container .items .name {
  text-align: center;
  background-color: yellow;
  height: 25px;
  padding-top: 4px;
  color: black;
  margin: 0;
}
.section2 .container .items .price {
  float: left;
  padding-left: 10px;
  display: block;
  width: 100%;
  color: rgb(255, 0, 0);
  font-weight: 650;
}
.section2 .container .items .info {
  padding-left: 10px;
  color: black;
}
.section2 .container .items .img img {
  width: 200px;
  height: 200px;
  margin: 0;
  padding: 0;
  border-radius: 12px;
  transition-duration: 0.8s;
}
.section2 .container .items .img {
  overflow: hidden;
  margin: 0;
}
.section2 .container .items:hover .img img {
  transform: scale(1.2);
  transition-duration: 0.8s;
  border-radius: 12px;
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




.items {
  overflow: hidden;
  position: relative;

}


.actions {
    display: flex;
    align-items: center;
    justify-content: space-between;

}

.heart-icon {
  padding-left: 20px;
    font-size: 20px;
    color: #D9D9D9;
    cursor: pointer;
    transition: color 0.3s;
}

.heart-icon:hover {
    color: #F6E71D;
}

.heart-icon.clicked {
    color: #F6E71D;
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



#input {
    height: 30px;
    width: 30px;
    border: none;
    padding: 5px;
}

.search ion-icon {
    width: 30px;
    height: 30px;
    background-color: white;
    color: black;
    cursor: pointer;
}


  .shopping{
    margin-right: 15px;
  }

  .wishlist{
    margin-right: 15px;
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

.search {
  display: flex;
  margin-left: 30px;
  margin-right: 45px;

}

.search #input{
  width: 700px;
  border-radius: 0px;
}







  .items {
    transform: scale(0.9);
  }


  .img-slider img {
    width: 200%;
    height: 130%;
/*    width: 100%;*/
  }
   

  @keyframes slide1 {

    0% {
      left: 15.9vw;
    }

    5% {
      left: 15.9vw;
    }


    12% {
      left: 16vw;
    }
    15% {
      left: 16vw;
    }
    
    20% {
      left: -47vw;
    }
    32% {
      left: -47vw;
    }
    38% {
      left: -108vw;
    }
    55% {
      left: -108vw;
    }
    65% {
      left: -165vw;
    }
    75% {
      left: -165vw;
    }
     85% {
      left: -245vw;
    }
    96% {
      left: -245vw;
    }
    100% {
      left: -15.9vw;
    }
  
    100% {
      left: -15.9vw;
    }
  

  }



  .img-slider {
    display: flex;
    float: left;
    position: relative;
    width: 200%;
    height: 80%;
    animation-name: slide1;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    transition-duration: 2s;
  }
  .section1 {
    width: 70%;
    overflow: hidden;
    justify-content: center;
    align-items: center;
    margin-left: 50px;
    margin-top: 20px;
  }

  .heading1 {
    opacity: 1;
    position: relative;
    bottom: 8px;
  }

  .search a {
    display: flex;
    flex-wrap: nowrap;

  }

  .heading1 .ham {
    background-color: black;
    color: white;
  }
  #input {
    width: 200px;
    flex-shrink: 2;
  }


.main-section{
float: right;
background:#D9D9D9;
width:24%;
margin: 0 auto;
padding: 10px;
padding-left: 20px;
margin-top:30px;
margin-right: 15px;
box-shadow:0px 2px 7px 1px grey;
height: 1600px
}

.h2 h2{
  margin-top: 10px;
}

.h2{
background:#D9D9D9;
margin-top: 20px;
width:90%;
height: 102vh;

overflow-y: auto;
box-shadow:0px 2px 7px 1px grey;
}

.submit-btn{
  width: 90%;
}

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

  .main-section{
float: right;
background:#D9D9D9;
width:10%;
margin: 0 auto;
padding: 10px;
padding-left: 20px;
margin-top:65px;
margin-right: 5px;
box-shadow:0px 2px 7px 1px grey;
height: 1600px
}






</style>



<body>
     


 <div class="main-section">
<div class="container">
  <div class="para">
<p>
  We strive to provide the best possible service for our clients. Please leave a review to let us know how we are doing and to share your experience with others.
</p>
</div>
<form id="review-form" action="{{ route('submit.review', ['store_id' => $storenumber]) }}) }}" method="post">
     @csrf
  <h2>Write Your Review</h2>
  <div id="rating">
    <svg class="star" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #808080;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
  </div>
  <span id="starsInfo" class="help-block">
    Click on a star to change your rating 1 - 5, where 5 = great! and 1 = really bad
  </span>
  <div class="form-group">
    <label class="control-label" for="review">Your Review:</label>
    <textarea class="form-control" rows="10" placeholder=" Write your review...." name="review" id="review"></textarea>
    <span id="reviewInfo" class="help-block pull-right">
      <span id="remaining">999</span> Characters remaining
    </span>
  </div>
  <button href="#" id="submit" class="submit-btn" type="submit">Submit</button>
  <input id="submitForm" type="submit" style="display:none;">
  <span id="submitInfo" class="help-block">
  </span>
</form>
<div class="h2">
<h2>Read what others have said about us:</h2>
<div id="review-container">
</div>
<script type="text/javascript">
  function starsReducer(state, action) {
    switch (action.type) {
      case 'HOVER_STAR': {
        return {
          starsHover: action.value,
          starsSet: state.starsSet
        };
      }
      case 'CLICK_STAR': {
        return {
          starsHover: state.starsHover,
          starsSet: action.value
        };
      }
      break;
      default:
        return state;
    }
  }
  var StarContainer = document.getElementById('rating');
  var StarComponents = StarContainer.children;
  var state = {
    starsHover: 0,
    starsSet: 4
  };
  function render(value) {
    for (var i = 0; i < StarComponents.length; i++) {
      StarComponents[i].style.fill = i < value ? '#f39c12' : '#808080';
    }
  }
  for (var i = 0; i < StarComponents.length; i++) {
    StarComponents[i].addEventListener('mouseenter', function () {
      state = starsReducer(state, {
        type: 'HOVER_STAR',
        value: this.id
      });
      render(state.starsHover);
    });
    StarComponents[i].addEventListener('click', function () {
      state = starsReducer(state, {
        type: 'CLICK_STAR',
        value: this.id
      });
      render(state.starsHover);
    });
  }
  StarContainer.addEventListener('mouseleave', function () {
    render(state.starsSet);
  });
  var review = document.getElementById('review');
  var remaining = document.getElementById('remaining');
  review.addEventListener('input', function (e) {
    review.value = e.target.value.slice(0, 999);
    remaining.innerHTML = 999 - e.target.value.length;
  });
  var form = document.getElementById('review-form');
  var store_id = '{{ $storenumber }}';
 document.getElementById('submit').addEventListener('click', function (e) {
    e.preventDefault();
    // Get the form data
    let formData = new FormData(form);
    // Add the CSRF token
    formData.append('_token', '{{ csrf_token() }}');
    // Add the rating field to the form data
    formData.append('rating', state.starsSet);
    // Add the store_id field to the form data
    formData.append('store_id', store_id);
    // Make an AJAX request to submit the form data
    fetch('/submit-review', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);

    })
    .catch(error => {
        console.error('Error:', error);
        // Handle errors if any
    });
   
});

window.addEventListener('load', function () {
  const storeId = 7; 

  fetch(`/get-reviews/${storeId}`)
    .then(response => response.json())
    .then(data => {
      console.log(data);

      if (data.debug) {
        console.log(data.debug);
      }
      // Display the fetched reviews
      displayReviews(data.reviews);
    })
    .catch(error => {
      console.error('Error:', error);
      // Handle errors if any
    });
});

    
   function displayReviews(reviews, storeNumber) {
  // Get the review container element
  var reviewContainer = document.getElementById('review-container');
  // Clear existing reviews in the container
  reviewContainer.innerHTML = '';
  // Filter reviews for the specified store
  var filteredReviews = reviews.filter(function(review) {
    return review.storeNumber === storeNumber;
  });
  // Loop through each review in the filtered array
  for (var i = 0; i < filteredReviews.length; i++) {
    // Create a new div element for each review
    var newReview = document.createElement('div');
    newReview.className = 'review';
    // Create the star rating container for the current review
    var starContainer = ReviewStarContainer(filteredReviews[i].rating);
    // Create the content container for the current review
    var contentContainer = ReviewContentContainer(filteredReviews[i].user.name, filteredReviews[i].created_at, filteredReviews[i].review);
    // Append the star rating and content containers to the new review div
    newReview.appendChild(starContainer);
    newReview.appendChild(contentContainer);
    // Append the new review div to the review container
    reviewContainer.appendChild(newReview);
  }
}
    
  var reviews = {
    reviews: [

      
    ]
  };
  function ReviewStarContainer(stars) {
    var div = document.createElement('div');
    div.className = "stars-container";
    for (var i = 0; i < 5; i++) {
      var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      svg.setAttribute('viewBox', "0 12.705 512 486.59");
      svg.setAttribute('x', "0px");
      svg.setAttribute('y', "0px");
      svg.setAttribute('xml:space', "preserve");
      svg.setAttribute('class', "star");
      var svgNS = svg.namespaceURI;
      var star = document.createElementNS(svgNS, 'polygon');
      star.setAttribute('points', '256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566');
      star.setAttribute('fill', i < stars ? '#f39c12' : '#808080');
      svg.appendChild(star);
      div.appendChild(svg);
    }
    return div;
  }
 function formatDateTime(dateTimeString) {
  const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
  return new Date(dateTimeString).toLocaleDateString('en-US', options);
}
function ReviewContentContainer(name, createdAt, review) {
  var reviewee = document.createElement('div');
  reviewee.className = "reviewee footer";
  reviewee.innerHTML = '- ' + name + ', ' + formatDateTime(createdAt); // Format the creation time
  var comment = document.createElement('p');
  comment.innerHTML = review;
  var div = document.createElement('div');
  div.className = "review-content";
  div.appendChild(comment);
  div.appendChild(reviewee);
  return div;
}

  function ReviewsContainer(review) {
    var div = document.createElement('blockquote');
    div.className = "review";
    div.appendChild(ReviewStarContainer(review.stars));
    div.appendChild(ReviewContentContainer(review.review));
    return div;
  }
  for (var i = 0; i < reviews.reviews.length; i++) {
    document.getElementById('review-container').appendChild(ReviewsContainer(reviews.reviews[i]));
  }
  function addReview(review) {
    var reviewContainer = document.getElementById('review-container');
    var newReview = document.createElement('div');
    newReview.className = 'review';
    var starContainer = ReviewStarContainer(review.stars);
    var contentContainer = ReviewContentContainer(review.review);
    newReview.appendChild(starContainer);
    newReview.appendChild(contentContainer);
    reviewContainer.appendChild(newReview);
  }
</script>
</div>
</div>



</div>
   
  </header>
  <section>
    <div class="section">
      <div class="section1">
        <div class="img-slider">
          <img src="image/thumb.jpg" alt="" class="img">
          <img src="image/catf.jpg" alt="" class="img">
          <img src="image/fishf.jpg" alt="" class="img">
          <img src="image/turtlef.jpg" alt="" class="img">
          <img src="image/birdf.png" alt="" class="img">
        </div>

      </div>
      <div class="section2">
        <div class="container">

         <!--  <div class="items">
            <div class="img img1"><img src="asusLaptop.jpg" alt=""></div>
            <div class="name">Laptop</div>
            <div class="price">$2,398.00</div>
            <div class="info">Lorem ipsum dolor sit amet consectetur.</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="acerNitroMonitor.jpg" alt=""></div>
            <div class="name">Monitor</div>
            <div class="price">$168.00</div>
            <div class="info">Lorem ipsum dolor sit.</div>
          </div>
          <div class="items">
            <div class="img img3"><img src="razerMouse.jpg" alt=""></div>
            <div class="name">Mouse</div>
            <div class="price">$108.00</div>
            <div class="info">Lorem ipsum dolor sit amet.</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="canonPrinter.jpg" alt=""></div>
            <div class="name">Printer</div>
            <div class="price">$146.00</div>
            <div class="info">Lorem ipsum dolor sit.</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="havitSpeaker.jpg" alt=""></div>
            <div class="name">Speaker</div>
            <div class="price">$29.00</div>
            <div class="info">Lorem ipsum dolor sit.</div>
          </div> -->
          
             <div class="containerPage">
                    <div class="list">           
                        @foreach ($products as $product)
                         @if ($product->store_id == 6)
                            <div class="item">
                                <div class="img">
                                    <img src="image/{{ $product->image_link }}" alt="{{ $product->name }}">
                                </div>
                                <div class="name">{{ $product->name }}</div>
                                <div class="price">$ {{ $product->price }}</div>
                                <div class="info">{{ $product->description }}</div>
                                @if($loggedIn)
                                 <form action="{{ route('cart.add', ['product' => $product]) }}" method="POST">
                                    @csrf
                                    <button>Add To Cart</button>
                                 </form>
                                @else 
                                 <form action="{{ route('BruzoneLogin') }}">
                                    @csrf
                                    <button>Add To Cart</button>
                                 </form>
                                @endif
                                @if($loggedIn)
                                    <form action="{{ route('wishlist.add', ['product' => $product]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="heart-icon">❤</button>
                                    </form> 
                                    @else 
                                     <form action="{{ route('BruzoneLogin') }}">
                                    @csrf
                                    <button type="submit" class="heart-icon">❤</button>
                                 </form>
                                 @endif
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
<!--     <div class="card">
        <h1>Your Shopping Cart</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <a id="checkoutLink" href="{{ route('checkout') }}">
            <div class="total">BND 0</div></a>
            <div class="closeShopping">Close</div>
        </div>
    </div> -->

<!--     <script src="{{ asset('js/app.js') }}">
    </script> -->
         

        </div>

      </div>
    </div>




  </section>
  
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="./ecommerce.js"></script>
<script>
//        let openShopping = document.querySelector('.shopping');
// let closeShopping = document.querySelector('.closeShopping');

//     openShopping.addEventListener('click', ()=>{
//     document.body.classList.add("active");
// })
// closeShopping.addEventListener('click', ()=>{
//     document.body.classList.remove("active");
// })
    
  function confirmAction() {
  var confirmation = confirm("You have changed Stores, confirm to clear cart items?");
  if (confirmation) {
    
    localStorage.setItem('storeId', '5');
    localStorage.removeItem('cartItems');
  } else {
    
    window.location.href = '{{ route('dashboard') }}';
  }
}

localStorage.setItem('delivery', '2');
localStorage.setItem('storename', 'Nimanja (Bandar)');

var storeId = 5;
var previousStore = localStorage.getItem('storeId');
var parseVal = parseInt(previousStore);

if(localStorage.getItem("cartItems") !== null){
if (storeId !== parseVal) {
  confirmAction();
}}
</script>

</body>

</html>
@include('layouts.footer')
