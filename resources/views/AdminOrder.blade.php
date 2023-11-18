@php
    $pageName = 'Bruzone - admin';
@endphp

@include('layouts.admin-header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <title>BruZone Admin Order</title>
    
    <!-- Add DataTables CSS and jQuery -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #1D428A;
            color: white;
            cursor: pointer;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .edit-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .edit-button.editing {
            background-color: #f1c40f;
        }

        .status-cell.red {
            color: red;
        }

        

    </style>
</head>
<body>
 <div class="container">
        <h1>Admin Order List</h1>
        <table id="order-table" class="display">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Total Price</th>
                    <th>Created At</th>
                    <th class="sortable">Status</th>
                    <th class="sortable">Action</th> 
                    <th>view</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderLists as $orderList)
                    <tr  data-row-id="{{ $orderList->id }}">
                        <td>{{ $orderList->id }}</td>
                        <td>{{ $orderList->user_id }}</td>
                        <td>{{ $orderList->user_name }}</td>
                        <td>{{ $orderList->Total_price }}</td>
                        <td>{{ $orderList->created_at }}</td>
                        <td class="status-cell">{{ $orderList->status }}</td>
                        <td><button class="edit-button">Edit</button></td>
                        <td>
                            <a href="{{ route('AdminOrder', $orderList->created_at) }}">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    

     <script>
       $(document).ready(function () {          
    $('#order-table').DataTable({
        "order": [],
        "columnDefs": [
            {
                "targets": 'sortable',
                "orderable": true,
            }
        ],
    });

    // Use event delegation for dynamically added elements
    $("#order-table").on("click", ".edit-button", function () {
        var $row = $(this).closest("tr");
        var rowId = $row.data("row-id");
        var $statusCell = $row.find(".status-cell");
        var $editButton = $row.find(".edit-button");

        if ($editButton.hasClass("editing")) {
            var editedStatus = $statusCell.find("select").val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/update-status",
                method: "POST",
                data: {
                    rowId: rowId,
                    editedStatus: editedStatus
                },
                success: function (response) {
                    // Update local storage with the new status
                    localStorage.setItem("editedStatus_" + rowId, editedStatus);

                    // Update the UI with the new status
                    $statusCell.text(editedStatus);

                    // Add or remove the "red" class based on status
                    if (editedStatus === "Cancelled") {
                        $statusCell.addClass("red");
                    } else {
                        $statusCell.removeClass("red");
                    }

                    // Hide the dropdown and show the saved status
                    $statusCell.find("select").remove();
                    $statusCell.text(editedStatus);

                    // Change the button text back to "Edit"
                    $editButton.text("Edit").removeClass("editing");
                },
                error: function (xhr, status, error) {
                    console.error("Error updating status:", error);

                    // Handle the error appropriately, e.g., show a message to the user
                    alert("Error updating status. Please try again.");
                }
            });
        } else {
            var statusOptions = ["Processing", "Picked Up", "Delivered", "Completed"];
            var $select = $("<select></select>");
            for (var i = 0; i < statusOptions.length; i++) {
                var option = statusOptions[i];
                var $option = $("<option></option>").text(option);
                $select.append($option);
            }

            var currentStatus = localStorage.getItem("editedStatus_" + rowId);
            $select.val(currentStatus || $statusCell.text());

            $statusCell.empty().append($select);
            $editButton.text("Save").addClass("editing");

            if (currentStatus === "Cancelled") {
                $statusCell.addClass("red");
            }
        }
    });

    $("tr[data-row-id]").each(function () {
        var $row = $(this);
        var rowId = $row.data("row-id");
        var $statusCell = $row.find(".status-cell");
        var currentStatus = localStorage.getItem("editedStatus_" + rowId);
        if (currentStatus) {
            $statusCell.text(currentStatus);
            if (currentStatus === "Cancelled") {
                $statusCell.addClass("red");
            } else {
                $statusCell.removeClass("red");
            }
        }
    });
});
    </script>
</body>
</html>
