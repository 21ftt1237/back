let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
var store = document.getElementById("storeName");
var dataValue = store.getAttribute("data-value");

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'RAZER CUSHION',
        image: 'razercushion.png',
        price: 58,
        desc: 'Razer Head Cushion Chroma Neck & Head Support for Gaming Chairs: Ergonomically Designed - Memory Foam Padding - Wrapped in Plush Gray - Chroma RGB'
    },
    {
        id: 2,
        name: 'RAZER STRIDER MOUSEPAD',
        image: 'razerstrider.png',
        price: 49,
        desc: 'Razer Strider Hybrid Mouse Mat with a Soft Base & Smooth Glide: Firm Gliding Surface - Anti-Slip Base - Rollable & Portable - Anti-Fraying Stitched Edges - Water-Resistant - XXLarge'
    },
    {
        id: 3,
        name: 'LOGITECH G203 LIGHTSYNC',
        image: 'g203.png',
        price: 68,
        desc: 'Logitech G203 LIGHTSYNC Wired Gaming Mouse, 8,000 DPI, Rainbow Optical Effect RGB, 6 Programmable Buttons, On-Board Memory, PC/Mac Computer, Laptop Compatible - Black (Renewed)'
    },
    {
        id: 4,
        name: 'ANKER POWER BANK METRO',
        image: 'anker.png',
        price: 79,
        desc: 'Anker Portable Charger, Power Bank, 20K Battery Pack with PowerIQ Technology and USB-C (Recharging Only) for iPhone 15/15 Plus/15 Pro/15 Pro Max, iPhone 14/13/12 Series, Samsung Galaxy (Black)'
    },
    {
        id: 5,
        name: 'RAZER KRAKEN X HEADSET',
        image: 'razerkraken.png',
        price: 59,
        desc:'Razer Kraken Gaming Headset: Lightweight Aluminum Frame - Retractable Noise Isolating Microphone - for PC, PS4, PS5, Switch, Xbox One, Xbox Series X & S, Mobile - 3.5 mm Headphone Jack - Black'
    },
    {
        id: 6,
        name: 'CORSAIR HEADSET STAND ST50',
        image: 'corsairstand.png',
        price: 53,
        desc: 'Corsair ST50 RGB Premium Headset Stand with 7.1 Surround Sound - 3.5mm and 2xUSB 3.0,Aluminum'
    }
];

let gameCentralProducts = [
    {
        id: 1,
        name: 'REMNANT - PS5',
        image: 'remnant.png',
        price: 58,
        desc: 'Remnant II - Deluxe Edition, Platform: Playstaton 5, Includes Elder Armor Set, Radiant Armor Set, Void Armor Set'
    },
    {
        id: 2,
        name: 'POKEMON LETS GO - SWITCH',
        image: 'pokemon.png',
        price: 60,
        desc:'Pokémon: Lets Go, Pikachu! Platform: Nintendo Switch, Don the role of a Pokémon Trainer as you travel through Kanto'
    },
    {
        id: 3,
        name: 'ASSASSIN CREED - PS5',
        image: 'creed.png',
        price: 35,
        desc:'Assassin’s Creed Valhalla, Platform: PlayStation 5 - Standard Edition, Lead epic Viking raids against Saxon troops and fortresses'
    },
    {
        id: 4,
        name: 'RESIDENT EVIL 4 - PS5',
        image: 'resident.png',
        price: 65,
        desc: 'Resident Evil 4, Platform: Playstation 5 - Standard Edition'
    },
    {
        id: 5,
        name: 'HITMAN - PS5',
        image: 'hitman.png',
        price: 60,
        desc: 'HITMAN: World of Assassination, Platform: PlayStation 5, ENTER THE WORLD OF THE ULTIMATE ASSASSIN - HITMAN World of Assassination brings together the best of HITMAN, HITMAN 2 and HITMAN 3'
    },
    {
        id: 6,
        name: 'STRAY - PS5',
        image: 'stray.png',
        price: 48,
        desc: 'Stray, Platform: Playstation 5, Roam surroundings high and low, defend against unforeseen threats and solve the mysteries of this unwelcoming place inhabited by nothing but unassuming droids and dangerous creatures'
    }
];

let digitalProducts = [
    {
        id: 1,
        name: 'CANON MG2570S',
        image: 'canon.png',
        price: 49,
        desc: 'Compact All-In-One for Low-Cost Printing - Affordable All-In-One printer with basic printing, copying and scanning functions.'
    },
    {
        id: 2,
        name: 'DUALIT KETTLE',
        image: 'dualit.png',
        price: 59,
        desc :'Fellow Corvo EKG Electric Tea Kettle - Electric Pour Over Coffee and Tea Pot - Quick Heating Electric Kettles for Boiling Water - Temperature Control and Built-In Brew Timer - Matte Black - 0.9 Liter'
    },
    {
        id: 3,
        name: 'NUSHI DESK FAN',
        image: 'deskfan.png',
        price: 49,
        desc: 'Nushi 16 Inch Metal Blade Desk Fan with Timer NDF-1631M'
    },
    {
        id: 4,
        name: 'XIAOMI WATCH ACTIVE',
        image: 'watch.png',
        price: 159,
        desc: 'Puccy 3 Pack Tempered Glass Screen Protector, compatible with Xiaomi Watch S1 Active Protectors Guard Transparent'
    },
    {
        id: 5,
        name: 'LAIFEN HAIRDRYER',
        image: 'hair.png',
        price: 168,
        desc:'Laifen Hair Dryer, Negative Ionic Blow Dryer with 110, 000 RPM Brushless Motor for Fast Drying, High-Speed Low Noise Thermo-Control Hairdryer with Magnetic Nozzle, for Home, Travel(Jet Black)'
    },
    {
        id: 6,
        name: 'MILK FRONTHER M3A',
        image: 'milk.png',
        price: 98,
        desc: 'HiBREW M3A Milk Frother, Electric Milk Steamer Stainless Steel, 10.1oz/5.1oz Automatic Milk Warmer, Cold/Hot Milk Foamer Maker for Latte, Cappuccino, Hot Chocolate, Milk Heater, 4 Temperature Range'
    }
];

let avenueProducts = [
    {
        id: 1,
        name: 'STAR VIXEN WOMEN',
        image: 'vixen.png',
        price: 35,
        desc: 'Star Vixen Womens Petite Short Sleeve Classic Tiefront RayonSpandex Knit Top'
    },
    {
        id: 2,
        name: 'PATAGONIA TSHIRT',
        image: 'patagonia.png',
        price: 35,
        desc: 'PATAGONIA -P-6 Logo Responsibili-Tee - T-shirt - Men'
    },
    {
        id: 3,
        name: 'NASA OFFICIAL TSHIRT',
        image: 'nasa.png',
        price: 35,
        desc: 'NASA Logo Adult T-Shirt - National Aeronautics and Space Administration T Shirt'
    },
    {
        id: 4,
        name: 'GILDAN MEN TSHIRT',
        image: 'gildan.png',
        price: 30,
        desc: 'Gildan Adult Ultra Cotton T-shirt, Style G2000, Multipack - Blue'
    },
    {
        id: 5,
        name: 'NAUTICA MEN CLASSIC',
        image: 'nautica.png',
        price: 25,
        desc: 'Mens Cotton Casual Polo Shirt Short Sleeve Striped Solid Golf Polo Shirts for Men Classic Pique Relaxed-Fit'
    },
    {
        id: 6,
        name: 'STAR WARS MEN REBEL',
        image: 'starwars.png',
        price: 25,
        desc: 'STAR WARS Mens Galactic Battle T-Shirt'
    }
];

let deliProducts = [
    {
        id: 1,
        name: 'Shoe Cabinet',
        image: 'shoec.jpeg',
        price: 54
    },
    {
        id: 2,
        name: 'Storage Cabinet',
        image: 'storagec.jpg',
        price: 89
    },
    {
        id: 3,
        name: 'Study Desk',
        image: 'studydesk.jpg',
        price: 76
    },
    {
        id: 4,
        name: 'Sofa Brown',
        image: 'sofa.jpg',
        price: 1000
    },
    {
        id: 5,
        name: 'Cecily Double Bed',
        image: 'd-bed.jpg',
        price: 480
    },
    {
        id: 6,
        name: 'Storage Rack',
        image: 'srack.jpg',
        price: 75
    }
];

let guardianProducts = [
    {
        id: 1,
        name: 'Bio-Oil Skincare Oil',
        image: 'BioOil.jpg',
        price: 18.45,
        desc: 'Bio-Oil Skincare Body Oil, Serum for Scars and Stretchmarks, Face Moisturizer Dry Skin, Non-Greasy, Dermatologist Recommended'
    },
    {
        id: 2,
        name: 'Cetaphil Moisturising Lotion ',
        image: 'cetaphil.jpg',
        price: 65.50,
        desc: 'Cetaphil Moisturizing Lotion 20 fl oz,Vitamin E'
    },
    {
        id: 3,
        name: 'Germidine Sore Throat Spray',
        image: 'germidine.jpg',
        price: 9.55,
        desc: 'BETADINE Sore Throat Spray 50ml Relief of Sore Throat and Mouth ulcers'
    },
    {
        id: 4,
        name: 'Avene Very High Protection Lotion SPF50+',
        image: 'avene.jpg',
        price: 70.60,
        desc: 'Very high protection for sensitive skin,Paraben-free,Very water-resistant,100ml'
    },
    {
        id: 5,
        name: 'Aveeno Baby Dermexa Moisturizing Cream',
        image: 'aveeno.jpeg',
        price: 20.90,
        desc: 'Aveeno Baby Dermexa Fragrance Free Moisturising Cream 206g'
    },
    {
        id: 6,
        name: 'Novo Protein Wafer Salted Caramel',
        image: 'novo.jpeg',
        price: 5.05,
        desc: 'Protein Wafer Bar,Salted Caramel Flavour,12g Protein,Suitable for Vegetarians'
    }
];

let nimanjaProducts = [
    {
        id: 1,
        name: 'Kit Cat Premium Salmon',
        image: 'thumb.jpg',
        price: 9.80,
        desc: 'Kitcat Kit Cat No Grain Tuna & Salmon Super Premium Dry Cat Food 10Kg'
    },
    {
        id: 2,
        name: 'KIT CAT GOAT MILK GOURMET',
        image: 'catf.jpg',
        price: 1.10,
        desc: 'Fresh White Meat Tuna, Smoked Fish Flakes, Thickening Agent, Goat Milk Powder, Vitamin E, Taurine, Fructooligosaccharides, Water'
    },
    {
        id: 3,
        name: 'HIKARI WHEAT GERM MEDIUM',
        image: 'fishf.jpg',
        price: 6.50,
        desc: 'Hikari Wheat Germ Medium Floating Pellets for Koi and Pond Fish, 17.6 ounce'
    },
    {
        id: 4,
        name: 'JBL GAMMARUS FOOD FOR TURTLES ',
        image: 'turtlef.jpg',
        price: 14.00,
        desc: 'Feed supplement for turtles: cleaned gammarus crustaceans for turtles 10 - 50 cm in size, supplementary food for turtles and terrapins'
    },
    {
        id: 5,
        name: 'TRIXIE OUTDOOR FEEDER 1',
        image: 'birdf.png',
        price:  7.00,
        desc: 'Trixie 24371 TX1 Automatic Feeder 300 ml / 15 × 7 × 24 cm Charcoal/Black'
    },
    {
        id: 6,
        name: 'CUNIPIC GUINEA PIG',
        image: 'gpig.jpg',
        price: 5.80,
        desc: 'CUNIPIC – Feed For Guinea Pigs Premium 800 gr'
    }
];






let listCards  = [];

function initApp(){

    if(dataValue==1){
        products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
        
    }
    else if(dataValue==2){
        digitalProducts.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
    }

    else if(dataValue==3){
        gameCentralProducts.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
    }

    else if(dataValue==4){
        avenueProducts.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
    }

        else if(dataValue==5){
        deliProducts.forEach((value, key) =>{
         let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}" alt="${value.name}"> <!-- Update image path -->
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
    }

    else if(dataValue==6){
        guardianProducts.forEach((value, key) =>{
         let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}" alt="${value.name}"> <!-- Update image path -->
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
    }

    else if(dataValue==7){
        nimanjaProducts.forEach((value, key) =>{
         let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}" alt="${value.name}"> <!-- Update image path -->
            <div class="title">${value.name}</div>
            <div class="price">${"BND " + value.price.toLocaleString()}</div>
            <div class="desc">${value.desc.toLocaleString()}</div>
            <div class="actions">
                <button onclick="addToCard(${key})">Add To Cart</button>
                <div class="heart-icon" data-key="${key}" onclick="toggleFavorite(${key})">
                    <i class="fas fa-heart"></i>
                </div>
            </div>`;
        list.appendChild(newDiv);
    })
    }
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
    if(dataValue==1){
        const selectedItem = products[key];
    }else if(dataValue==2){
        const selectedItem = digitalProducts[key];
    }else if(dataValue==3){
        const selectedItem = gameCentralProducts[key];
    }else if(dataValue==4){
        const selectedItem = avenueProducts[key];
    }else if(dataValue==5){
        const selectedItem = deliProducts[key];
    }else if(dataValue==6){
        const selectedItem = guardianProducts[key];
    }else if(dataValue==7){
        const selectedItem = nimanjaProducts[key];
    }
    
    // const selectedItem = products[key];
    const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];

    if (!wishlistItems.some(item => item.id === selectedItem.id)) {
        wishlistItems.push(selectedItem);
        localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));
    }
}

// Function to remove an item from the wishlist
function removeItemFromWishlist(key) {
    if(dataValue==1){
        const selectedItem = products[key];
    }else if(dataValue==2){
        const selectedItem = digitalProducts[key];
    }else if(dataValue==3){
        const selectedItem = gameCentralProducts[key];
    }else if(dataValue==4){
        const selectedItem = avenueProducts[key];
    }else if(dataValue==5){
        const selectedItem = deliProducts[key];
    }else if(dataValue==6){
        const selectedItem = guardianProducts[key];
    }else if(dataValue==7){
        const selectedItem = nimanjaProducts[key];
    }
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
