<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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


       <div id="map"></div>

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
        @foreach ($cart as $cartItem)
                @php
                $productPrice = $cartItem->product->price;
                $product = $cartItem->product;
                $newQuantity = $cartItem->quantity;
                $productPrice = $productPrice * $newQuantity;

                @endphp
                <li>
                    <div class="top">
                    <img src="image/{{ $cartItem->product->image_link }}">
                   
                        <div class="item-name">{{ $cartItem->product->name }}</div>
                        <div class="item-price">BND {{ $productPrice }}</div>
                        <div class="item-quantity">{{ $cartItem->quantity }} </div>
                    </div>
                </li>
                @endforeach
        </div>
    </div>
     <div class="finish">
      <div class="finaldetail">

        <div class="rightside">
      <h4><div id="finalTotal"></div>  </h4>
     <div id="fee"><h4>Delivery Fee: </div>  
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

    <div id="confirmationContainer">
         @foreach ($cart as $cartItem)
                @php
                $productPrice = $cartItem->product->price;
                $product = $cartItem->product;
                $newQuantity = $cartItem->quantity;
                $productPrice = $productPrice * $newQuantity;
                @endphp
                <li>
                    <div class="top">
                    <img src="image/{{ $cartItem->product->image_link }}">
                   
                        <div class="item-name">{{ $cartItem->product->name }}</div>
                        <div class="item-price">BND {{ $productPrice }}</div>
                        <div class="item-quantity">{{ $cartItem->quantity }} </div>
                    </div>
                </li>
                @endforeach
    </div>
     </div>

       <div class="finishcontainer" >
 <div class="purchase-complete-message">
    <h2>Purchase Completed</h2>
    <p>Your order has been successfully processed.</p>
    

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
    var currentStep = 1; 

    function updateFormVisibility() {
      
      $('.payment-method, .delivery-info, .finalpayment, .delivery-method, .calendar, .finish, #proceed, .finishcontainer').hide();

      
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

      
      if (selectedPaymentMethod === 'cash') {
        $('#paypal-button-container').hide();
        $('#proceed').show();
      } else {
        $('#paypal-button-container').show();
        $('#proceed').hide();
      }
    });
 var localTotalPay = localStorage.getItem('finalPay');
  function calculateLoyaltyPoints(localTotalPay) {
    
    
    var loyaltyGain =  (localTotalPay * 0.1).toFixed(2);
    console.log(loyaltyGain);
    localStorage.setItem('loyaltytest', loyaltyGain);
      
  }
      calculateLoyaltyPoints(localTotalPay)

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
     
      alert('Please complete the PayPal transaction before proceeding.');
    }
  } else {
    
  }
});

$('#proceedBtn').on('click', function() {



    
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

        
        var address = $('#Address').val();
        var city = $('#City').val();
        var district = $('#District').val();
        var zip = $('#Zip').val();
          
      var loyaltyPoints = localStorage.getItem('loyaltytest');
          document.getElementById("loyalty").innerHTML = `Loyalty Points Gained: ` + loyaltyPoints;
        if (address && city && district && zip) {
          
          currentStep++;
          updateFormVisibility();

           var totalPrice = calculateTotalAmount(cartItems);


        
        } else {
          
         
        }
      } else {
        alert('Please select a valid date and time.');
      }



  } else if (currentStep === 2) {
   
    var button = document.getElementById("nextBtn");
    var backBtn = document.getElementById("backBtn");

    backBtn.disabled = true;
    button.disabled = true;
  currentStep++;
      updateFormVisibility();
   
  }else if (currentStep === 2) {
  
  currentStep++;
      updateFormVisibility();
  
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

    
  updateFormVisibility();

    
  $('.method').on('click', function() {
    $('.method').removeClass('blue-border');
    $(this).addClass('blue-border');
  });

   
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


  function renderCart(cartItems) {
    const totalPriceElement = document.getElementById('totalPrice');
    const finalTotal = document.getElementById('finalTotal');
    const confirmationContainer = document.getElementById('confirmationContainer');
    const order = document.getElementById('order');
    
    
    let total = 0; // Initialize total to 0
    
     var scheduledDateTime = localStorage.getItem('scheduledDateTime');
   

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

      
      
    });
    var localTotalPrice = localStorage.getItem('totalPrice');
    var localTotalPay = localStorage.getItem('finalPay');
    // Display the total price
    totalPriceElement.textContent = `Total Price: BND $` + localTotalPrice;
    finalTotal.textContent =  `Total Price: BND $` + localTotalPrice;
    finishTotal.textContent = `Total Spent: BND $` + localTotalPay;


  }

  renderCart(cartItems);



const currentDate = new Date();
const currentYear = currentDate.getFullYear();
const currentMonth = (currentDate.getMonth() + 1).toString().padStart(2, '0');
const currentDay = currentDate.getDate().toString().padStart(2, '0');
const currentHours = currentDate.getHours().toString().padStart(2, '0');
const currentMinutes = currentDate.getMinutes().toString().padStart(2, '0');


const formattedDate = `${currentYear}-${currentMonth}-${currentDay}`;


const formattedTime = `${currentHours}:${currentMinutes}`;


document.getElementById('date1').value = formattedDate;
document.getElementById('time').value = formattedTime;


document.getElementById('date1').min = formattedDate;


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
    $('#proceedBtn').on('click', function() {
 
var button = document.getElementById("nextBtn");
    button.disabled = false;


var couponPointsGained = localStorage.getItem('loyaltytest');


if (couponPointsGained !== null && couponPointsGained !== undefined) {
   
    $.ajax({
        type: 'POST',
        url: '/update-coupon-point',
        data: {
            _token: '{{ csrf_token() }}',
            coupon_point: couponPointsGained, 
        },
        success: function (response) {
            
            
            
            axios.post('/place-order', {
                cart_items: cartItems,
                
            })
            .then(function (response) {
               
                
            })
            .catch(function (error) {
              
               
            });
        },
        error: function (error) {
           
            
        }
    });
} else {
   
    alert('Coupon point value not found in local storage');
}

        
  isPayPalTransactionComplete = true;
        
     
    
  });
    
  let isPayPalTransactionComplete = false;

paypal.Buttons({
  createOrder: function(data, actions) {
    
    return actions.order.create({
      purchase_units: [{
        amount: {
          value:parseFloat(localStorage.getItem('finalPay')),
        },
      }],
    });
  },
  onApprove: function(data, actions) {
    
    return actions.order.capture().then(function(details) {
      
      
var button = document.getElementById("nextBtn");
    button.disabled = false;


        

var couponPointsGained = localStorage.getItem('loyaltytest');


if (couponPointsGained !== null && couponPointsGained !== undefined) {
    
    $.ajax({
        type: 'POST',
        url: '/update-coupon-point',
        data: {
            _token: '{{ csrf_token() }}',
            coupon_point: couponPointsGained, 
        },
        success: function (response) {
            
            alert(response.message);
            
            axios.post('/place-order', {
                cart_items: cartItems,
                
            })
            .then(function (response) {
               
                alert(response.message);
            })
            .catch(function (error) {
                
                alert('Error placing the order');
            });
        },
        error: function (error) {
            
            alert('Error updating coupon points');
        }
    });
} else {
    
    alert('Coupon point value not found in local storage');
}

        
  isPayPalTransactionComplete = true;
        
    
    });
  },
}).render('#paypal-button-container');




</script>

<script>
    @php
        // Initialize an associative array to store unique storeValues for each storeId
        $uniqueStoreValues = [];
        // Initialize a variable to store the total sum
        $totalSum = 0;
    @endphp

    @foreach ($cart as $cartItem)
        @php
            // Get the current store_id
            $storeId = $cartItem->product->store_id;

            // Define values based on store_id using a switch statement
            switch ($storeId) {
                case 1:
                    $storeValue = 2;
                    break;
                case 2:
                    $storeValue = 3;
                    break;
                case 3:
                    $storeValue = 4;
                    break;
                case 4:
                    $storeValue = 5;
                    break;
                case 5:
                    $storeValue = 6;
                    break;
                case 6:
                    $storeValue = 7;
                    break;
                default:
                    $storeValue = 0; // Set a default value for unknown store_ids
            }

            // Add the current storeValue to the total sum only if it's not already added
            if (!isset($uniqueStoreValues[$storeId])) {
                $totalSum += $storeValue;
                // Mark the storeValue as added in the associative array
                $uniqueStoreValues[$storeId] = true;
            }
        @endphp

        console.log('{{ $storeValue }}');
        console.log('{{ $totalSum }}');
    @endforeach

    // Store the total sum in the local storage
   
        localStorage.setItem('deliveryTotal', {{ $totalSum }});
    
</script>

<script>
  const deliveryFee = localStorage.getItem('deliveryTotal');
  const storeName = localStorage.getItem('storename');

 
  const feeDiv = document.getElementById('fee');

  if (deliveryFee) {

    feeDiv.innerHTML = `<h4>Delivery Fee: BND ${deliveryFee}</h4>`;
  } else {
   
    feeDiv.innerHTML = "<h4>Delivery Fee not found</h4>";
  }


  function updateTotalPriceAndDeliveryFee() {
  
  
const totalAmount = parseFloat(localStorage.getItem('totalPrice')) 
   
  const deliveryFee = parseFloat(localStorage.getItem('delivery')) || 0;

      const testPay = totalAmount + deliveryFee;
 
  const finalPay = totalAmount + deliveryFee - {{ auth()->user()->redeem_coupon }};

  
  document.getElementById('pay').innerHTML = `<h4>Final Total: BND ${finalPay.toFixed(2)}`;
  

  
  localStorage.setItem('finalPay', finalPay.toFixed(2));
}


updateTotalPriceAndDeliveryFee();

 $(document).ready(function () {
        $('#update-loyalty-points-form').submit(function (e) {
            e.preventDefault();

            const loyaltyPoints = $('#loyalty-points-input').val(); 

            $.ajax({
                type: 'POST',
                url: '/update-loyalty-points',
                data: {
                    _token: '{{ csrf_token() }}', 
                    loyaltyPoints: loyaltyPoints
                },
                success: function (response) {
                    
                    alert(response.message);
                },
                error: function (error) {
                    
                    alert('Error updating coupon points');
                }
            });
        });
    });
   

</script>
 <script>
        
        var map = L.map('map').setView([0, 0], 13);

       
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        
        var lat = parseFloat(localStorage.getItem('latitude')) || 0; 
        var lon = parseFloat(localStorage.getItem('longitude')) || 0; 

        
        var marker = L.marker([lat, lon]).addTo(map);
        marker.bindPopup("Your location");

        
        map.setView([lat, lon], 13);
    </script>





</body>
</html>
