@php
    $pageName = 'Bruzone - admin';
@endphp

@include('layouts.admin-header')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="./ecommerce.css"> -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!--<link rel="stylesheet" href="/style.css">
<script src="/app.js"></script>-->
  <title>Bruzone</title>

</head>

<style type="text/css">
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* This ensures the content takes at least the full height of the viewport. */
        }

main {
            flex: 1; /* This makes the main content area expand to fill the available space. */
        }

  /*USER TABLE DATA*/
table {

    		    font-family: arial, sans-serif;
    		    border-collapse: collapse;
    		    width: 100%;
    		}
    		td, th {
    		    border: 1px solid #dddddd;
    		    text-align: left;
    		    padding: 8px;
    		    margin: 200px;
    		}

.table-container{
	margin: 50px;
}


.addAdm {
  color: black;
    font-size: 14px;
    font-weight: bolder;
    margin-left: 20px;
    width: 10%;
    padding: 5px;
    background-color: #FEBE00;
    border: 2px;
    border-radius: 2px;
    cursor: pointer;
    
}

.addAdm:hover {
    background-color: #555;
}






.deleteButton {
  color: black;
    font-size: 14px;
    font-weight: bolder;
    margin-left: 20px;
    width: 10%;
    padding: 5px;
    background-color: #B90E0A;
    border: 2px;
    border-radius: 2px;
    cursor: pointer;
    
}

.deleteButton:hover {
    background-color: #555;
}





.tabBtn {
	color: black;
    font-size: 14px;
    font-weight: bolder;
    margin-top: 20px;
    margin-left: 6px;
    width: 6%;
    padding: 5px;
    border: 2px;
    border-radius: 2px;
    cursor: pointer;
}

.tabBtn:hover {
    background-color: #555;
}


/*POPUP ADD NEW*/

.popup-adm {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 40%;
  transform: translate(-50%, -50%);
  background-color: white;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 10px;
  z-index: 1000;
  text-align: center;

}





/* Styles for the registration form */
#registerForm {
    background: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#nameRegister,
#emailRegister,
#passwordRegister,
#password2,
#provincia {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

#nameRegister,
#emailRegister,
#passwordRegister,
#password2 {
    height: 40px;
}



.form-check-label {
    font-size: 14px;
}

#registerForm button[type="submit"] {
    background: #007BFF;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

#registerForm button[type="submit"]:hover {
    background: #0056b3;
}

/* Error feedback styling */
.invalid-feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}

/* Center the form in the container */
#registerForm {
    margin: 0 auto;
    max-width: 400px;
}

/* Optional: Center the form vertically */
.container {
    display: flex;
    align-items: center;
    min-height: 100vh;
}


/*ADD NEW*/
/* Apply these styles to your form and messages */
#form {
  display: flex;
  flex-direction: column;
  max-width: 300px;
  margin: 0 auto;
}

#form input[type="text"],
#form input[type="email"],
#form input[type="password"] {
  margin: 10px 0;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

#confirmpass {
  margin: 10px 0;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

#form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

#message {
  margin: 20px 0;
  padding: 10px;
  background-color: #f2f2f2;
  border-radius: 5px;
  text-align: left;
}

/* Style individual password requirements */
#message h3 {
  margin: 0;
  font-size: 18px;
}

#message p {
  font-size: 16px;
  padding: 5px;
  margin: 0;
  display: none;
  text-align: left;
}

.invalid {
  color: #FF0000;
  display: block;
}


/*DELETE FORM*/
/* Style for the Delete User Popup */
#popup-delete {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  display: none;
  z-index: 1;
}

#popup-delete .close-button {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  color: #333;
  cursor: pointer;
}

#popup-delete .close-button:hover {
  color: #ff0000;
}

#popup-delete .option-container {
  text-align: center;
  padding: 0px;
}

#popup-delete h2 {
  color: #333;
  font-size: 24px;
  margin-bottom: 20px;
}

#popup-delete input[type="text"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
}

#popup-delete input[type="submit"] {
  background-color: #ff5252;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  cursor: pointer;
}

#popup-delete input[type="submit"]:hover {
  background-color: #ff0000;
}

.show-popup {
    display: block;
}


</style>
<body data-ng-controller="myCtrl">



   <!-- Popup register -->
 <div id="popup-adm" class="popup-adm" style="display: none;">
  <button class="close-button" onclick="togglePopupAdm()">&#10006;</button>
  <div class="option-container">
    <h2>Add New admin</h2>
    <br>
  </div>
<div>

<form method="post" action="{{ route('admin.handleForm', ['action' => 'store']) }}" id="form">
@csrf
<input type="text" name="name" id="name" placeholder="name">
<input type="email" name="email" placeholder="Email Address" id="email">
<input type="password" name="password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<input type="password" name="" placeholder="Reenter Password" id="confirmpass" onblur="validate()">
<input type="submit" name="submit" value="Add">
</form>
</div>

</div>

    <!-- Popup for Deleting User -->
<div id="popup-delete" class="popup-driver" style="display: none;">
  <button class="close-button" onclick="toggleDeletePopup()">&#10006;</button>
  <div class="option-container">
    <h2 class="dlt">Delete User</h2>
  </div>
  <div>
    <form method="post" action="{{ route('admin.handleForm', ['action' => 'delete']) }}" id="deleteUserForm">
      @csrf
      <input type="text" name="userId" id="userId" placeholder="User ID">
      <input type="submit" name="submit" value="Delete">
    </form>
  </div>
</div>

<!--USER TABLE DATA -->
<div class="table-container" data-ng-app="myApp" data-ng-controller="myCtrl">
    <div class="row">
        <div class="col-md-2">
            Search:
        </div>
        <div class="col-md-10">
            <input type="text" class="search" data-ng-model="table" />
            <button class="addAdm" onclick="togglePopupAdm()">Add new admin</button>
         <!--   <button class="addStore" onclick="togglePopupStore()">Add new store</button>
            <button class="addDriver" onclick="togglePopupDriver()">Add new driver</button> -->
            <button class="deleteButton" onclick="toggleDeletePopup()">Delete User</button> 
        </div>
        <div class="Tab">
            <button class="tabBtn" data-group="Users">Users</button>
            <button class="tabBtn" data-group="Staff">Admin</button>
           <button class="tabBtn" data-group="Store">Stores</button> 
        </div>
    </div>
    <br/>
  <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Role</th>
  </tr>
  @foreach($users as $user)
  <tr data-ng-repeat="user in people | filter: table">
   <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->password }}</td>
    <td>{{ $user->role_id }}</td>
  </tr>
  @endforeach    
</table>

<!--TAB store owner: -->
<div id="store-list" style="display: none;">
    <ul>
        <li><a href="{{ route('store.index') }}">Netcom</a></li>
        <li><a href="{{ route('store.indexGameCentral') }}">Game Central</a></li>
        <li><a href="{{ route('store.indexWishlist') }}">Wishlist</a></li>
        <li><a href="{{ route('store.indexDigital') }}">Digital</a></li>
        <li><a href="{{ route('store.indexAvenue') }}">Avenue</a></li>
        <li><a href="{{ route('store.indexNimanja') }}">Nimanja</a></li>
        <li><a href="{{ route('store.indexGuardian') }}">Guardian</a></li>
    </ul>
</div>   




</div>

<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>


<script type="text/javascript">
  	 
//USER TABLE DATA PAGES
// Update the code for fetching and displaying data
app.controller('myCtrl', function($scope, $http) {
  $scope.people = [];
  $scope.currentPage = 1;
  $scope.numPerPage = 10;

  $scope.fetchAndDisplayData = function(group) {
    $http.get('/api/users', { params: { group: group } })
      .then(function(response) {
        $scope.people = response.data;
        // Call the updateTable function after fetching data
        $scope.updateTable();
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
  };

  // Initial fetch when the page loads
  $scope.fetchAndDisplayData('Users');

  $scope.$watch('currentPage + numPerPage', function() {
    var begin = (($scope.currentPage - 1) * $scope.numPerPage),
      end = begin + $scope.numPerPage;
    $scope.displayedPeople = $scope.people.slice(begin, end);
  });


  //POPUP ADD NEW
  function togglePopupAdm() {
    const popup = document.getElementById("popup-adm");
    if (popup.style.display === "block") {
      popup.style.display = "none";
    } else {
      popup.style.display = "block";
    }
  }

  // Function to toggle the delete user popup
  function toggleDeletePopup() {
    const popup = document.getElementById("popup-delete");
    if (popup.style.display === "block") {
      popup.style.display = "none";
    } else {
      popup.style.display = "block";
    }
  }


  // TABLE DATA

// Update the code for fetching and displaying data
document.addEventListener('DOMContentLoaded', function () {
    // Select the table element
    const table = document.querySelector('table tbody');

  // Function to update the table with new data
const updateTable = () => {
    const headerRow = $scope.people[0];
    const dataRows = $scope.people.slice(1);

    // Clear the table
    table.innerHTML = '';

    // Create header row
    const th = document.createElement('tr');
    headerRow.forEach(header => {
        const cell = document.createElement('th');
        cell.textContent = header;
        th.appendChild(cell);
    });
    table.appendChild(th);

    // Process data rows
    dataRows.forEach(rowData => {
        const tr = document.createElement('tr');
        rowData.forEach(value => {
            const td = document.createElement('td');
            td.textContent = value;
            tr.appendChild(td);
        });
        table.appendChild(tr);
    });
};

// Function to fetch data from Laravel backend
const fetchAndDisplayData = (group) => {
    $http.get('/api/users', { params: { group: group } })
        .then(function (response) {
            $scope.people = response.data;
            updateTable(); // Call the updateTable function after fetching data
        })
        .catch(function (error) {
            console.error('Error:', error);
        });
};

// Add event listeners to the tab buttons
const tabButtons = document.querySelectorAll('.tabBtn');
tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        const selectedGroup = button.getAttribute('data-group');
        if (selectedGroup === 'Store') {
            // If the selected tab is "Store Owner", navigate to the link for the list of stores
            window.location.href = "{{ route('store.index') }}"; // Update with the correct route
        } else {
            // For other tabs, fetch and display data as usual
            fetchAndDisplayData(selectedGroup);
        }
    });
});

// Function to toggle the display of the list of stores
function toggleStoreList() {
    const storeList = document.getElementById('store-list');
    if (storeList.style.display === "block") {
        storeList.style.display = "none";
    } else {
        storeList.style.display = "block";
    }
}


// submission form add new admin and delte users
$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();

        var formId = $(this).attr('id');

        if (formId === 'adminForm') {
            // Handle admin form submission
            // Send an AJAX request or perform other actions
            console.log('Admin form submitted');
        } else if (formId === 'deleteUserForm') {
            // Handle delete user form submission
            // Send an AJAX request or perform other actions
            console.log('Delete user form submitted');
        }
    });
});

    
</script>
</body>
</html>

<script type="text/javascript"></script>

