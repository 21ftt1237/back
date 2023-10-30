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
</style>

   
</head>
<body>
    
     <div class="container">

    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
     </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
    <div class="data">
        <div class="eclipse-container">
            <div class="eclipse">
                <img src="image/BruZone_Logo.png">
            </div>
        </div>
        <div class="details-container">
            <div>ACER ASPIRE3 A315-510P-C46E N100 - SILVER</div>
            <div>Tuesday, August 8</div>
            <button class="details-box" id="detailbox1"><a href="#">Details</a></button>
            <div class="price"></div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
