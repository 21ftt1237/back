let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
var store = document.getElementById("storeName");
var dataValue = storeName.getAttribute("data-value");

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})



let listCards  = [];

function initApp() {
    // Make an HTTP request to fetch products from your Laravel API
    fetch('/api/products') // Replace with the actual route to fetch products
        .then(response => response.json())
        .then(data => {
            data.forEach((value, key) => {
                let newDiv = document.createElement('div');
                newDiv.classList.add('item');
                newDiv.innerHTML = `
                    <img src="${value.image}">
                    <div class="title">${value.name}</div>
                    <div class="price">${"BND " + value.price.toLocaleString()}</div>
                    <div class="desc">${value.description}</div>
                    <div class="actions">
                        <button onclick="addToCart(${value.id})">Add To Cart</button>
                        <div class="heart-icon" data-key="${value.id}" onclick="toggleFavorite(${value.id})">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>`;
                list.appendChild(newDiv);
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// Function to retrieve cart items from local storage
function getCartItemsFromLocalStorage() {
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  return cartItems;
}

// Function to initialize the cart with items from local storage
function initCart() {
  const cartItems = getCartItemsFromLocalStorage();
  listCards = cartItems;
  reloadCard();
}

// Call the initCart function when the page loads
window.addEventListener('load', initCart);

function toggleFavorite(key) {
    const heartIcon = document.querySelector(`.heart-icon[data-key="${key}"]`);

    if (heartIcon.classList.contains('clicked')) {
        heartIcon.classList.remove('clicked');
        removeFromWishlist(key); // Call the function to remove from wishlist
        updateWishlistQuantity();
    } else {
        heartIcon.classList.add('clicked');
        addToWishlist(key); // Call the function to add to wishlist
        updateWishlistQuantity();
    }
}

// Function to add an item to the wishlist
function addToWishlist(key) {    
    const selectedItem = products[key];
    const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];

    if (!wishlistItems.some(item => item.id === selectedItem.id)) {
        wishlistItems.push(selectedItem);
        localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));
    }
}

// Function to remove an item from the wishlist
function removeItemFromWishlist(key) {
    const selectedItem = products[key];
    const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];
    const updatedWishlist = wishlistItems.filter(item => item.id !== selectedItem.id);
    localStorage.setItem('wishlistItems', JSON.stringify(updatedWishlist));
}

function updateWishlistQuantity() {
    const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];
    const wishlistQuantity = wishlistItems.length;
    // You can display the wishlist quantity or update it wherever you need to show it on your website.
    const wishlistQuantityElement = document.querySelector('.wishlist-quantity');
    wishlistQuantityElement.innerText = wishlistQuantity;
}




initApp();
function addToCard(key) {
  if (listCards[key] == null) {
    // Copy product from the list to list card
    if (dataValue == 1) {
      listCards[key] = JSON.parse(JSON.stringify(products[key]));
      listCards[key].quantity = 1;
    } else if (dataValue == 2) {
      listCards[key] = JSON.parse(JSON.stringify(digitalProducts[key]));
      listCards[key].quantity = 1;
    } else if (dataValue == 3) {
      listCards[key] = JSON.parse(JSON.stringify(gameCentralProducts[key]));
      listCards[key].quantity = 1;
    } else if (dataValue == 4) {
      listCards[key] = JSON.parse(JSON.stringify(avenueProducts[key]));
      listCards[key].quantity = 1;
    } else if (dataValue == 5) {
      listCards[key] = JSON.parse(JSON.stringify(deliProducts[key]));
      listCards[key].quantity = 1;
    } else if (dataValue == 6) {
      listCards[key] = JSON.parse(JSON.stringify(guardianProducts[key]));
      listCards[key].quantity = 1;
    }  else if (dataValue == 7) {
      listCards[key] = JSON.parse(JSON.stringify(nimanjaProducts[key]));
      listCards[key].quantity = 1;
    }
    
  }
  reloadCard();
  storeCartItems(listCards); // Store cart items in localStorage
}

// function addToCard(key) { 

// console.log('addToCard function called with key:', key);

//   const selectedItem = dataValue === 1 ? products[key] :
//     dataValue === 2 ? digitalProducts[key] :
//     dataValue === 3 ? gameCentralProducts[key] :
//     dataValue === 4 ? avenueProducts[key] :
//     null;

//   if (selectedItem) {
//     if (listCards[key]) {
//       // Item already exists in the cart, so update its quantity.
//       listCards[key].quantity += 1;
//     } else {
//       // Item doesn't exist in the cart, so add it with a quantity of 1.
//       listCards[key] = JSON.parse(JSON.stringify(selectedItem));
//       listCards[key].quantity = 1;
//     }
//  // Debugging output
//     console.log('Item added to cart:', selectedItem);
//     console.log('Updated cart items:', listCards);
    
//     reloadCard();
//     storeCartItems(listCards); // Store cart items in localStorage
//   }
// }


function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;

    
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>BND ${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText ="BND " +  totalPrice.toLocaleString();
    quantity.innerText = count;
    var intValue = totalPrice; // Define the integer value
}
function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    // Update quantity and price based on dataValue
    if (dataValue == 1) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * products[key].price;
    } else if (dataValue == 2) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * digitalProducts[key].price;
    } else if (dataValue == 3) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * gameCentralProducts[key].price;
    } else if (dataValue == 4) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * avenueProducts[key].price;
    } else if (dataValue == 5) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * deliProducts[key].price;
    } else if (dataValue == 6) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * guardianProducts[key].price;
    } else if (dataValue == 7) {
      listCards[key].quantity = quantity;
      listCards[key].price = quantity * nimanjaProducts[key].price;
    }
  }
  reloadCard();
  storeCartItems(listCards); // Store cart items in localStorage
}



function storeCartItems(cartItems) {
    cartItems = cartItems.filter(item => item !== null);
  localStorage.setItem('cartItems', JSON.stringify(cartItems));

}

function togglePopup() {
    const popup = document.getElementById("popup");
    if (popup.style.display === "block") {
        popup.style.display = "none";
    } else {
        popup.style.display = "block";
    }
}


function togglePopup2() {
    const popup = document.getElementById("popup2");
    if (popup.style.display === "block") {
        popup.style.display = "none";
    } else {
        popup.style.display = "block";
    }
}
