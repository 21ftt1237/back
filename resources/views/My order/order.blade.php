@php
    $pageName = 'My Orders';
    $carts = 'true';
@endphp
@include('layouts.header')

<!DOCTYPE html>
<html>
<head>
    <title>BruZone Order History</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .my-orders {
            color: #1E1E1E;
            font-family: Imprima, sans-serif;
            font-size: 45px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin: 0;
        }

        .line {
            width: 1053px;
            height: 1px;
            background-color: #1E1E1E;
            margin-left: 10px;
            margin-top: 20px;
        }

        .container {
            background-color: #F6E71D;
            padding: 20px;
            text-align: center;
            width: 100%;
            height: 20%;
            margin: 0 auto;
            margin-top: 10px;
        }

        .data {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .eclipse-container {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .eclipse {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #E9E9E9;
            width: 150px;
            height: 150px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
            border-radius: 50%;
            overflow: hidden;
        }

        .eclipse img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

         .details-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1; /* Allow the details container to grow to fill remaining space */
            padding-right: 20px; /* Add some spacing on the right side */
        }

        .price-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 10px; /* Adjust the margin as needed */
            font-weight: bold;
            color: black;
        }

        .details-box {
            width: 80px;
            height: 30px;
            border: 3px solid #000;
            background: #F6E71D;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: blue;
            text-align: center;
            margin-top: 10px;
        }

        .price {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 20px;
            font-weight: bold;
            color: black;
        }

        .searchInputWrapper {
            position: relative;
            display: inline-block;
        }

        .searchInput {
            width: 20rem;
            height: 2rem;
            padding: 0 1rem; 
            border-radius: 2rem;
            border: none;
            transition: transform 0.1s ease-in-out;
        }

        ::placeholder {
            color: #a1a1a1;
        }

        /* hide the placeholder text on focus */
        :focus::placeholder {
            text-indent: -999px
        }

        .searchInput:focus {
            outline: none;
            transform: scale(1.1);
            transition: all 0.1s ease-in-out;
        }

        .searchInputIcon {
            position: absolute;
            right: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a1a1a1;
            transition: all 0.1s ease-in-out;
        }

        .container:focus-within > .searchInputWrapper > .searchInputIcon {
            right: 0.2rem;
        }

        /* New styles for the popup */
    .popup {
        display: none;
        width: 50%;
        height: 50%;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    .popup-content {
        /* You can style the popup content here */
    }

    .popup-close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .go-back-button {
            display: none;
            border-radius: 30px;
            background: #F6E71D;
            padding: 10px 20px;
            position: fixed;
            cursor: pointer;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
        .haha {
        height: 200px;
        width: 200px;
        }
</style>

   
</head>
 <body> 
     <div class="container">
    </div>
    
      <div class="details-container">
    <ul>
        @foreach($cartItems as $cartItem)
            <li> 
                <img src="image/{{ $cartItem->image }}" class="haha"><br>
                <strong>Product Name:</strong> {{ $cartItem->name }}<br>
                <strong>Price:</strong> ${{ $cartItem->price }}<br>
                <strong>Quantity:</strong> {{ $cartItem->quantity }}<br>
                <strong>Created At:</strong> {{ $cartItem->created_at->format('Y-m-d H:i:s') }}<br>
                <hr>
            </li>
        @endforeach
    </ul>
</body>
                     </div>

         
 
    
</body>
</html>
