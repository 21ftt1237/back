
@php
    $carts = 'true';
@endphp
@include('layouts.header')

<!DOCTYPE html>
<html>
<head>
    <title>BruZone Order History</title>
    <style>
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

  header .shopping span{
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
    background-image: linear-gradient(to bottom, #ffffff, #fff7ff, #ffeef1, #ffe8d6, #ffeabe, #ffecaa, #fff097, #fdf483, #fbf16f, #faee59, #f8ea41, #f6e71d);
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

.main-container {
            margin-top: 30px;
            padding-left: 350px;
            height: 150vh; /* Set a fixed height for scrollable container */
            box-sizing: border-box;
          
        } 

.prodimg {
width: 100px;
height: 100px;
}

 table {
    width: 80%;
    margin: 10px 0;
    border-collapse: collapse;
}


th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

#head{
margin-top:aut0;
margin-left:30%;
    
}

//tracking bar

    .main{
    display: flex;
    justify-content: center;
    align-items: center;    
    font-family: pop;
    flex-direction: column;
    }
ul{
    display: flex;
    margin-top: 80px;
}
ul li{
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
}
ul li .icon{
    font-size: 35px;
    color: #ff4732;
    margin: 0 77.5px;
}
ul li .text{
    font-size: 14px;
    font-weight: 600;
    color: #ff4732;
}
/* Progress Div Css  */
ul li .progress{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: rgba(68, 68, 68, 0.781);
    margin: 14px 0;
    display: grid;
    place-items: center;
    color: #fff;
    position: relative;
    cursor: pointer;
}
.progress::after{
    content: " ";
    position: absolute;
    width: 125px;
    height: 5px;
    background-color: rgba(68, 68, 68, 0.781);
    right: 30px;
}
.one::after{
    width: 0;
    height: 0;
}
ul li .progress .uil{
    display: none;
}
ul li .progress p{
    font-size: 13px;
}
/* Active Css  */
ul li .active{
    background-color: #ff4732;
    display: grid;
    place-items: center;
}
li .active::after{
    background-color: #ff4732;
}
ul li .active p{
    display: none;
}
ul li .active .uil{
    font-size: 20px;
    display: flex;
}
        
</style>
 
</head>
<body>
         
   
  <div class="main-container">
   @if ($orderDetails->count() > 0)
    <h2 id="head">Order Details</h2>

                    <div class="main">
        <ul>
            <li>
                <i class="icon uil uil-capture"></i>
                <div class="progress one">
                    <p>1</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Placed</p>
            </li>
            <li>
                <i class="icon uil uil-clipboard-notes"></i>
                <div class="progress two">
                    <p>2</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Picked Up</p>
            </li>
            <li>
                <i class="icon uil uil-credit-card"></i>
                <div class="progress three">
                    <p>3</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Delivered</p>
            </li>
            <li>
                <i class="icon uil uil-exchange"></i>
                <div class="progress four">
                    <p>4</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Completed</p>
            </li>
        </ul>
    </div>
      
    <table class="table">
        <thead>
            <tr>              
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderDetails as $orderDetail)
                <tr>
                    <td><img src="/image/{{ $orderDetail->product->image_link }}" alt="{{ $orderDetail->product->name }}" class="prodimg"></td>
                    <td>{{ $orderDetail->product->name }}</td>                    
                    <td>${{ $orderDetail->product->price }}</td>
                    <td>{{ $orderDetail->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No order details found.</p>
@endif
    </div>

<script>
const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");

  
</script>
    

</body>
</html>
