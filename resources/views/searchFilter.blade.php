<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./ecommerce.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <title></title>
</head>


<style type="text/css">

/*NAVBAR*/
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



   /*NAVBAR*/
     body {
    font-family: Arial, sans-serif;
    margin: 0;
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
    margin-right: 1000px;
    font-size: 35px;
    font-weight: 500px;
    text-decoration: none;
}

.nav-links {
    font-size: 16px;
    margin-left: 500px;
    position: absolute;
    right: 0;
   
}

.nav-link, .nav-link-last {
    color: white;
    font-size: 16px;
    text-decoration: none;
    font-weight: 600;
    margin-right: 0px;
    margin-left: 0px;
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

.logo{
  margin-left: 30px;
}

.logo a {
  color: white;
  transition-duration: 1s;
  font-weight: 200;
}
.logo a:hover {
  color: rgb(240, 197, 6);
  transition-duration: 1s;
}


/*SEARCH AND FILTER*/

h1 {
    text-align: center;
    margin-top: 40px;
    padding: 20px 0;
}

ul {
    padding: 0;
}
body {
    margin: 0;
}
figure {
    margin-top: 0;
}
ul,
li {
    list-style-type: none;
}
address {
    min-height: 40px;
    margin-bottom: 20px;
    line-height: 1.4;
}

.btn-class {
    background: #1976d2;
    color: #fff;
    padding: 7px;
    width: 100%;
    font-size: 13px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 700;
    border: 0;
    max-width: 100px;
    margin-bottom: 0;
    border: 1px solid #1976d2;
}
.added {
    color: #1976d2;
    background-color: #fff;
    max-width: 200px;
    pointer-events: none;
}
.btn-remove {
    pointer-events: initial;
}
.result-list {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    width: calc(100% - 250px);
    padding: 0;
    margin-left: 30px;
}

.result-list li {
    border: 1px solid #f1f1f1;
    background-color: #fff;
    padding: 1rem;
    border-radius: 3%;
    border: 1px solid #ccc;
    margin: .5rem;
    width: 20%;
    min-width: 150px;
    min-height: 450px;
    text-align: center;
}
.result-list figure {
    min-height: 72px;
}
.result-list img {
    width: 150px; 
    height: 160px;
}

.result-list li span,
.result-list li strong {
    display: block;
    margin-bottom: 20px;
} 
.result-wrap {
    display: flex; 
    align-items: flex-start;
    justify-content: space-between;
    margin: 20px 30px;
}
.filters {
    width: 300px;
    align-items: flex-start;
    padding: 10px 20px;
    border-radius: 4px;
    background: #f4f6f7;
}
.filters li {
    margin-bottom: 30px;
}
.filters span {
    margin-bottom: 10px;
    font-size: 15px;
    font-weight: 700;
    display: block;
}


/* Add margin to the right of the checkboxes */
input[type="checkbox"] {
    margin-bottom: 10px; /* Adjust this value to control the spacing */
}


select {
    width: 100%;
    height: 32px;
    background: #fff;
    text-transform: capitalize;
    font-size: 13px;
}
fieldset {
    padding: 0;
    border: 0;
}
fieldset label {
    margin-left: 10px;
}
button {
    background: black;
    color: #fff;
    padding: 10px;
    width: 100%;
    font-size: 15px;
    border-radius: 4px;
    font-weight: 700;
    border: 0;
    transition: transform 0.2s;
}

button:hover {
  color: black;
  background: #F6E71D;
}
.search-wrap {
    display: flex;
    justify-content: flex-end ;
    margin: 0 50px;
}
.search-wrap button {
    max-width: 100px;
}
.search-wrap input {
    font-size: 15px;
    border-radius: 4px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-right: 21px;
    width: 300px;
}


/*FOOTER*/


.footer-distributed{
  margin-top: auto;
  background: black;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 40px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px sans-serif;
  margin: 0;
}

.footer-distributed h3 span{
  color:  #F6E71D;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  grey;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}


.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
  float: right;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  white;
  font-size: 16px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-icons{
  margin-left: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}


.footer-icons a i {
  color: white;
  background-color: black;
}
.footer-icons a:hover i{
  color: #F6E71D;
  transform: translateY(5px);
}

.footer-links a:hover {
  color: yellow;
  text-decoration: none;
}


@media screen and (max-width: 500px) {
  .filters {
  width: 400px;
  margin: 0 auto; /* This will center the element horizontally */
  padding: 10px 20px;
  border-radius: 4px;
  background: #f4f6f7;
  margin-bottom: 20px;
}

.filters li {
    margin-bottom: 30px;
    font-size: 13px;
}

.filters span {
    margin-bottom: 10px;
    font-size: 15px;
    font-weight: 700;
    display: block;
}

input[type="checkbox"] {
  margin-bottom: 10px;
  transform: scale(1.0); /* Adjust the scale factor as needed */
}

button {
    background: black;
    color: #fff;
    padding: 10px;
    width: 100%;
    font-size: 10px;
    border-radius: 4px;
    font-weight: 700;
    border: 0;
    transition: transform 0.2s;
}


.result-list {
    display: flex;
    flex-direction: column ; /* Display results in a column layout */
    flex-flow: no wrap;
    align-items: center;
    width: calc(100% - 250px);
    padding: 0;
    margin-left: 30px;
}

.result-list li {
    border: 1px solid #f1f1f1;
    background-color: #fff;
    padding: 1rem;
    border-radius: 3%;
    border: 1px solid #ccc;
    margin: .5rem;
     width: 200%; /* Make the result items full width */
    text-align: center;
    font-size: 15px;
}
.result-list figure {
    min-height: 72px;
}
.result-list img {
   width: 90%; 
    height: 160px;
}

.result-list li span,
.result-list li strong {
    display: block;
    margin-bottom: 20px;
} 

.result-wrap {
    display: flex;
    flex-direction: column; /* Display elements below each other */
    align-items: flex-start; /* You can also use "flex-start" to align items to the start of each column */
    margin: 20px 30px;
}


}

</style>

<body>


<header>
  
<div class="landing-page">

        <div class="navbar">

           <div class="logo"><a href="#">Search</a></div>

    

         <div class="shopping">
                <img src="image/shoppingCart.png">
                <span class="quantity">0</span>
            </div>

                   <div class="wishlist">
             <a href="wishlist/Bruzone Wishlist.html">
                <img src="image/wishlist.png">
                <span class="quantity">0</span>
            </a>
            </div>

            <a href="profiletest.html" class="nav-link">MY ACCOUNT</a>
            <a href="#" class="nav-link">ABOUT US</a>
            <a href="{{ route('dashboard') }}" class="nav-link">HOME</a>
            <a href="help/help.html" class="nav-link-last">HELP</a>
              <button class="btn-sign-up">SIGN UP</button>
        </div>
    

  </header>

        <section>
            <h1>STORE RESULTS</h1>

<div class="search-wrap">
  <input type="search" placeholder="Enter place to search" id="search-box" />

  <button type="submit" onclick="showResults()">Search</button>
</div>

            <div class="result-wrap">
                <ul class="filters">
    
                    <li>
                        <span>By category: </span>
                        <fieldset>

<div>
    <input type="checkbox" name="acs" value="Electronics" id="Electronics">
    <label for="Electronics">Electronics</label>
</div>    
<div>
    <input type="checkbox" name="acs" value="Clothings" id="Clothings">
    <label for="Clothings">Clothings</label>
</div>

<div>
    <input type="checkbox" name="acs" value="Petcare" id="Petcare">
    <label for="Petcare">Petcare</label>
</div>

<div>
    <input type="checkbox" name="acs" value="Health personal care & beauty" id="HealthBeauty">
    <label for="HealthBeauty">Health, personal care & beauty</label>
</div>
                            <div>
                                <input type="checkbox" name="acs" value="Apparel & Accessories" id="apparel"><label for="apparel">Apparel & accessories</label></input>
                            </div>
                            <div>
                                <input type="checkbox" name="acs" value="Home furniture and decor" id="furniture"><label for="furniture">Home furniture & decor</label></input>
                            </div>
                          
                            <div>
                                <input type="checkbox" name="acs" value="Office equipment" id="office"><label for="office">Office equipment</label></input>
                            </div>
                            <div>
                                <input type="checkbox" name="acs" value="Others" id="others"><label for="others">Others</label></input>
                            </div>
                               <div>
                                <input type="checkbox" name="acs" value="all" id="all"><label for="all">all</label></input>
                            </div>
                        </fieldset>  
                    </li>

               <!--   <li>
                     <span>By Date: </span>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="dateFromFilter">Date From</label>

                    <div class="input-group">
                        <input type="text"
                               id="dateFromFilter"
                               class="form-control"
                               uib-datepicker-popup="dd/MM/yyyy"
                               placeholder="DD/MM/YYYY"
                               max-date="dateTo"
                               close-text="Close"
                               ng-model="dateFrom"
                               show-weeks="true"
                               is-open="dateFromOpened"
                               ng-click="dateFromOpened = true"
                               filter-by="placed"
                               filter-type="dateFrom"
                               ng-blur="gridActions.filter()"
                               ng-focus="gridActions.filter()"
                               show-weeks="false"
                               close-text="Close"/>
                        <span class="input-group-btn">
                            <label for="dateFromFilter" class="btn btn-default">
                                <i class="fa fa-calendar"></i></label>
                          </span>
                    </div>
                </div>
            </div>

            <li>
                
                <div class="col-md-4">
                <div class="form-group">
                    <label for="dateToInput">Date To</label>

                    <div class="input-group">
                        <input type="text"
                               id="dateToInput"
                               class="form-control"
                               uib-datepicker-popup="dd/MM/yyyy"
                               placeholder="DD/MM/YYYY"
                               min-date="dateFrom"
                               max-date="dateTo"
                               close-text="Close"
                               ng-model="dateTo"
                               show-weeks="true"
                               is-open="dateToOpened"
                               ng-click="dateToOpened = true"
                               filter-by="placed"
                               filter-type="dateTo"
                               ng-blur="gridActions.filter()"
                               ng-focus="gridActions.filter()"
                               show-weeks="false"
                               close-text="Close">
                        <span class="input-group-btn">
                            <label for="dateToInput" class="btn btn-default">
                                <i class="fa fa-calendar"></i></label>
                          </span>
                    </div>
                </div>

            </li>  

                    </li> -->

                    <li>
                        <button type="submit" onclick="applyFilters()"> Apply Filters </button>
                    </li>
                </ul>
                <ul id="result" class="result-list"></ul>
            </div>
        </section>

<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Bru<span>zone</span></h3>

        <p class="footer-links">
          <a href="{{ route('dashboard') }}" class="link">HOME</a>
          
          <a href="#" class="link">ABOUT US</a>
        
          <a href="profiletest.html" class="link">MY ACCOUNT</a>
          
          <a href="Help/help.html" class="link">HELP</a>
          
        </p>

        <p class="footer-company-name">Bruzone © 2023</p>
      </div>


      <div class="footer-right">

        <p class="footer-company-about">
          <span></span>
          Life is short, so why not buy more.
        </p>

        <div class="footer-icons">

        <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="#"><i class="fas fa-envelope fa-lg"></i></a>
          <a href="#"><i class="fab fa-paypal fa-lg"></i></a>



        </div>

      </div>

    </footer>

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="./ecommerce.js"></script>
        <script src="script.js"></script>

        <script type="text/javascript">


const stores = [
  {
    name: "Comnet",
    category: "Electronics, Office equipment",
    location: "Brunei Muara",
    address: "Setia Kenangan Complex, Unit A1 and Unit A2, Ground Floor, Bandar Seri Begawan BE1518",
    imageUrl: "image/netcom.jpg",
    link: "{{ route('netcom.products') }}",
  },

    {
    name: "SiManja",
    category: "Petcare",
    location: "Brunei Muara",
    address: "Setia Kenangan Complex, Unit A1 and Unit A2, Ground Floor, Bandar Seri Begawan BE1518",
    imageUrl: "image/nimanjalogo.png",
    link: "{{ route('Nimanja') }}",
  },
  
  {
    name: "Digital Universe",
    category: "Electronics, Office equipment, apparel & accessories",
    location: "Brunei Muara",
    address: "Setia Kenangan Complex, Unit A1 and Unit A2, Ground Floor, Bandar Seri Begawan BE1518",
    imageUrl: "image/digital.jpg",
    link: "{{ route('digital') }}",
  },
  
  {
    name: "Defender",
    category: "Health personal care & beauty",
    location: "Brunei Muara",
    address: "Setia Kenangan Complex, Unit A1 and Unit A2, Ground Floor, Bandar Seri Begawan BE1518",
    imageUrl: "image/guardianlogo.jpg",
    link: "{{ route('Guardian') }}",
  },
  
  {
    name: "Route 66th",
    category: "Clothings",
    location: "Brunei Muara",
    address: "Setia Kenangan Complex, Unit A1 and Unit A2, Ground Floor, Bandar Seri Begawan BE1518",
    imageUrl: "image/88avenue.jpg",
    link: "{{ route('avenue') }}",
  },
  
  {
    name: "Game Side",
    category: "Electronics, Others",
    location: "Brunei Muara",
    address: "Setia Kenangan Complex, Unit A1 and Unit A2, Ground Floor, Bandar Seri Begawan BE1518",
    imageUrl: "image/gclogo.png",
    link: "{{ route('gamecentral') }}",
  },
  
];

// Function to display search results
function displayResults(results) {
  const ul = document.getElementById("result");
  ul.innerHTML = ""; // Clear previous results

  if (results.length === 0) {
    ul.innerHTML = "<li>No results found</li>";
  } else {
    results.forEach(function (store) {
      const li = document.createElement("li");
      const figure = document.createElement("figure");
      const img = document.createElement("img");
      const strong = document.createElement("strong");
      const categorySpan = document.createElement("span");
      const locationSpan = document.createElement("span");
      const addressSpan = document.createElement("span");

      img.src = store.imageUrl;
      strong.textContent = store.name;
      categorySpan.textContent = `Category: ${store.category}`;
      locationSpan.textContent = `Location: ${store.location}`;
      addressSpan.textContent = `Address: ${store.address}`;

      figure.appendChild(img);
      li.appendChild(figure);
      li.appendChild(strong);
      li.appendChild(categorySpan);
      li.appendChild(locationSpan);
      li.appendChild(addressSpan);
      ul.appendChild(li);
    });
  }
}


displayResults(stores);


const resultList = document.getElementById("result");
const listItems = resultList.querySelectorAll("li");

listItems.forEach((listItem, index) => {
  listItem.addEventListener("click", () => {
    
    const storeUrls = [
      "{{ route('netcom.products') }}", 
      "{{ route('Nimanja') }}", 
      "{{ route('digital') }}",
      "{{ route('Guardian') }}",
      "{{ route('avenue') }}",
      "{{ route('gamecentral') }}",
     
   
    ];

    
    if (index < storeUrls.length) {
      window.location.href = storeUrls[index];
    }
  });
});

/*-----------filter----------*/


function applyFilters() {
    
    const checkboxes = document.querySelectorAll('input[name="acs"]:checked');
    
   
    const selectedCategories = [];
    
    
    checkboxes.forEach((checkbox) => {
      selectedCategories.push(checkbox.value);
    });
    
    
    const resultList = document.getElementById("result");
    
    // Clear the existing results
    resultList.innerHTML = "";
    
    // Filter the stores based on the selected categories
    const filteredStores = stores.filter((store) => {
      const storeCategories = store.category.split(', '); 
      return selectedCategories.some(category => storeCategories.includes(category)) || selectedCategories.includes("all");
    });
    
   // Display the filtered stores in the result list
  filteredStores.forEach((store) => {
    const li = document.createElement("li");
    const figure = document.createElement("figure");
    const a = document.createElement("a"); // Create an anchor element
    const img = document.createElement("img");
    const strong = document.createElement("strong");
    const categorySpan = document.createElement("span");
    const locationSpan = document.createElement("span");
    const addressSpan = document.createElement("span");

    a.href = store.link; // Set the href attribute to the store's URL

    img.src = store.imageUrl;
    strong.textContent = store.name;
    categorySpan.textContent = `Category: ${store.category}`;
    locationSpan.textContent = `Location: ${store.location}`;
    addressSpan.textContent = `Address: ${store.address}`;

    a.appendChild(img); // Add the image to the anchor element
    figure.appendChild(a); // Add the anchor element to the figure

    li.appendChild(figure);
    li.appendChild(strong);
    li.appendChild(categorySpan);
    li.appendChild(locationSpan);
    li.appendChild(addressSpan);

    resultList.appendChild(li);
    });
}








/*-------searching-------*/
// Function to show search results
function showResults() {
  const searchBox = document.getElementById("search-box");
  const searchQuery = searchBox.value.toLowerCase().trim(); // Get and clean the search query

  // Get the result list element
  const resultList = document.getElementById("result");

  // Clear the existing results
  resultList.innerHTML = "";

  // Filter the stores based on the search query
  const filteredStores = stores.filter((store) => {
    return (
      store.name.toLowerCase().includes(searchQuery) ||
      store.category.toLowerCase().includes(searchQuery) ||
      store.location.toLowerCase().includes(searchQuery)
    );
  });

  // Display the filtered stores in the result list
  filteredStores.forEach((store) => {
       const li = document.createElement("li");
    const figure = document.createElement("figure");
    const a = document.createElement("a"); // Create an anchor element
    const img = document.createElement("img");
    const strong = document.createElement("strong");
    const categorySpan = document.createElement("span");
    const locationSpan = document.createElement("span");
    const addressSpan = document.createElement("span");

    a.href = store.link; // Set the href attribute to the store's URL

    img.src = store.imageUrl;
    strong.textContent = store.name;
    categorySpan.textContent = `Category: ${store.category}`;
    locationSpan.textContent = `Location: ${store.location}`;
    addressSpan.textContent = `Address: ${store.address}`;

    a.appendChild(img); // Add the image to the anchor element
    figure.appendChild(a); // Add the anchor element to the figure

    li.appendChild(figure);
    li.appendChild(strong);
    li.appendChild(categorySpan);
    li.appendChild(locationSpan);
    li.appendChild(addressSpan);

    resultList.appendChild(li);
  });
}





        </script>


</body>
</html>
