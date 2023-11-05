@php
    $carts = 'true';
@endphp
@include('layouts.header')
<!DOCTYPE html>
<html>
<head>
  <title>BruZone Customer Support Email</title>
<style>

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






  .customer-support {
    color: #1E1E1E;
    text-align: left;
    font-family: Imprima, sans-serif;
    font-size: 45px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-top: 50px;
    margin-left: 20px;
  }

  .border-box {
    width: 2000px;
    height: 900px;
    flex-shrink: 0;
    background: #D9D9D9;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    margin-top: 20px; /* Adjust as needed */
    display: flex;
    align-items: left;
    justify-content: left;
    flex-direction: column;
    padding-left: 20px; /* Adding gap padding to the left */
    padding-top: 30px;
    padding-bottom: 20px;
    position: relative; /* Set position to enable absolute positioning */
  }

  .textfont {
    font-family: Imprima, sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-bottom: 10px; /* Adjusted spacing */
    margin-top: 10px;
  }

  .highlight {
    color: #EB4949;
  }

  input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 4px 0; /* Adjusted spacing */
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

   textarea#message {
    height: auto; /* Set the height to auto */
    min-height: 100px; /* Set a minimum height */
    width: 50%;
    padding-top: 12px; /* Adjust padding to position text at top */
    resize: vertical; /* Allow vertical resizing */
    overflow: auto; /* Add scrollbar when necessary */
    font-family: Imprima, sans-serif;
  }


  input[type=submit] {
    width: 157px;
    height: 59px;
    flex-shrink: 0;
    border-radius: 10px;
    background: #F6E71D;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: black;
    color: white;
  }

  .image {
    position: absolute;
    bottom: 0;
    right: 0;
    opacity: 0.5;
    width: 40%;
  }

  .errorText {
    font-family: Imprima, sans-serif;
    font-size: 12px;
    color: red;
/*    margin-top: 5px;*/
  }

   /* Style for success message box */
  .success-message {
    width: 50%;
    margin: 20px auto;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    display: none;
  }

</style>
</head>
<body>


  <div class="customer-support">
    Customer Support
  </div>
 <form action="{{ route('send.email') }}" method="post" onsubmit="return validateForm()">
  <div class="border-box">
    <!-- Email input -->
    <div class="textfont">
      From: <span class="highlight">*</span>
    </div>
    <input type="text" id="from" name="from" placeholder="Your email">
    <div id="fromError" class="errorText"></div>

    <!-- Recipient select -->
    <div class="textfont">
      To: <span class="highlight">*</span>
    </div>
    <select id="recepient" name="recepient">
      <option value="">Select an option</option>
      <option value="HQ">BruZone HQ</option>
      <option value="Maintenance">BruZone Maintenance</option>
    </select>
    <div id="recepientError" class="errorText"></div>
    
    <!-- Subject input -->
    <div class="textfont">
      Subject: <span class="highlight">*</span>
    </div>
    <input type="text" id="subject" name="subject" placeholder="Reason of your email">
    <div id="subjectError" class="errorText"></div>

    <!-- Message textarea -->
    <div class="textfont">
      Message: <span class="highlight">*</span>
    </div>
    <textarea id="message" name="message" placeholder="Enter the details of your problem..." oninput="adjustMessageHeight()"></textarea>
    <div id="messageError" class="errorText"></div>

    <!-- Submit button -->
    <input type="submit" value="Submit">
  </form>

   <!-- Success message box -->
    <div class="success-message" id="success-message">
      Thank you!An email has been sent. Please check your inbox to receive a response from the Help Center.
    </div>
  </form>

    <img class="image" src="https://www.svgrepo.com/show/805/customer-service.svg" alt="Customer Service">
    <!-- Additional content for the border box can be added here -->
  </div>

 </style>
<script>
  // JavaScript to adjust the height of the message textarea as user types
  function adjustMessageHeight() {
    const messageTextarea = document.getElementById("message");
    messageTextarea.style.height = "auto"; // Reset the height to auto to calculate actual scroll height
    messageTextarea.style.height = (messageTextarea.scrollHeight) + "px"; // Set the textarea height to the scroll height
  }

  function showSuccessMessage() {
      const successMessage = document.getElementById("success-message");
      successMessage.style.display = "block";
    }



  // JavaScript to validate the form before submitting
  function validateForm() {
    const fromInput = document.getElementById("from");
    const recepientSelect = document.getElementById("recepient");
    const subjectInput = document.getElementById("subject");
    const messageTextarea = document.getElementById("message");

    let valid = true;

    if (fromInput.value.trim() === "") {
      fromInput.style.borderColor = "red";
      document.getElementById("fromError").innerText = "Please fill in your email.";
      valid = false;
    } else {
      fromInput.style.borderColor = "";
      document.getElementById("fromError").innerText = "";
      
      // Check if the email is in a valid format
      if (!isValidEmail(fromInput.value)) {
        fromInput.style.borderColor = "red";
        document.getElementById("fromError").innerText = "Invalid email address.";
        valid = false;
      }
    }

    if (recepientSelect.value === "") {
      recepientSelect.style.borderColor = "red";
      document.getElementById("recepientError").innerText = "Please select a recipient.";
      valid = false;
    } else {
      recepientSelect.style.borderColor = "";
      document.getElementById("recepientError").innerText = "";
    }

    if (subjectInput.value.trim() === "") {
      subjectInput.style.borderColor = "red";
      document.getElementById("subjectError").innerText = "Please provide a subject.";
      valid = false;
    } else {
      subjectInput.style.borderColor = "";
      document.getElementById("subjectError").innerText = "";
    }

    if (messageTextarea.value.trim() === "") {
      messageTextarea.style.borderColor = "red";
      document.getElementById("messageError").innerText = "Please enter a message.";
      valid = false;
    } else {
      messageTextarea.style.borderColor = "";
      document.getElementById("messageError").innerText = "";
    }

     if (valid) {
        // If all fields are valid, show the success message
        showSuccessMessage();
      }

      // Prevent form submission (remove this line if you want to submit the form)
      return false;
    }



  // Function to validate email format
  function isValidEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
  }




</script>

</body>
</html>
