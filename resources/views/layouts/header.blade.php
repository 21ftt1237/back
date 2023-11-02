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
    <title>{{ $pageName }}</title>
    <style>
 /* HELP dropdown styles */
  .dropbtn {
    cursor: pointer;
  }

  .dropdown {
    display: inline-block;
    position: relative;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }</style>
</head>
<body>
    </script>
    <header>
        <div class="landing-page">
            <div class="navbar">
              
               <div class="logo" id="storeName" data-value=" @if(isset($storehere)) {{ $storenumber}} @endif"><a href="{{ route('dashboard') }}"> <img src="image/BruZone_Logo.png" style="width: 50px">Bruzone</a></div>
                @if(isset($carts))
                 <div class="shopping">
                <img src="image/shoppingCart.png">
                <span class="quantity">0</span>
                </div>
                @endif
                <div class="wishlist">
                    <a href="{{ route('wishlist') }}">
                        <img src="{{ asset('image/wishlist.png') }}">
                        <span class="wishlist-quantity">0</span>
                    </a>
                </div>
                <div>
                    <a href="{{ route('coupon') }}" class="nav-link">REDEEM COUPON</a>
                    
                </div>
                
<!--                 <a href="{{ route('dashboard') }}" class="nav-link">HOME</a> -->
                <a href="{{ route('order') }}" class="nav-link">MY ORDERS</a>
                <a href="{{ route('profilev') }}" class="nav-link">MY ACCOUNT</a>
                 <div class="dropdown">
                    <span class="nav-link-last dropbtn">HELP</span>
                    <div class="dropdown-content">
                        <a href="{{ route('BruzoneFAQ') }}">Frequently Asked Question</a>
                        <a href="{{ route('BruzoneEmail') }}">Customer Service</a>
                    </div>
                </div>

                 

                @if($loggedIn)
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-sign-up">Logout</button>
                    </form>
                @else
                    <button class="btn-sign-up"><a href="{{ route('BruzoneLogin') }}" style="color: black;">Login</a></button>
                @endif
            </div>
        </div>
 

    </header>

    <div class="card">
    <h1>Your Shopping Cart</h1>
       <ul class="listCard">
        <ul>
<div>yes</div>
</ul>
    </ul> 
        <div class="checkOut" id="">
            <a href="{{ route('checkout') }}">
            <div class="total">BND 0</div></a>
        <div>
        <button id="closeShopping" class="close-button" onclick="closeShoppingCart()">
        <i class="fas fa-times-circle"></i></div>    
        </button>
        </div>
    </div>

    <script>

let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');

    openShopping.addEventListener('click', ()=>{
    document.body.classList.add("active");
})
closeShopping.addEventListener('click', ()=>{
    document.body.classList.remove("active");
})

        function closeShoppingCart() {
    var shoppingCart = document.getElementById('shopping-cart');
    shoppingCart.classList.remove('active');
  }

    
   function confirmAction() {
  var confirmation = confirm("You have changed Stores, confirm to clear cart items?");
  if (confirmation) {
    
    localStorage.setItem('storeId', '1');
    localStorage.removeItem('cartItems');
  } else {
    
    window.location.href = '{{ route('dashboard') }}';
  }
}

localStorage.setItem('delivery', '2');
localStorage.setItem('storename', 'Netcom (Kiulap)');

var storeId = 1;
var previousStore = localStorage.getItem('storeId');
var parseVal = parseInt(previousStore);
if(localStorage.getItem("cartItems") !== null){
if (storeId !== parseVal) {
  confirmAction();
}}
</script>
    <script>
        //For cart        
    </script>
</body>
</html>
