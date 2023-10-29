<!DOCTYPE html>
<html>
<head>
  <title>BruZone CS FAQ</title>
  <style>
    .header {
      color: #1E1E1E;
      text-align: center;
      font-family: Imprima, sans-serif;
      font-size: 45px;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      margin-top: 20px;
    }

    .box {
      width: 180px;
      height: 150px;
      flex-shrink: 0;
      border: 1px solid #4A4849;
      background: #D9D9D9;
      margin: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .box img {
      max-width: 80px;
      max-height: 80px;
    }

    .label {
      margin-top: 10px;
      text-align: center;
      font-size: 14px;
      color: #1E1E1E;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      max-width: 1300px;
      margin: 0 auto;
      padding: 40px;
      overflow-x: auto; /* Enable horizontal scrolling if boxes exceed container width */
    }

  .collapsible {    
  background-color: #D9D9D9;
  color: black;
  cursor: pointer;
  padding: 20px;
  width: 100%;
  border: 1px black;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #F6E71D;
}

.content {
  padding: 0 18px;
  max-height: 0;
   overflow-y: auto;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

.box {
      /* ... existing styles ... */
      cursor: pointer; /* Add this to make the box clickable */
    }

    .box:hover {
      background-color: #F6E71D; /* Change color on hover */
    }

    .box.active {
      background-color: #F6E71D;
    }

    /* Add this style to highlight active box */
    .active {
      background-color: #F6E71D;
    }

    
    /*NAVBAR START*/

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


/*NAVBAR ENDS*/


  </style>

</head>
<!-- NAVBAR -->

  <header>
  


        <div class="navbar">

           <div class="logo" id="storeName" data-value="2"><a href="#">EMAIL</a></div>

            <div class="search">
                <input type="text" placeholder="search products" id="input">
                <ion-icon class="s" name="search"></ion-icon>
            </div>

               <div class="shopping">
          <img src="../image/shoppingCart.png">
          <span class="quantity">0</span>
      </div>
        <div class="wishlist">
            <a href="Bruzone Wishlist.html">
                <img src="../image/wishlist.png">
                <span class="quantity">0</span>
            </a>
        </div>

            <a href="dashboard.html" class="nav-link">HOME</a>
            <a href="#" class="nav-link">ABOUT US</a>
            <a href="profiletest.html" class="nav-link">MY ACCOUNT</a>
            <a href="Help/help.html" class="nav-link-last">HELP</a>
              <button class="btn-sign-up">SIGN UP</button>
        </div>
    </div>

  </header>

  <!-- NAVBAR ENDS -->

<body>
  
  <div class="header">
    Customer Support
  </div>
  <div class="container">
  <div class="box active" data-content-id="order-content">
      <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" alt="Icon">
      <div class="label">Order Issues</div>
    </div>
    <div class="box" data-content-id="delivery-content">
      <img src="https://www.iconpacks.net/icons/1/free-truck-icon-1058-thumb.png" alt="Icon">
      <div class="label">Delivery</div>
    </div>
   <div class="box" data-content-id="return-content">
      <img src="https://cdn-icons-png.flaticon.com/512/2947/2947559.png" alt="Icon">
      <div class="label">Return & Refund</div>
    </div>
    <div class="box" data-content-id="payment-content">
      <img src="https://cdn-icons-png.flaticon.com/512/7510/7510522.png" alt="Icon">
      <div class="label">Payment and Discounts</div>
    </div>
    <div class="box" data-content-id="product-content">
      <img src="https://cdn-icons-png.flaticon.com/512/5166/5166970.png" alt="Icon">
      <div class="label">Product and Stock</div>
    </div>
    <div class="box" data-content-id="account-content">
      <img src="https://cdn.icon-icons.com/icons2/3065/PNG/512/profile_user_account_icon_190938.png" alt="Icon">
      <div class="label">Account</div>
    </div>
  </div>


 <div class="order content" id="order-content" >
  <button class="collapsible">| How much does it cost to my location?</button>
<div class="content">
  <p>The cost of shipping varies based on your location, the weight of the items, and the chosen shipping method. To find out the exact cost, add the items to your cart, enter your shipping address, and the website will calculate the total cost including shipping fees.</p>
</div>
<button class="collapsible">| What is the shipping time?</button>
<div class="content">
  <p>The shipping time depends on your location, the shipping method you choose, and the processing time of the online store. Generally, standard shipping might take 3-7 business days, while expedited shipping could be 1-3 business days. International shipping may take longer. To get an accurate estimate, proceed to checkout and the website will provide you with specific shipping time options based on your address and chosen method.</p>
</div>
<button class="collapsible">| Why was my package returned?</button>
<div class="content">
  <p>If the shipping address provided was incorrect or incomplete, the package might be returned to the sender.</p>
</div>
<button class="collapsible">| How long will the order take to arrive?</button>
<div class="content">
  <p>The chosen shipping method (standard, expedited, overnight) will determine how quickly your order will arrive.</p>
</div>
<button class="collapsible">| Why is there no tracking update?</button>
<div class="content">
  <p> The tracking information might not update immediately after placing the order. It could take some time for the online store to process and ship your order before tracking information becomes available.</p>
</div>
</div>

<div class="delivery content" id="delivery-content" >
  <button class="collapsible">| What is the estimated delivery time for my order?</button>
<div class="content">
  <p>The estimated delivery time depends on your location and the chosen shipping method. During checkout, you'll see the expected delivery range based on your address and selected shipping option.</p>
</div>
<button class="collapsible">| Can I change the delivery address after placing the order?</button>
<div class="content">
  <p>We recommend contacting our customer service as soon as possible if you need to change the delivery address. We'll do our best to assist you before the package is shipped.</p>
</div>
<button class="collapsible">| Is there a shipping fee?</button>
<div class="content">
  <p>Shipping fees depend on your order total, delivery address, and chosen shipping method. The exact fee will be displayed during checkout before you complete your purchase.</p>
</div>
<button class="collapsible">| What if my package arrives damaged or with missing items?</button>
<div class="content">
  <p>Please contact our customer service immediately if your package arrives damaged or with missing items. We'll assist you in resolving the issue.</p>
</div>
<button class="collapsible">| Can I cancel or change my order after it's shipped?</button>
<div class="content">
  <p>Once an order is shipped, changes or cancellations are usually not possible. Please contact us if you need assistance.</p>
</div>
</div>

<div class="return content" id="return-content" >
  <button class="collapsible">| What information do I need to provide for the return?</button>
<div class="content">
  <p>You'll need to provide your order number, the reason for the return, and any relevant details about the item's condition. This will help us process your return smoothly.</p>
</div>
<button class="collapsible">| Do I have to pay for return shipping?</button>
<div class="content">
  <p>Return shipping costs may vary depending on the reason for the return. Our Returns Policy provides information about who is responsible for return shipping fees.</p>
</div>
<button class="collapsible">| What's the process once I've initiated a return?</button>
<div class="content">
  <p>After initiating a return, you'll receive instructions on how to package the item and where to send it. Once we receive and inspect the item, we'll process your refund or exchange.</p>
</div>
<button class="collapsible">| When will I receive my refund?</button>
<div class="content">
  <p>Refunds are typically processed within [X] business days after we receive the returned item. The refund timeline might vary based on your original payment method.</p>
</div>
<button class="collapsible">| What if the item I received is damaged or defective?</button>
<div class="content">
  <p>If you receive a damaged or defective item, please contact our customer service immediately. We'll guide you through the process of returning the item and receiving a replacement or refund.</p>
</div>
</div>

<div class="payment content" id="payment-content" >
  <button class="collapsible">| What payment methods do you accept?</button>
<div class="content">
  <p>We accept a variety of payment methods, including credit/debit cards, PayPal, and more. You can find the full list of accepted payment methods on our Payment Options page.</p>
</div>
<button class="collapsible">| Is my payment information secure?</button>
<div class="content">
  <p>Yes, your payment information is secure. We use industry-standard encryption and security protocols to protect your data.</p>
</div>
<button class="collapsible">| When will I be charged for my order?</button>
<div class="content">
  <p>You'll be charged for your order as soon as you complete the checkout process and confirm your payment.</p>
</div>
<button class="collapsible">| Why was my payment declined?</button>
<div class="content">
  <p>Payment declines can occur for various reasons, such as insufficient funds, incorrect card details, or security measures by your bank. Double-check your information and contact your bank if needed.</p>
</div>
<button class="collapsible">| Are my payment details saved on your website?</button>
<div class="content">
  <p>No, we don't store your payment details on our website. Your payment information is processed securely through our payment gateway.</p>
</div>
</div>

 <div class="product content" id="product-content" >
  <button class="collapsible">| Can I be notified when the product is back in stock?</button>
<div class="content">
  <p>Yes, you can sign up for our email notifications to be informed when the product is back in stock. Simply provide your email address on the product page.</p>
</div>
<button class="collapsible">| What is the product's availability?</button>
<div class="content">
  <p>The availability of the product is indicated on the product page. If the product is in stock, you'll be able to add it to your cart.</p>
</div>
<button class="collapsible">|Are there any warranties or guarantees for this product?</button>
<div class="content">
  <p>Warranty or guarantee information, if applicable, is provided in the product description. If you have specific questions, feel free to reach out to our customer service.</p>
</div>
<button class="collapsible">| What's included in the package with the product?</button>
<div class="content">
  <p>The contents of the package are detailed in the product description. Typically, you'll find information about what's included when you purchase the product.</p>
</div>
<button class="collapsible">| How do I add products to my wishlist or favorites?</button>
<div class="content">
  <p>To add products to your wishlist or favorites, log in to your account and use the designated button on the product page. You can access your wishlist from your account dashboard.</p>
</div>
</div>

<div class="account content" id="account-content" >
  <button class="collapsible">| How do I create an account on your website?</button>
<div class="content">
  <p>Creating an account is easy! Just click on the "Sign Up" or "Create Account" button and follow the prompts to provide your information.</p>
</div>
<button class="collapsible">| What are the benefits of having an account?</button>
<div class="content">
  <p>Having an account allows you to track your orders, save your address for faster checkout, manage your wishlist, and receive exclusive offers.</p>
</div>
<button class="collapsible">| Can I change my account information after creating it?</button>
<div class="content">
  <p>Yes, you can update your account information, including your name, email, and shipping address, in your account settings.</p>
</div>
<button class="collapsible">| HWhat should I do if I forgot my password?</button>
<div class="content">
  <p>If you forgot your password, click on the "Forgot Password" link on the login page. Follow the instructions to reset your password.</p>
</div>
<button class="collapsible">| Can I delete my account?</button>
<div class="content">
  <p>Yes, you can usually delete your account from your account settings. Keep in mind that this action is usually irreversible.</p>
</div>
</div>


 
<script>
  const boxes = document.querySelectorAll('.box');
  const contents = document.querySelectorAll('.content');
  const collapsibles = document.querySelectorAll('.collapsible');

  // Function to activate a specific content
  function activateContent(contentId) {
    const content = document.getElementById(contentId);
    if (content) {
      content.style.maxHeight = content.scrollHeight + 'px';
    }
  }

  // Function to deactivate all contents
  function deactivateAllContents() {
    contents.forEach(content => content.style.maxHeight = null);
  }

  // Attach event listeners to boxes
  boxes.forEach((box, index) => {
    box.addEventListener('click', () => {
      deactivateAllContents();

      // Remove active class from all boxes
      boxes.forEach(b => b.classList.remove('active'));
      // Add active class to the clicked box
      box.classList.add('active');

      // Show the corresponding content
      const targetContent = box.getAttribute('data-content-id');
      activateContent(targetContent);
    });
  });

  // Attach event listeners to collapsibles
  collapsibles.forEach(collapsible => {
    collapsible.addEventListener('click', () => {
      collapsible.classList.toggle('active');
      const content = collapsible.nextElementSibling;
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });

  // Activate the default content and box
  activateContent('order-content');
  document.querySelector('.box[data-content-id="order-content"]').classList.add('active');
</script>

</body>
</html>
