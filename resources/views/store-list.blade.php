@php
    $pageName = 'Bruzone - admin';
@endphp

@include('layouts.admin-header')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="./ecommerce.css"> -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!--<link rel="stylesheet" href="/style.css">
<script src="/app.js"></script>-->
  <title>Bruzone</title>

</head>

<style type="text/css">
  
/* store-list.css */

#store-list {
    display: none;
}

#store-list ul {
    list-style-type: none;
    padding: 0;
}

#store-list li {
    margin-bottom: 10px;
}

#store-list a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

#store-list a:hover {
    color: #007bff; /* Change the color on hover to your preference */
}


</style>
<body>

<!--TAB store owner: -->
<div id="store-list">
    <ul>
        <li><a href="{{ route('store.index') }}">Netcom</a></li>
        <li><a href="{{ route('store.indexGameCentral') }}">Game Central</a></li>
        <li><a href="{{ route('store.indexWishlist') }}">Wishlist</a></li>
        <li><a href="{{ route('store.indexDigital') }}">Digital</a></li>
        <li><a href="{{ route('store.indexAvenue') }}">Avenue</a></li>
        <li><a href="{{ route('store.indexNimanja') }}">Nimanja</a></li>
        <li><a href="{{ route('store.indexGuardian') }}">Guardian</a></li>
    </ul>
</div>


<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>


<script type="text/javascript">

    
</script>
</body>
</html>
