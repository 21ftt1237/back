<!DOCTYPE html>
<html>
<head>
    <style>
         body {
            font-family: 'Helvetica Neue', 'Helvetica', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .header {
          background: #F6E71D;
          padding: 20px;
          text-align: center;
        }
        
        .header hgroup {
          text-align:center;
          font-family:verdana;
        }

        .header hgroup h1 {
          font-size: 1.5em;
          color: black;
          font-weight: bold;
          letter-spacing:.3em;
          text-transform:uppercase;
        }


        .section1 {
        padding:20px;
        color:#666;
        font-family: verdana;
        background: #ecf0f1;
        font-size: 13px;
        }

      
        .footer {
            background-color: #F6E71D;
            padding:20px;
            text-align: center;
            color:black;
            font-family: verdana;
        }
    </style>
</head>
<body>
   <div class="email-container">
    <div class="header">
       <hgroup>
         <h1>Order Status Updated</h1>
       </hgroup>
       </div>      

        <div class="section1">
            <p>Your order with ID {{ $orderId }} status has been updated. Thank you for choosing our services.</p>
        </div>

        <div class="footer">
             <p>Have a question? please contact our <a href="https://bruzone.tech/BruzoneEmail">support team</a></p>
        </div>
    </div>
</body>
</html>
