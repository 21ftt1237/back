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












/*PRODUCTS*/

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
  <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Bru<span>zone</span></h3>
        <p class="footer-links">
          <a href=" " class="link">HOME</a>          
          <a href=" " class="link">ABOUT US</a>        
          <a href=" " class="link">MY ACCOUNT</a>          
          <a href=" " class="link">HELP</a>         
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
