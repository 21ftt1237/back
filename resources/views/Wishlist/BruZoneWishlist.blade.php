@php
    $pageName = 'Wishlist';
    $carts = 'true';
@endphp

@include('layouts.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BruZone Wishlist</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

 



/*WISHLIST*/


/*   body {
    margin: 0;
    padding: 0;
    background-color: #F0F0F0;
  }*/

  .main-container {
            margin-top: 30px;
            padding-left: 350px;
            height: 150vh; /* Set a fixed height for scrollable container */
            box-sizing: border-box;
          
        } 


  /* New style for the title */
  .wishlist-title {
   position: absolute;
    top: 20px;
    left: 350px;
    color: #1E1E1E;
    font-family: Imprima;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  /* New style for the line */
  .wishlist-line {
    width: 516.001px;
    height: 1px;
    background-color: #000;
    margin-top: 80px; /* Adjust as needed */
   position: absolute;
    left: 350px; /* Same as wishlist-title's left position */
    display: none;
  }

  /* New style for the sorting elements */
  .sorting-elements {
  position: absolute;
  left: 350px; /* Same as wishlist-title's left position */
  top: 100px; /* Adjust as needed */
  display: flex;
  align-items: center;
  gap: 20px; /* Adjust as needed */
  color: #000;
  font-family: JetBrains Mono;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}

  /* Add styles for the sorting select element */
  select#sortCriteria {
  font-size: 14px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

  /* New style for the bottom wishlist line */
.wishlist-line-bottom {
  width: 516.001px;
  height: 1px;
  background-color: #000;
  margin-top: -90px; /* Adjust as needed */
  position: absolute;
  left: 350px; /* Same as wishlist-title's left position */
  top: 230px; /* Adjust as needed */
}

    /* New style for the custom buttons */
.custom-button {
  border-radius: 30px;
  background: #F6E71D;
  padding: 10px 20px;
  margin-right: 10px;
  border: none;
  color: #000;
  cursor: pointer;
}

/* New style for the button row */
.button-row {
  position: absolute;
  left: 350px;
  top: 160px; /* Adjust as needed */
} 

 /* New style for the bottom wishlist line */
.wishlist-line-blw2btn {
  width: 700px;
  height: 1px;
  background-color: #000;
  margin-top: -10px; /* Adjust as needed */
  position: absolute;
  left: 350px; /* Same as wishlist-title's left position */
  top: 230px; /* Adjust as needed */
}

/* New style for the image */
  .wishlist-image {
    width: 600px;
    height: 400px;
    flex-shrink: 0;
    margin-top: 10px; /* Adjust as needed */
    position: absolute;
    left: 350px; /* Same as wishlist-title's left position */
    top: 240px; /* Adjust as needed */
  }
/* New style for the Explore button */
  .explore-button {
    border-radius: 30px;
    background: #F6E71D;
    padding: 10px 20px;
    margin-top: 20px; /* Adjust as needed */
    position: absolute;
    left: 610px; /* Same as wishlist-title's left position */
    top: 600px; /* Adjust as needed */
    cursor: pointer;
  }

  .explore-button a {
    display: block;
    width: 100%;
    height: 100%;
    text-align: center;
    text-decoration: none;
    color: #000;
}

  .up-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #F6E71D;
  border: none;
  border-radius: 50%;
  width: 50px; /* Adjust the width to make it smaller */
  height: 50px; /* Adjust the height to make it smaller */
  cursor: pointer;
  z-index: 5;
  opacity: 0.7;
  transition: opacity 0.3s ease-in-out;
}

.up-button:hover {
  opacity: 1;
}

.up-button::before {
  content: ""; /* Empty content */
  display: block;
  width: 100%; /* Make the pseudo-element match the button's width */
  height: 100%; /* Make the pseudo-element match the button's height */
  background-image: url('https://cdn-icons-png.flaticon.com/512/25/25282.png'); /* URL of the image */
  background-size: contain; /* Scale the image to fit the pseudo-element */
  background-repeat: no-repeat;
  background-position: center center;
  border-radius: inherit; /* Inherit the button's border-radius */
}

/* Updated CSS for .wishlist-items */
.wishlist-items {
  position: absolute;
  left: 350px; /* Same as wishlist-title's left position */
  top: 265px; /* Adjust as needed */
  display: flex;
  flex-direction: row;
  gap: 20px; /* Gap between items */
  padding: 10px;
  align-items: flex-start; /* Align items to the top */
  overflow-x: auto; /* Enable horizontal scrolling for smaller screens */
}

.wishlist-item {
  display: flex;
  flex-direction: column; /* Change flex direction to column */
  align-items: center;
  padding: 10px;
  border-radius: 8px;
  background-color: #fff;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s, box-shadow 0.2s;
  width: 250px; /* Fixed width for each item */
  min-height: 400px; /* Fixed minimum height for each item */
}



.wishlist-item:hover {
  transform: translateY(-5px);
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

.wishlist-item:hover {
  transform: translateY(-5px);
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

.item-details {
  flex-grow: 1;
  padding: 10px 0; /* Add padding to separate details */
  text-align: center; /* Center align details text */
}

..item-name {
  font-weight: bold;
  margin-bottom: 5px;
}

.item-price {
  color: #888;
  font-size: 14px;
}

#remove-button {
  background-color: #EB4949;
  color: #fff;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
  font-size: 12px;
  border-radius: 4px;
  transition: background-color 0.2s;
}



#remove-button:hover {
  background-color: #c63737;
}

.add-to-cart-button {
    background-color: #F6E71D;
    color: black;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 12px;
    border-radius: 4px;
    margin-top: 5px; /* Adjust the margin as needed */
    transition: background-color 0.2s;
     margin-bottom: 10px;
}

.add-to-cart-button:hover {
    background-color: #45a049;
}

.wishlist-item img {
    width: 200px; /* Adjust the width as needed */
    height: 200px; /* Adjust the height as needed */
    object-fit: cover; /* Maintain aspect ratio and cover the entire space */
}

.list-container {
    display: flex; /* Use flexbox to arrange the list horizontally */
    flex-wrap: wrap; /* Allow items to wrap to the next line if needed */
}

.list-container ul {
    list-style: none; /* Remove list bullets */
    padding: 0;
    margin: 0;
    display: flex; /* Make the ul a flex container */
}

.list-container li {
    flex: 1; /* Distribute available space evenly among items */
    margin: 10px; /* Add margin to separate items */
    text-align: center; /* Center-align content within each item */
}

 
  
 </style> 
</head>
<body>
         
   
  <div class="main-container">
    <div class="wishlist-title">
      <h2>MY WISHLIST</h2>
    </div>


    <div class="wishlist-line"></div>

    <div class="sorting-elements">
  <div>Sort</div>
  <select id="sortCriteria">
    <option value="recent">Recently Added</option>
    <option value="priceLowToHigh">Price Low to High</option>
    <option value="priceHighToLow">Price High to Low</option>
  </select>
</div>

    <div class="wishlist-line-bottom"></div>

    <div class="button-row">
      <button class="custom-button">Discount</button>
      <button class="custom-button">Low Stock</button>
    </div>

    <div class="wishlist-line-blw2btn"></div>
<div class="wishlist-items list-container">
    
          <ul>
      @foreach ($wishlistItems as $wishlistItem)
    <li class="wishlist-item">
        <img src="image/{{ $wishlistItem->product->image_link }}">
        <div class="item-details">
            <div class="item-name">{{ $wishlistItem->product->name }}</div>
            <div class="item-price">BND {{ $wishlistItem->product->price }}</div>
        </div>

        <button class="add-to-cart-button">Add To Cart</button>

        <form action="{{ route('wishlist.remove', ['product' => $wishlistItem->product]) }}" method="POST">
            @csrf
            <button type="submit" id="remove-button">Remove</button>
        </form>
    </li>
@endforeach
    </ul>
    </div>

<!-- <h1>My Wishlist</h1> -->
  

  <button id="scrollToTopButton" class="up-button">
  <img src="https://cdn-icons-png.flaticon.com/512/25/25282.png" alt="Up Icon">
</button>

<body> 
     <div class="container">
    </div>

     <div class="details-container">
         <div class="data">
         <div class="eclipse-container">
       
       </div>
    </div>
    
    
<!--       <div class="details-container">
    <ul>

    </ul> -->
<!--       </div> -->
</body>
      

<!--   <script>
    





// Define the scrollToTopButton element
const scrollToTopButton = document.getElementById('scrollToTopButton'); 

// Function to check if user has scrolled to the bottom
function isScrolledToBottom() {
  return (window.innerHeight + window.scrollY) >= document.body.offsetHeight;
}

// Function to handle scroll event
function handleScroll() {
  if (window.scrollY > 300 || isScrolledToBottom()) {
    scrollToTopButton.style.display = 'block';
  } else {
    scrollToTopButton.style.display = 'none';
  }
}

// Add a throttle function to limit the frequency of scroll event calls
function throttle(func, delay) {
  let timeout = null;
  return function (...args) {
    if (!timeout) {
      timeout = setTimeout(() => {
        func.apply(this, args);
        timeout = null;
      }, delay);
    }
  };
}

// Attach the throttled scroll event handler
window.addEventListener('scroll', throttle(handleScroll, 200));

// Smooth scroll to the top when the button is clicked
scrollToTopButton.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Run the handleScroll function initially to show/hide the button
handleScroll();

const wishlistItemsContainer = document.getElementById('wishlist-items');
const wishlistImage = document.querySelector('.wishlist-image');
const exploreButton = document.querySelector('.explore-button');
const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];
 const sortCriteriaSelect = document.getElementById('sortCriteria');

function removeFromWishlist(index) {
    const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];
    wishlistItems.splice(index, 1);
    localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));

    // Update the rendering logic
    renderWishlistItems(wishlistItems);
}


        function sortWishlist(sortCriteria) {
            if (sortCriteria === 'priceLowToHigh') {
                wishlistItems.sort((a, b) => a.price - b.price);
            } else if (sortCriteria === 'priceHighToLow') {
                wishlistItems.sort((a, b) => b.price - a.price);
            }
            renderWishlistItems(wishlistItems);
        }


// Call renderWishlistItems to initially render the wishlist items and show/hide the explore button
renderWishlistItems(wishlistItems);

function renderWishlistItems(items) {
    const wishlistItemsContainer = document.getElementById('wishlist-items');
    wishlistItemsContainer.innerHTML = ''; // Clear the existing items

    items.forEach((item, index) => {
        const wishlistItemDiv = document.createElement('div');
        wishlistItemDiv.classList.add('wishlist-item');
        wishlistItemDiv.innerHTML = `
            <img src="../image/${item.image}" alt="${item.name}">
            <div class="item-details">
                <div class="item-name">${item.name}</div>
                <div class="item-price">BND ${item.price.toLocaleString()}</div>
            </div>
            <button class="add-to-cart-button">Add to Cart</button>
            <button class="remove-button" onclick="removeFromWishlist(${index})">Remove</button>
        `;
        wishlistItemsContainer.appendChild(wishlistItemDiv);
    });



    // Show/hide the wishlist image and explore button based on the number of items
    const wishlistImage = document.querySelector('.wishlist-image');
    const exploreButton = document.querySelector('.explore-button');

    wishlistImage.style.display = items.length > 0 ? 'none' : 'block';
    exploreButton.style.display = items.length > 0 ? 'none' : 'block';
}

sortCriteriaSelect.addEventListener('change', (event) => {
        const selectedSortCriteria = event.target.value;
        sortWishlist(selectedSortCriteria);
    });


// Call renderWishlistItems to initially render the wishlist items and show/hide the explore button
renderWishlistItems(wishlistItems);

  </script> -->



</body>
</html>


