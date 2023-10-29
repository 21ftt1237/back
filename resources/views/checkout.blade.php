<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://www.paypal.com/sdk/js?client-id=AbfSKtq4IG8wjTV4J_w-GZw8Ld5ReBn5ZYxeE3SeC_PlRHbXgf1SyDMh5pW8nEfWzu1i7UMk0T-u9qXV"></script>

  <style type="text/css">
    /*
--- Basic Styling
*/

    * {
      box-sizing: border-box;
    }

    html,
    body {
      font-family: 'Montserrat', sans-serif;
      display: flex;
      width: 100%;
      height: 100%;
      background: #f4f4f4;
      justify-content: center;
      align-items: center;
    }

/*
--- Checkout Panel
*/
    .checkout-panel {
      display: flex;
      flex-direction: column;
      width: 940px;
      height: 766px;
      background-color: rgb(255, 255, 255);
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
    }

/* Panel Body */
.panel-body {
  padding: 45px 80px 0;
  flex: 1;
}

.title {
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 40px;
  color: #2e2e2e;
}

/* Progress Bar */
.progress-bar {
  display: flex;
  margin-bottom: 50px;
  justify-content: space-between;
}

.step {
  box-sizing: border-box;
  position: relative;
  z-index: 1;
  display: block;
  width: 25px;
  height: 25px;
  margin-bottom: 30px;
  border: 4px solid #fff;
  border-radius: 50%;
  background-color: #efefef;
}

.step:after {
  position: absolute;
  z-index: -1;
  top: 5px;
  left: 22px;
  width: 225px;
  height: 6px;
  content: '';
  background-color: #efefef;
}

.step:before {
  color: #2e2e2e;
  position: absolute;
  top: 40px;
}

.step:last-child:after {
  content: none;
}

.step.active {
  background-color: #f62f5e;
}
.step.active:after {
  background-color: #f62f5e;
}
.step.active:before {
  color: #f62f5e;
}

.step.active + .step {
  background-color: #f62f5e;
}
.step.active + .step:before {
  color: #f62f5e;
}

.step:nth-child(1):before {
  content: 'Delivery';
}
.step:nth-child(2):before {
  right: -40px;
  content: 'Confirmation';
}
.step:nth-child(3):before {
  right: -30px;
  content: 'Payment';
}
.step:nth-child(4):before {
  right: 0;
  content: 'Finish';
}

/* Payment Method */
.payment-method {
  display: flex;
  margin-bottom: 60px;
  justify-content: space-between;
}

.delivery-method {
  display: flex;
  margin-bottom: 60px;
  justify-content: space-between;
}

.method {
  display: flex;
  flex-direction: column;
  width: 382px;
  height: 122px;
  padding-top: 20px;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: rgb(249, 249, 249);
  justify-content: center;
  align-items: center;
}

.blue-border {
  border: 1px solid rgb(110, 178, 251);
}

.card-logos {
  display: flex;
  width: 150px;
  justify-content: space-between;
  align-items: center;
}

.radio-input {
  margin-top: 20px;
}

input[type='radio'] {
  display: inline-block;
}

/* Delivery Info */
.delivery-info {
 /* display: flex;
  flex-wrap: wrap;*/
  margin-bottom: 50px;
}

.delivery-info label {
  flex: 1;
  margin-bottom: 10px;
  color: #b4b4b4;
}

.delivery-info input[type='text'] {
  flex: 1;
  font-size: 16px;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: rgba(46, 46, 46, .8);
  border: 1px solid rgb(225, 225, 225);
  border-radius: 4px;
  outline: none;
  margin-right: 10px; /* Add spacing between input fields */
}

.delivery-info label,
.delivery-info input[type='text'] {
  margin-bottom: 15px;
  margin-top: 15px;
}



/* Input Fields */
.input-fields {
  display: flex;
  justify-content: space-between;
}

.input-fields label {
  display: block;
  margin-bottom: 10px;
  color: #b4b4b4;
}

.warning {
  border-color: #f62f5e !important;
}

.info {
  font-size: 12px;
  font-weight: 300;
  display: block;
  margin-top: 50px;
  opacity: .5;
  color: #2e2e2e;
}

div[class*='column'] {
  width: 382px;
}

input[type='text'],
input[type='password'] {
  font-size: 16px;
  width: 100%;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: rgba(46, 46, 46, .8);
  border: 1px solid rgb(225, 225, 225);
  border-radius: 4px;
  outline: none;
}

input[type='text']:focus,
input[type='password']:focus {
  border-color: rgb(119, 219, 119);
}

#date { background: url(img/icons_calendar_black.png) no-repeat 90%; }
#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
#verification { background: url(img/icons_lock_black.png) no-repeat 90%; }

.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}

.small-inputs div {
  width: 182px;
}

/* Panel Footer */
.panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  background-color: black;
  justify-content: space-between;
  align-items: center;
}

/* Buttons */
.btn {
  font-size: 16px;
  width: 163px;
  height: 48px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;
}

.back-btn {
  color: black;
  background: yellow;
}

.next-btn {
  color: black;
  background: yellow;
}

.btn:focus {
  outline: none;
}

.btn:hover {
  transform: scale(1.1);
}

</style>
<meta name="robots" content="noindex,follow" />
</head>
<body>

  <div class="checkout-panel">
    <div class="panel-body panel-body-height">
      <h2 class="title">Checkout</h2>

      <div class="progress-bar">
        <div class="step step-1 "></div>
        <div class="step step-2 "></div>
        <div class="step step-3"></div>
        <div class="step step-4"></div>
      </div>

      <div class="payment-method">
        

        <label for="paypal" class="method paypal">
          <img src="img/paypal_logo.png"/>
          <div class="radio-input" >
            <input id="paypal" type="radio" name="payment" value="paypal">
            Pay with PayPal
          </div>
        </label>

         <label for="cash" class="method cash">
          <img src="img/cash.png"/>
          <div class="radio-input">
            <input id="cash" type="radio" name="payment" value="cash">
            Pay with Cash
          </div>
        </label>
      </div>


       <div class="delivery-method">
        
        <label for="deli" class="method deli">
          <div class="deli-logos">
            <img src="img/leave.png"/>
            
          </div>

          <div class="radio-input">
            <input id="deli" type="radio" name="payment">
            Leave
          </div>
        </label>

        <label for="receive" class="method receive">
          <img src="img/receive.png"/>
          <div class="radio-input">
            <input id="receive" type="radio" name="payment">
            Receive
          </div>
        </label>
      </div>

       <div class="delivery-info valid">
       <label for="Address" >Address</label>
       <input type="text" id="Address" value="Politeknik Brunei OSP" />

       <label for="City">City</label>
       <input type="text" id="City" value="Bandar Seri Begawan" />

       <label for="District">District</label>
       <input type="text" id="District"  value="Brunei Muara" />

       <label for="Zip">Zip Code</label>
       <input type="text" id="Zip" value="BA1311" />

       <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.208276346985!2d114.93045857588197!3d4.904779039852721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3222f53a5d975483%3A0xb7537ecd6404fef7!2sPoliteknik%20Brunei%20(Main%20Campus)!5e0!3m2!1sen!2sbn!4v1697178517192!5m2!1sen!2sbn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

       <!-- <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3975.229542262243!2d114.92832122588206!3d4.901205939884869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3222f549ae428df9%3A0x2899e46367ef25a9!2sNetcom%20Computer%20House%2C%20Kiulap%2C%20Setia%20Kenangan%20Complex%2C%20Bandar%20Seri%20Begawan!3m2!1d4.90083!2d114.9255384!4m5!1s0x3222f53a5d975483%3A0xb7537ecd6404fef7!2sPoliteknik%20Brunei%20(Main%20Campus)%2C%20Ong%20Sum%20Ping%20Apartment%20Complex%2C%20Bandar%20Seri%20Begawan!3m2!1d4.9047737!2d114.9330335!5e0!3m2!1sen!2sbn!4v1698162740543!5m2!1sen!2sbn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
     </div>

      
   <div class="calendar">
  <div class="date-container"> 
    <label for="date">Date</label>
    <input type="date" id="date1" placeholder="Date" min="yyyy-MM-dd" />

  </div>
  <div class="time-container">
    <label for="time">Time</label>
   <input type="time" id="time" class="time-picker" min="HH:mm" />

  </div>
</div>
  
  <div class="final">
 

 <div class="finalpayment">
    <div id="order">
       
        </div>
    </div>
     <div class="finish">
      <div class="finaldetail">

        <div class="rightside">
      <h4><div id="finalTotal"></div>  </h4>
     <div id="fee"><h4>Delivery Fee: BND 5</div>  
     <div id="coupon"><h4>Coupon: ${{ auth()->user()->redeem_coupon}} off</div>  

    <div id="pay"><h4>Final Total: </div>  
    <div id="paypal-button-container"></div>
    <div id="proceed"><a href="#" id="proceedBtn" class="proceed-button">Proceed with Order</a></div>
  </div>
    </div>

  </div>
</div>

     <div class="confirmation valid" >

    <div id="totalPrice" style="margin-bottom: 15px;">Total Price: BND 0.00</div>
    <div id="scheduledDeli" class="delivery-time">Scheduled On: </div>

    <div id="confirmationContainer"></div>
     </div>

       <div class="finishcontainer" >
 <div class="purchase-complete-message">
    <h2>Purchase Completed</h2>
    <p>Your order has been successfully processed.</p>
    <p id="finishstore">Store: </p>

    <p id="finishtime">Order Made on: </p>

    <p id="finishTotal">Total Spent: </p>

    <h3 id="loyalty"></h3>

    <a href="{{ route('dashboard') }}"><h4 id="homepage">Back To Homepage</h3></a>
  </div>
     </div>

    
  </div>

  <div class="panel-footer">
    <button class="btn back-btn" id="backBtn">Back</button>
    <button class="btn next-btn" id="nextBtn">Next Step</button>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script >

  $(document).ready(function() {
    var currentStep = 1; // Initialize the current step

    function updateFormVisibility() {
      // Hide all form sections
      $('.payment-method, .delivery-info, .finalpayment, .delivery-method, .calendar, .finish, #proceed, .finishcontainer').hide();

      // Show the appropriate section based on the current step
      if (currentStep === 1) {
        $('.progress-bar .step').removeClass('active');

        $('.confirmation').hide();
        $('.delivery-method').show();
        $('.calendar').show();
        $('.delivery-info').show();
        
        $('.checkout-panel').removeClass('step-1 step-2 step-3 step-4').addClass('step-1');

      } else if (currentStep === 2) {
        $('.progress-bar .step').removeClass('active');

        $('.confirmation').show();
        $('.progress-bar .step.step-1').addClass('active');

        $('.checkout-panel').removeClass('step-1 step-2 step-3 step-4').addClass('step-2');
      } else if (currentStep === 3) {
       $('.progress-bar .step').removeClass('active');
       $('.payment-method').show();
       $('.finalpayment').show();
       $('.confirmation').hide();
       $('.finish').show();
       $('.progress-bar .step.step-1').addClass('active');
       $('.progress-bar .step.step-2').addClass('active');
       
       $('.checkout-panel').removeClass('step-1 step-2 step-3 step-4').addClass('step-3');
     }else if (currentStep === 4) {
      $('.progress-bar .step').removeClass('active');
      $('.confirmation').hide();
      
      $('.finishcontainer').show();
      $('.progress-bar .step.step-1').addClass('active');
      $('.progress-bar .step.step-2').addClass('active');
      $('.progress-bar .step.step-3').addClass('active');

      $('.checkout-panel').removeClass('step-1 step-2 step-3 step-4').addClass('step-4');
    }

  }

      $('input[name="payment"]').on('change', function() {
      var selectedPaymentMethod = $('input[name="payment"]:checked').val();

      // Check the selected payment method and show/hide the PayPal section accordingly
      if (selectedPaymentMethod === 'cash') {
        $('#paypal-button-container').hide();
        $('#proceed').show();
      } else {
        $('#paypal-button-container').show();
        $('#proceed').hide();
      }
    });
 
  function calculateLoyaltyPoints(totalPrice) {
    // Calculate 10% of the total price as loyalty points
    return (totalPrice * 0.1).toFixed(2);
  }

$('.next-btn').on('click', function(e) {
  e.preventDefault();

  if (currentStep === 3) {
   
    if (isPayPalTransactionComplete) {
      localStorage.removeItem('cartItems');
      currentStep++; // Proceed to the next step
       var button = document.getElementById("nextBtn");
    button.disabled = false;
      updateFormVisibility();
    } else {
      // Show an error message or handle the case where the transaction is not complete
      alert('Please complete the PayPal transaction before proceeding.');
    }
  } else {
    // Handle other steps as needed
  }
});

$('#proceedBtn').on('click', function() {

    // Retrieve the CSRF token value from a meta tag in your HTML
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Prepare the data to send
const data = {
  cartItems: storedCartItems,
};

// Create the Fetch POST request
fetch(apiUrl, {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'X-CSRF-TOKEN': csrfToken, // Include the CSRF token in the request headers
  },
  body: JSON.stringify(data),
})
  .then(response => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error('Failed to send data to the server');
    }
  })
  .then(responseData => {
    console.log('Server response:', responseData);
  })
  .catch(error => {
    console.error('Error:', error);
  });

    
    localStorage.removeItem('cartItems');

    
  });
    
 $('.next-btn, #proceedBtn').on('click', function(e) {
      e.preventDefault();

   if (currentStep === 1) {
      var selectedDate = $('#date1').val();
      var selectedTime = $('#time').val();

      if (selectedDate && selectedTime) {
        var scheduledDateTime = selectedDate + ' ' + selectedTime;

        localStorage.setItem('scheduledDateTime', scheduledDateTime);
        var scheduledDateTime = localStorage.getItem('scheduledDateTime');
        

        document.getElementById('scheduledDeli').textContent = 'Scheduled On: ' + scheduledDateTime;

        // Check if the address fields are filled out
        var address = $('#Address').val();
        var city = $('#City').val();
        var district = $('#District').val();
        var zip = $('#Zip').val();

        if (address && city && district && zip) {
          // Proceed to the next step
          currentStep++;
          updateFormVisibility();

           var totalPrice = calculateTotalAmount(cartItems);
          var loyaltyPoints = calculateLoyaltyPoints(totalPrice);
          document.getElementById('loyalty').textContent = `Loyalty Points Gained: ${loyaltyPoints}`;
        } else {
          // Show an error message or handle validation failure
          alert('Please fill out all address fields.');
        }
      } else {
        alert('Please select a valid date and time.');
      }



  } else if (currentStep === 2) {
    // Get the scheduled date and time from local storage
    // var scheduledDateTime = localStorage.getItem('scheduledDateTime');
    // var [scheduledDate, scheduledTime] = scheduledDateTime.split(' ');
    var button = document.getElementById("nextBtn");
    var backBtn = document.getElementById("backBtn");

    backBtn.disabled = true;
    button.disabled = true;
  currentStep++;
      updateFormVisibility();
    // Update the delivery time div
    // document.getElementById('scheduledDeli').textContent = 'Scheduled On: ' + scheduledDateTime;
  }else if (currentStep === 2) {
    // Get the scheduled date and time from local storage
    // var scheduledDateTime = localStorage.getItem('scheduledDateTime');
    // var [scheduledDate, scheduledTime] = scheduledDateTime.split(' ');
  currentStep++;
      updateFormVisibility();
    // Update the delivery time div
    // document.getElementById('scheduledDeli').textContent = 'Scheduled On: ' + scheduledDateTime;
  }


   else if (currentStep < 4) {
      currentStep++;
      updateFormVisibility();
    }
  });

    
  $('.back-btn').on('click', function() {
    if (currentStep > 1) {
      currentStep--;
      updateFormVisibility();
    }
  });

    // Initial form visibility
  updateFormVisibility();

    // Radio box border
  $('.method').on('click', function() {
    $('.method').removeClass('blue-border');
    $(this).addClass('blue-border');
  });

    // Validation
  var $cardInput = $('.valid input');

  $('.next-btn').on('click', function(e) {
    $cardInput.removeClass('warning');

    $cardInput.each(function() {
      var $this = $(this);

      if (!$this.val()) {
        $this.addClass('warning');
      }
    });

     
    if (currentStep === 1 && !$cardInput.hasClass('warning')) {
      currentStep = 2;
      updateFormVisibility();
    }
  });
});



</script>
<script>
  const confirmationContainer = document.getElementById('confirmationContainer');

  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

  function removeFromCart(index) {
    const confirmDelete = confirm('Are you sure you want to remove this item from your cart?');
    if (confirmDelete) {
      cartItems = cartItems.filter((_, i) => i !== index);
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      renderCart(cartItems);
      updateTotalPriceAndDeliveryFee();
    }
  }

  function incrementQuantity(index) {
    cartItems[index].quantity++;
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    renderCart(cartItems);
    updateTotalPriceAndDeliveryFee();
  }

  function decrementQuantity(index) {
    if (cartItems[index].quantity > 1) {
      cartItems[index].quantity--;
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      renderCart(cartItems);
    } else {
      const confirmDelete = confirm('Are you sure you want to remove this item from your cart?');
      if (confirmDelete) {
        cartItems = cartItems.filter((_, i) => i !== index);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        renderCart(cartItems);
        updateTotalPriceAndDeliveryFee();
      }
    }
  }

  // function calculateTotalPrice(item) {
  //   return item.price * item.quantity; 
  // }

  function renderCart(cartItems) {
    const totalPriceElement = document.getElementById('totalPrice');
    const finalTotal = document.getElementById('finalTotal');
    const confirmationContainer = document.getElementById('confirmationContainer');
    const order = document.getElementById('order');
    confirmationContainer.innerHTML = '';
    order.innerHTML = '';
    let total = 0; // Initialize total to 0
    
     var scheduledDateTime = localStorage.getItem('scheduledDateTime');
    // var [scheduledDate, scheduledTime] = scheduledDateTime.split(' ');

    // Update the delivery time div
    document.getElementById('scheduledDeli').textContent = 'Scheduled On: ' + scheduledDateTime;
    document.getElementById('finishtime').textContent = 'Order Made On: ' + scheduledDateTime;

    cartItems.forEach((item, index) => {
      const itemDiv = document.createElement('div');
      itemDiv.classList.add('cartItems');
      itemDiv.innerHTML = `
        <div class="top">
          <img src="image/${item.image}" alt="${item.name}">
          <div class="item-name">${item.name}</div>
          <div class="item-price">BND ${calculateTotalPrice(item).toLocaleString()}</div>
          <div class="item-quantity">
            <button class="quantity-btn" onclick="decrementQuantity(${index})">-</button>
            <span>${item.quantity}</span>
            <button class="quantity-btn" onclick="incrementQuantity(${index})">+</button>
          </div>
         
      `;
      confirmationContainer.appendChild(itemDiv);

      // Add the price of the current item to the total
      total += calculateTotalPrice(item);
    });


cartItems.forEach((item, index) => {
      const itemDiv = document.createElement('div');
      itemDiv.classList.add('cartItems');
      itemDiv.innerHTML = `
        <div class="top">
          <img src="image/${item.image}" alt="${item.name}">
          <div class="item-name">${item.name}</div>
          <div class="item-price">BND ${calculateTotalPrice(item).toLocaleString()}</div>
          
            <div class = "item-quantity">${item.quantity}</div>
            
         
      `;
      order.appendChild(itemDiv);

      // Add the price of the current item to the total
      
    });

    // Display the total price
    totalPriceElement.textContent = `Total Price: BND ${total.toFixed(2)}`;
    finalTotal.textContent = `Total Price: BND ${total.toFixed(2)}`;
    finishTotal.textContent = `Total Spent: BND ${total.toFixed(2)}`;


  }

  renderCart(cartItems);



const currentDate = new Date();
const currentYear = currentDate.getFullYear();
const currentMonth = (currentDate.getMonth() + 1).toString().padStart(2, '0');
const currentDay = currentDate.getDate().toString().padStart(2, '0');
const currentHours = currentDate.getHours().toString().padStart(2, '0');
const currentMinutes = currentDate.getMinutes().toString().padStart(2, '0');

// Format the date in YYYY-MM-DD format
const formattedDate = `${currentYear}-${currentMonth}-${currentDay}`;

// Format the time in HH:MM format
const formattedTime = `${currentHours}:${currentMinutes}`;

// Set the default values in the date and time input fields
document.getElementById('date1').value = formattedDate;
document.getElementById('time').value = formattedTime;

// Set the minimum date for the date input field (current date)
document.getElementById('date1').min = formattedDate;

// Set the minimum time for the time input field (current time)
document.getElementById('time').min = formattedTime;

function calculateTotalAmount(cartItems) {
  let total = 0;
  cartItems.forEach((item) => {
    total += calculateTotalPrice(item);
  });
  return total;
}

function calculateTotalPrice(item) {
  return item.price * item.quantity;
}


</script>

<script>
  let isPayPalTransactionComplete = false;

paypal.Buttons({
  createOrder: function(data, actions) {
    // Set up the transaction details
    return actions.order.create({
      purchase_units: [{
        amount: {
          value:calculateTotalAmount(cartItems).toFixed(2),
        },
      }],
    });
  },
  onApprove: function(data, actions) {
    // Capture the funds from the transaction
    return actions.order.capture().then(function(details) {
      // Handle a successful payment
      alert('Transaction completed by ' + details.payer.name.given_name);
var button = document.getElementById("nextBtn");
    button.disabled = false;

      
        
  isPayPalTransactionComplete = true;
      // Trigger the next step of your checkout process here
      // For example, you can call a function to proceed to the next step.
      // proceedToNextStep();
    });
  },
}).render('#paypal-button-container');

// function proceedToNextStep() {
//   // Add code here to move to the next step of your checkout process.
//   // You can update the 'currentStep' variable, update the form visibility, or perform any other necessary actions.
//   currentStep = 3; // For example, proceed to step 3
//   updateFormVisibility(); // Update the form visibility
// }


</script>



<script>
  const deliveryFee = localStorage.getItem('delivery');
  const storeName = localStorage.getItem('storename');

  const store = document.getElementById('finishstore');
  const feeDiv = document.getElementById('fee');

  if (deliveryFee) {

    feeDiv.innerHTML = `<h4>Delivery Fee: BND ${deliveryFee}</h4>`;
  } else {
   
    feeDiv.innerHTML = "<h4>Delivery Fee not found</h4>";
  }

    if (storeName) {

    store.innerHTML = `Store: ${storeName}`;
  } 

  function updateTotalPriceAndDeliveryFee() {
  // Calculate the total price from the cart items
  const totalAmount = calculateTotalAmount(cartItems);

  // Retrieve the delivery fee from the HTML
  const deliveryFee = parseFloat(localStorage.getItem('delivery')) || 0;

  // Calculate the final total by adding the total amount and the delivery fee
  const finalTotal = totalAmount + deliveryFee - {{ auth()->user()->redeem_coupon }};

  
  document.getElementById('pay').innerHTML = `<h4>Final Total: BND ${finalTotal.toFixed(2)}`;
  

  // Store the final total in local storage (if needed)
  localStorage.setItem('finalTotal', finalTotal.toFixed(2));
}

// Call the function to update the total price and delivery fee
updateTotalPriceAndDeliveryFee();





    

</script>




</body>
</html>
