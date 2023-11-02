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
</body>
</html>
