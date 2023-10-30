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

    </style>
</head>
<body>
    <div class="my-orders">My Orders</div>
    <!-- <div class="line"></div> -->

    <div class="container">
        <div class="searchInputWrapper">
            <input class="searchInput" type="text" placeholder='Search your orders'>
            <i class="searchInputIcon fa fa-search"></i>
        </div>
    </div>

    <div class="go-back-button" id="goBackButton">
    Go Back
</div>

    
    <div class="data">
        <div class="eclipse-container">
            <div class="eclipse">
                <img src="https://scontent.fbwn2-1.fna.fbcdn.net/v/t39.30808-6/326250746_3465374533787443_7101925948332707034_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=MfI3TU690BoAX81Vmwr&_nc_ht=scontent.fbwn2-1.fna&oh=00_AfDTpS54MEqRWlaL42ou4d2Pss5xPF5Qjd2zaydP_4-91w&oe=64F0B4CA" alt="Image">
            </div>
        </div>
        <div class="details-container">
            <div>ACER ASPIRE3 A315-510P-C46E N100 - SILVER</div>
            <div>Tuesday, August 8</div>
            <div class="details-box" id="detailbox1">Details</div>
            <div class="price">BND488.00</div>
        </div>
    </div>
    

    
    <div class="data">
        <div class="eclipse-container">
            <div class="eclipse">
                <img src="https://scontent.fbwn2-1.fna.fbcdn.net/v/t39.30808-6/326409933_491893796428416_1274825713779803813_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=imRFngPhDKAAX-_GKb_&_nc_ht=scontent.fbwn2-1.fna&oh=00_AfA4LdXwwE2opIikjk2kaDLVb5EFfVk-CWPQ363vSIkp4w&oe=64EF406B" alt="Image">
            </div>
        </div>
        <div class="details-container">
            <div>Whole Grilled Chicken</div>
            <div>Wednesday, August 9</div>
            <div class="details-box" id="detailbox2">Details</div>
            <div class="price">BND9.90</div>
        </div>
    </div>
    

        
    <div class="data">
        <div class="eclipse-container">
            <div class="eclipse">
                <img src="https://scontent.fbwn2-1.fna.fbcdn.net/v/t39.30808-6/327188519_581867273354817_1746211501050348098_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=C1rkzqaj6X8AX_SGhkK&_nc_ht=scontent.fbwn2-1.fna&oh=00_AfAxetOBelTxUGK386wUoH0S40rVb8sWhs-7wf4WzaliEQ&oe=64EF7017" alt="Image">
            </div>
        </div>
        <div class="details-container">
            <div>WATSONS SHOWER SCRUB - GREEN TEA 700ML</div>
            <div>Saturday, August 12</div>
            <div class="details-box" id="detailbox3">Details</div>
            <div class="price">BND4.50</div>
        </div>
    </div>
    
    <!-- Add a modal popup container -->
      <div class="popup" id="popup1">
          <div class="popup-content">
              <div class="popup-close" onclick="closePopup('popup1')">&times;</div>
              <!-- Popup content goes here -->
              <h2>ACER ASPIRE3 A315-510P-C46E N100 - SILVER</h2>
              <p>Purchase Date: Tuesday, August 8 2023</p>
              <p>Additional details: The ACER ASPIRE3 A315-510P-C46E N100 is a versatile laptop designed for everyday use. It features a sleek silver finish that adds a touch of elegance to its appearance.</p>
                <p>Equipped with a powerful Intel Core i5 processor and 8GB of RAM, this laptop delivers smooth multitasking and efficient performance. The 15.6-inch HD display offers clear visuals for work and entertainment.</p>
                <p>Storage won't be an issue with the spacious 512GB SSD, providing ample space for your documents, photos, and videos. The laptop also comes with a variety of ports for connectivity and an integrated webcam for video conferencing.</p>
              <p>Price: BND488.00</p>
          </div>
      </div>

      <div class="popup" id="popup2">
          <div class="popup-content">
              <div class="popup-close" onclick="closePopup('popup2')">&times;</div>
              <!-- Popup content goes here -->
              <h2>Whole Grilled Chicken</h2>
              <p>Purchase Date: Wednesday, August 9 2023</p>
              <p>Additional details: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista probare, quae sunt a te dicta? Refert tamen, quo modo.</p>
              <p>Price: BND9.90</p>
          </div>
      </div>

      <div class="popup" id="popup3">
          <div class="popup-content">
              <div class="popup-close" onclick="closePopup('popup3')">&times;</div>
              <!-- Popup content goes here -->
               <h2>WATSONS SHOWER SCRUB - GREEN TEA 700ML</h2>
              <p>Purchase Date: Saturday, August 12 2023</p>
              <p>Additional details: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonne merninisti licere mihi ista probare, quae sunt a te dicta? Refert tamen, quo modo.</p>
              <p>Price: BND4.50</p>
          </div>
      </div>


     <script>
        const searchInput = document.querySelector('.searchInput');
        const detailsContainers = document.querySelectorAll('.data');

        searchInput.addEventListener('keyup', filterOrders);
        document.querySelector('.searchInputIcon').addEventListener('click', filterOrders);

        function filterOrders(event) {
            if (event && event.key !== 'Enter' && event.type !== 'click') {
                return;
            }

            const searchTerm = searchInput.value.toLowerCase();

            detailsContainers.forEach(container => {
                const productTitle = container.querySelector('.details-container > div:nth-child(1)').textContent.toLowerCase();

                if (productTitle.includes(searchTerm)) {
                    container.style.display = 'flex';
                } else {
                    container.style.display = 'none';
                }
            });
        }

        const detailsBoxes = document.querySelectorAll('.details-box');
        detailsBoxes.forEach((box, index) => {
            const popupId = 'popup' + (index + 1);
            box.addEventListener('click', () => openPopup(popupId));
        });

        function openPopup(popupId) {
            const popup = document.getElementById(popupId);
            popup.style.display = 'block';
        }

        function closePopup(popupId) {
            const popup = document.getElementById(popupId);
            popup.style.display = 'none';
        }

        const goBackButton = document.getElementById('goBackButton');

        let showingSearchResults = false; // Flag to track search results display

        goBackButton.addEventListener('click', () => {
            // Clear search input and show all data
            searchInput.value = '';
            filterOrders({ key: 'Enter' }); // Simulate pressing Enter to trigger filtering
            goBackButton.style.display = 'none'; // Hide the button again
            showingSearchResults = false; // Reset the flag
        });

        function filterOrders(event) {
            if (event && event.key !== 'Enter' && event.type !== 'click') {
                return;
            }

            const searchTerm = searchInput.value.toLowerCase();

            detailsContainers.forEach(container => {
                const productTitle = container.querySelector('.details-container > div:nth-child(1)').textContent.toLowerCase();

                if (productTitle.includes(searchTerm)) {
                    container.style.display = 'flex';
                } else {
                    container.style.display = 'none';
                }
            });

            // Show/hide "Go Back" button based on search results
            if (searchTerm.trim() === '') {
                goBackButton.style.display = 'none';
                showingSearchResults = false;
            } else {
                goBackButton.style.display = 'block';
                showingSearchResults = true;
            }
        }

        // Show/hide "Go Back" button based on the flag
        searchInput.addEventListener('input', () => {
            if (showingSearchResults) {
                goBackButton.style.display = 'block';
            } else {
                goBackButton.style.display = 'none';
            }
        });
    </script>

</body>
</html>
