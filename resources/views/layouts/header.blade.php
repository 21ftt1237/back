@auth
    @php
    $loggedIn = true;
    @endphp
@else
    @php
    $loggedIn = false;
    @endphp
@endauth

@php
$totalQuantity = 0; // Initialize the total quantity variable
@endphp

@if($loggedIn)
@foreach ($cart as $cartItem)
@php
$totalQuantity += $cartItem->quantity; // Add the quantity of the item to the total quantity
@endphp
@endforeach
@endif

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{ asset('css/header.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
    <title></title>
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
  }

    #quantityup{
        width: 20px;
        height: 20px;
        }

            #quantitydown{
        width: 20px;
        height: 20px;
        }
        
    </style>
</head>
<body>

    <header>
        <div class="landing-page">
            <div class="navbar">
              
               <div class="logo" id="storeName" data-value=" @if(isset($storehere)) {{ $storenumber}} @endif"><a href="{{ route('dashboard') }}"> <img src="{{asset('image/BruZone_Logo.png')}}" style="width: 50px">Bruzone</a></div>
                 @if(isset($carts))
                 <div class="shopping">
                <img src="{{ asset('image/shoppingCart.png') }}">
                <span class="quantity">{{ $totalQuantity }}</span>
                </div>
                 @endif
                <div class="wishlist">
                    <a href="{{ route('wishlist') }}">
                        <img src="{{ asset('image/wishlist.png') }}">
                        
                    </a>
                </div>
                <div>
                    <a href="{{ route('coupon') }}" class="nav-link">REDEEM COUPON</a>
                    
                </div>
                
<!--                 <a href="{{ route('dashboard') }}" class="nav-link">HOME</a> -->
                @if($loggedIn)
                <a href="{{ route('order.show') }}" class="nav-link">MY ORDERS</a>
                @else 
                <a href="{{ route('BruzoneLogin') }}" class="nav-link">MY ORDERS</a>
                @endif
                @if($loggedIn)
                <a href="{{ route('profilev') }}" class="nav-link">MY ACCOUNT</a>
                @else 
                <a href="{{ route('BruzoneLogin') }}" class="nav-link">MY ACCOUNT</a>
                @endif
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
                        <button type="submit" class="btn-sign-up" id="sub">Logout</button>
                    </form>
                @else
                    <button class="btn-sign-up"><a href="{{ route('BruzoneLogin') }}" style="color: black;">Login</a></button>
                @endif
            </div>
        </div>
 

    </header>

     <div class="list"></div>
    <div class="card">
        <h1>Your Shopping Cart</h1>
        <ul class="listCard">
            <ul>
                @php
                $totalPrice = 0; // Initialize the total price variable
                @endphp

                @if($loggedIn)
                @foreach ($cart as $cartItem)
                @php
                $productPrice = $cartItem->product->price;
                $product = $cartItem->product;
                $newQuantity = $cartItem->quantity;

                $productPrice = $productPrice * $newQuantity;

                $totalPrice += $productPrice;
                @endphp
                <li>
                  <img src="{{ asset('image/' . $cartItem->product->image_link) }}">
                    <div class="item-details">
                        <div class="item-name">{{ $cartItem->product->name }}</div>
                        <div class="item-price">BND {{ $productPrice }}</div>
                        <div class="item-quantity">
            <form method="POST" action="{{ route('increaseQuantity', ['product' => $product->id]) }}">
             @csrf
            <button type="submit" id="quantityup">+</button>
             </form>
             <div> {{ $cartItem->quantity }}</div>
            <form method="POST" action="{{ route('decreaseQuantity', ['product' => $product->id]) }}">
            @csrf
            <button type="submit" id="quantitydown">-</button>
            </form>
        </div>
                    </div>
                </li>
                @endforeach
                @else
                @endif

                
            </ul>
        </ul>
        <div class="checkOut" id="">
            <a href="{{ route('checkout') }}">
                <div class="total">BND {{ $totalPrice }}</div> <!-- Display the total price again for checkout -->
            </a>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    <script>
 let totalPrice = <?php echo $totalPrice; ?>; // Get the total price from your PHP code
    localStorage.setItem('totalPrice', totalPrice);
        
    let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');

    openShopping.addEventListener('click', ()=>{
    document.body.classList.add("active");
})
closeShopping.addEventListener('click', ()=>{
    document.body.classList.remove("active");
})

    
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


</body>
</html>
