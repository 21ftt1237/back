<!DOCTYPE html>
<html lang="en">
<head>
  <title>BruZone Chatbox</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- <script src="https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.6/firebase-database.js"></script> -->

<style>
  body {
    margin: 0;
    padding: 20px 0 0; /* Adding padding on top of the screen */
    display: flex;
    min-height: 100vh;
    background-color: #f0f0f0;
  }

  .container {
    width: 900px;
    height: 600px;
    border-radius: 6px 6px 0 0;
    background: #FFF;
    box-shadow: 0px 10px 30px 0px rgba(135, 116, 87, 0.10),
                0px 25px 19px -11px rgba(135, 116, 87, 0.10),
                0px 4px 4px 0px rgba(135, 116, 87, 0.10),
                0px 2px 10px 0px rgba(135, 116, 87, 0.10);
    border: 2px solid #E9EBEF; /* Border color */
    margin-left: 20px; /* Add this line to align the container to the left */
    margin-top: 20px;
  }

  main {
    /* Remove the max-width and margin properties */
    height: 100vh;
    background-color: #DDD;
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .chat-box-container {
    /* Modify the margin and width properties */
    margin: 0;
    width: 900px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    height: 0;
  }



.chat-box {
  margin: 4px 4px 4px 4px;
  border: 2px solid black;
  flex-grow: 1;
  background-color: #FFF;
  overflow-y: scroll;
}

.chat-box p {
  margin: 0;
  padding: 6px;
  font-size: 26px;
}

.ai-person-container {
  display: block;
  overflow: auto;
}

.ai,
.person {
  overflow: auto;
  margin: 4px;
  border: 2px solid black;
  border-radius: 8px;
  display: inline-block;
}


.user + .ai {
  margin-top: 50px; /* Add a gap between user and AI chats */
}

.ai {
  text-align: left;
  margin-right: 36px;
  background-color: #D9D9D9;
  border-color: black; /* Updated color for AI messages */
  float: left;
  border-bottom-left-radius: 0px;
}

.person {
  text-align: left;
  margin-left: 36px;
  border-color: blue;
  float: right;
  border-bottom-right-radius: 0px;
}

.user {
    border-color: black; /* Color for user chatbox */
    float: right;
    border-bottom-right-radius: 0px;
    background-color: #F6E71D; /* Color for user chatbox background */
    font-size: 18px; /* Adjust font size as needed */
  }

  .user-date {
    font-size: 10px;
    float: right; /* Keep the timestamp on the right side */
    margin-right: 6px;
    clear: both;
    color: grey;
  }

.ai-date,
.person-date {
  font-size: 10px;
  clear: both;
}

/* Update the font size for smaller text */
.ai-date {
  float: left;
  margin-left: 6px;
  font-size: 8px; /* Adjust the font size as needed */
}

.person-date {
  float: right;
  margin-right: 6px;
  font-size: 8px; /* Adjust the font size as needed */
}



.chat-input-container {
  position: relative;
  height: 60px;
  width: 100%;
  display: flex;
  bottom: 0;
  align-items: center;
  justify-content: center;
  overflow: auto;
}

.chat-input {
  height: 40px;
  width: auto;
  display: inline-block;
  flex-grow: 1;
  padding: 2px 2px 2px 2px;
  margin: 0 4px 0 4px;
  font-size: 17px;
  border-radius: 30px; /* Updated */
  border: 1px solid #999; /* Updated */
  background: #FFF; /* Updated */
}

.chat-input:focus {
  outline: 0;
}



.chat-send-icon:hover {
  cursor: pointer;
  background-color: #F6E71D;
}

.chat-send-icon:focus {
  outline: 0;
}

@media screen and (max-width: 480px) {
  .chat-box p {
    font-size: 30px;
  }
  .chat-input {
    width: 60%;
    float: left;
    font-size: 28px;
  }
  .chat-submit {
    float: right;
  }
}

  .chat-send-icon {
  width: 40px; /* Adjust the width as needed */
  height: 40px; /* Adjust the height as needed */
  border-radius: 15px; /* Half of the width/height */
  border: 1px solid #582BE8;
  background: #219ebc; 
  cursor: pointer;
  margin-left: 10px;
}

.info-header {
  color: #1E1E1E;
  font-family: Imprima;
  font-size: 33px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  margin-top: 20px;
  border-bottom: 1px solid #1E1E1E; /* Add a border below the header */
  padding-bottom: 10px; /* Add some spacing below the border */
}

.info-content {
  flex-direction: row; /* Change to row for side-by-side layout */
  align-items: center;
  width: 300px; /* Adjust width */
  height: 180px; /* Adjust height */
  margin-top: 10px;
  padding: 10px;
  border: 2px solid #1E1E1E;
}

.info-image {
  flex-shrink: 0;
  margin-bottom: 10px; /* Add some spacing below the image */
}

.info-image img {
  width: 300px;
  height: 100px;
/*  max-height: 100px;*/
}

.info-text {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-left: 60px;
}

.info-text p {
  margin: 0;
  font-size: 14px;
}

.open-hours {
  color: #888;
  font-size: 12px;
}

   /* Add a class for the back button */
    .back-button {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: #219ebc;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
    }

    .eclipse-container {
  position: absolute;
  display: flex;
  align-items: center;
}

.eclipse-image {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;

}

.eclipse-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.green-circle {
  width: 10px;
  height: 10px;
  background-color: green;
  border-radius: 50%;
  margin-left: -15px;
  position: absolute;
  bottom: 0;
  left: 100%;
}

/* Add a new style for the chat message container */
    .message-container {
      display: flex;
      flex-direction: column;
    }


    /* Adjust the styles for the chat bubbles */
    .ai p,
    .user p {
      margin: 0;
      padding: 6px;
      font-size: 25px; /* Adjust font size for chat messages */
    }


</style>
</head>
<body>
   <!-- Add the back button element -->
  <div class="back-button">Quit Chat</div>

 <div class="container">
  <main id="main">
    <div class="chat-box-container">
      <div class="chat-box"></div>
    </div>
    <div class="chat-input-container">
      <input class="chat-input" type="text" name="chat-input" placeholder="Type your message...">
      <img class="chat-send-icon" src="https://cdn-icons-png.flaticon.com/512/3106/3106794.png" alt="Send Icon">
    </div>
  </main>
</div>

<div>
<div class="info-header">Info</div> <!-- Add the info header -->


<div class="info-content">
  <div class="info-image">
    <img src="image/Adminb.png" alt="Info Image">
  </div>

  <div class="eclipse-container">
  <div class="eclipse-image">
    <img src="image/Adminicon.png" alt="Eclipse Image">
  </div>
  <div class="green-circle"></div>
</div>

  <div class="info-text">
    <p>CUSTOMER SUPPORT</p>
    <p class="open-hours">Connected to the customer chat</p>
  </div>
</div>
</div>



  <script>
 <script type="text/javascript">
    (function() {
      "use strict";

      // Connect to the WebSocket server on your DigitalOcean server
      const socket = new WebSocket('ws://your-server-ip:8080'); // Replace 'your-server-ip' with your server's IP address

      socket.addEventListener('open', (event) => {
        console.log('WebSocket connection established.');
      });

      const submit = document.querySelector(".chat-send-icon");
      const chatBox = document.querySelector(".chat-box");
      const chatInput = document.querySelector(".chat-input");

      function chatTemplate(aiOrPerson) {
        return `
          <div class="ai-person-container">
            <div class="${aiOrPerson.class}">
              <div class="message-container">
                <p>${aiOrPerson.text}</p>
                <span class="${aiOrPerson.class}-date">${aiOrPerson.date}</span>
              </div>
            </div>
          </div>
        `;
      }

      submit.addEventListener("click", function(e) {
        appendChatBox(true);
      });

      document.addEventListener("keypress", function(e) {
        if (e.keyCode == "13") {
          appendChatBox(true);
        }
      });

      function appendChatBox(fromPerson) {
        const date = new Date();
        if (!fromPerson) {
          date.setSeconds(date.getSeconds() + 2);
        }
        if (fromPerson && !chatInput.value.trim()) {
          return;
        }
        const timestamp = date.toLocaleTimeString();
        const newChatBubble = chatTemplate({
          class: fromPerson ? "user" : "ai",
          text: fromPerson ? chatInput.value.trim() : aiResponse(),
          date: timestamp
        });

        // Send the message to the WebSocket server
        socket.send(JSON.stringify({
          class: fromPerson ? "user" : "ai",
          text: fromPerson ? chatInput.value.trim() : aiResponse(),
          date: timestamp
        }));

        if (fromPerson) {
          chatInput.value = "";
        }
      }

      function aiResponse() {
        // Your predefined responses here
        // ...
      }

      // Listen for messages from the WebSocket server
      socket.addEventListener('message', (event) => {
        const message = JSON.parse(event.data);
        const newChatBubble = chatTemplate(message);
        chatBox.innerHTML += newChatBubble;
        chatBox.scrollTop = chatBox.scrollHeight;
      });
    })();

  </script>
</body>
</html>




  
