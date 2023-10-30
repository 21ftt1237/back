<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase History Admin</title>
    
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
            background-color: #219ebc;
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
        }

        .edit-button.editing {
            background-color: #f1c40f;
        }

        .status-cell.red {
            color: red;
        }

        .more-details {
            color: darkblue;
        }

         /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Purchase History</h1>
        <table id="purchase-history-table">
            <thead>
                <tr>
                    <th class="sortable">Date</th>
                    <th class="sortable">Order ID#</th>
                    <th class="sortable">Customer Name</th>
                    <th class="sortable">Order Total</th>
                    <th class="sortable">Status</th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <tr data-row-id="1">
                    <td>01-06-2023</td>
                    <td>N-22204</td>
                    <td>Zunaidi Bin Kamal</td>
                    <td>BND67.00</td>
                    <td class="status-cell">Paid</td>
                    <td><button class="edit-button">Edit</button></td>
                     <td><span class="more-details">More details</span></td>
                </tr>
                <tr data-row-id="2">
                    <td>08-06-2023</td>
                    <td>N-21904</td>
                    <td>Aiman Syazwi Bin Suleiman</td>
                    <td>BND56.00</td>
                    <td class="status-cell">Pending</td>
                    <td><button class="edit-button">Edit</button></td>
                     <td><span class="more-details">More details</span></td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal" id="details-modal">
        <div class="modal-content">
            <h2>Order Details</h2>
            <p>Order ID: <span id="order-id"></span></p>
            <p>Customer: <span id="customer-name"></span></p>
            <p>Total: <span id="order-total"></span></p>
            <p>Status: <span id="order-status"></span></p>
            <button id="close-modal">Close</button>
        </div>
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
                    var statusOptions = ["Paid", "Delayed", "Returned", "Cancelled"];
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
        // Add modal functionality
            $(".more-details").click(function () {
                var $row = $(this).closest("tr");
                var orderData = {
                    orderId: $row.find("td:nth-child(2)").text(),
                    customerName: $row.find("td:nth-child(3)").text(),
                    orderTotal: $row.find("td:nth-child(4)").text(),
                    orderStatus: $row.find(".status-cell").text()
                };

                $("#order-id").text(orderData.orderId);
                $("#customer-name").text(orderData.customerName);
                $("#order-total").text(orderData.orderTotal);
                $("#order-status").text(orderData.orderStatus);

                // Show the modal
                $("#details-modal").css("display", "block");
            });

            // Close the modal when the "Close" button is clicked
            $("#close-modal").click(function () {
                $("#details-modal").css("display", "none");
            });
        });
       
    </script>
</body>
</html>
