<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Order List</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allOrders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->Total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    

    <script>
        $(document).ready(function () {
            $('#purchase-history-table').DataTable({
                "order": [],
                "columnDefs": [
                    {
                        "targets": 'sortable',
                        "orderable": true,
                    }
                ],
            });

            // Add edit functionality
            $(".edit-button").click(function () {
                var $row = $(this).closest("tr");
                var rowId = $row.data("row-id");
                var $statusCell = $row.find(".status-cell");
                var $editButton = $row.find(".edit-button");

                if ($editButton.hasClass("editing")) {
                    // Save the edited status to local storage with a unique key
                    var editedStatus = $statusCell.find("select").val();
                    localStorage.setItem("editedStatus_" + rowId, editedStatus);

                    // Change the button text back to "Edit"
                    $editButton.text("Edit").removeClass("editing");

                    // Replace the status cell content with the selected value
                    $statusCell.text(editedStatus);

                    // Add or remove the "red" class based on status
                    if (editedStatus === "Cancelled") {
                        $statusCell.addClass("red");
                    } else {
                        $statusCell.removeClass("red");
                    }
                } else {

                    // Create a dropdown with options 
                    var statusOptions = ["Processing", "Picked Up", "Delivered", "Completed"]; 
                    var $select = $("<select></select>");
                    for (var i = 0; i < statusOptions.length; i++) {
                        var option = statusOptions[i];
                        var $option = $("<option></option>").text(option);
                        $select.append($option);
                    }

                    // Set the initial selected option from local storage
                    var currentStatus = localStorage.getItem("editedStatus_" + rowId);
                    $select.val(currentStatus || $statusCell.text());

                    // Replace the status cell content with the dropdown
                    $statusCell.empty().append($select);

                    // Change the button text to "Save"
                    $editButton.text("Save").addClass("editing");

                    // Highlight in red if status is "Cancelled"
                    if (currentStatus === "Cancelled") {
                        $statusCell.addClass("red");
                    }
                }
            });

            // Initialize the status cells from local storage
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
