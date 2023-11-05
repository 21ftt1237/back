@php
    $pageName = 'My Orders';
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

header .shopping img{
    width: 40px;
  }

  header .shopping{
    position: relative;

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

//table
        
table {
    width: 100%;
    border-collapse: collapse;
    margin: 10px 0;
}


th {
    background-color: #333; 
    color: #fff; 
    padding: 10px; 


tr:nth-child(even) {
    background-color: #f2f2f2; 
}


td {
    padding: 10px; 
}


tr:hover {
    background-color: #ddd; 
}
        
</style>
 
</head>
<body>
         
   
  <div class="main-container">
    <div class="wishlist-title">
    
      <h1>My Orders</h1>
       <div class="container">
        <h1>Your Order Lists</h1>

        @if ($orderLists->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderLists as $orderList)
                        <tr>
                            <td>{{ $orderList->created_at }}</td>
                            <td>${{ number_format($orderList->Total_price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No order lists found.</p>
        @endif
    

           
          </div>    
       </div>
    </div>
    
    

</body>
</html>
