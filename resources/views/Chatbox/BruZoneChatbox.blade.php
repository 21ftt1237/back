<!DOCTYPE html>
<html lang="en">
<head>
  <title>BruZone Chatbox</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  background-color: #80BBFF;
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
  background: #F6E71D;
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
  width: auto; /* Adjust width */
  height: auto; /* Adjust height */
  margin-top: 10px;
  padding: 10px;
  border: 2px solid #1E1E1E;
}

.info-image {
  flex-shrink: 0;
  margin-bottom: 10px; /* Add some spacing below the image */
}

.info-image img {
  max-width: 100%;
  height: auto;
  max-height: 100px;
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
      background-color: #f6e71d;
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


    .user .chat-box p {
      font-size: 18px;
      padding: 10px;
      background-color: #DCF8C6; /* Light green background for user messages */
      border-radius: 10px;
      border: 1px solid #DCF8C6;
      max-width: 70%;
      margin-left: auto;
    }

    .admin .chat-box p {
      font-size: 18px;
      padding: 10px;
      background-color: #FFFFFF; /* White background for admin messages */
      border-radius: 10px;
      border: 1px solid #e4e4e4;
      max-width: 70%;
      margin-right: auto;
    }

</style>
</head>
<body>
   <!-- Add the back button element -->
  <div class="back-button">Quit Chat</div>

<!--  <div class="container">
  <main id="main">
    <div class="chat-box-container">
      <div class="chat-box"></div>
    </div>
    <div class="chat-input-container">
      <input class="chat-input" type="text" name="chat-input" placeholder="Type your message...">
      <img class="chat-send-icon" src="https://cdn-icons-png.flaticon.com/512/3106/3106794.png" alt="Send Icon">
    </div>
  </main>
</div> -->
   <div class="container">
        <main id="main">
            <div class="chat-box-container">
                <div class="chat-box" id="chatBox"></div>
            </div>
            <div class="chat-input-container">
                <input class="chat-input" type="text" id="chatInput" placeholder="Type your message...">
                <button class="chat-send-icon" onclick="sendMessage()">Send</button>
            </div>
        </main>
    </div>

<div>
<div class="info-header">Info</div> <!-- Add the info header -->


<div class="info-content">
  <div class="info-image">
    <img src="image/cbi.png" alt="Info Image">
  </div>

  <div class="eclipse-container">
  <div class="eclipse-image">
    <img src="image/cbi2.png" alt="Eclipse Image">
  </div>
  <div class="green-circle"></div>
</div>

  <div class="info-text">
    <p>Connected to the store owner chat</p>
    <p class="open-hours">Open Hours Mon - Sun<br>9 AM - 7 PM</p>
  </div>
</div>
</div>

   <script type="text/javascript">
    (function () {
            "use strict";

            const chatBox = document.getElementById("chatBox");
            const chatInput = document.getElementById("chatInput");

            function appendChatBox(fromAdmin, message) {
                const chatBubble = document.createElement("div");
                chatBubble.className = fromAdmin ? "admin" : "user";
                chatBubble.innerHTML = `<p>${message}</p>`;
                chatBox.appendChild(chatBubble);

                // Scroll to the latest message
                chatBox.scrollTop = chatBox.scrollHeight;

                // Save the message to local storage
                const messages = JSON.parse(localStorage.getItem("chatMessages")) || [];
                messages.push({ fromAdmin, message });
                localStorage.setItem("chatMessages", JSON.stringify(messages));
            }

            function sendMessage() {
                const message = chatInput.value.trim();
                if (message === "") {
                    return;
                }

                // Append user message to chat
                appendChatBox(false, message);

                chatInput.value = "";

                // In a real application, you would send the user message to the admin's page via a server.

                // For simulation purposes, let's assume the user message is sent to the admin's local storage.
                const adminMessages = JSON.parse(localStorage.getItem("adminMessages")) || [];
                adminMessages.push(message);
                localStorage.setItem("adminMessages", JSON.stringify(adminMessages));
            }

            // Load chat history from local storage
            const chatMessages = JSON.parse(localStorage.getItem("chatMessages")) || [];
            for (const { fromAdmin, message } of chatMessages) {
                appendChatBox(fromAdmin, message);
            }
        })();
  </script>
</body>
</html>
