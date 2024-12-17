<?php
// Database connection
include 'db.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL query to count orders by service
$query = "SELECT service, COUNT(*) AS total FROM orders GROUP BY service";
$result = mysqli_query($conn, $query);

// Initialize array to store data
$data = [];

if (mysqli_num_rows($result) > 0) {
    // Fetch each row and store it in the data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = [];
}

// Close connection
mysqli_close($conn);

// Return the data as JSON
echo json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <!-- Include CSS and JS libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <style>
        .info-box { 
            background-color: #f7f7f7; 
            padding: 20px; 
            border-radius: 8px; 
            margin-top: 20px;
        }
        .info-box-number {
            font-size: 24px;
            font-weight: bold;
        }
        #service_report {
            height: 250px;
        }
    </style>
</head>
<body>
    <!-- Display the donut chart -->
    <div id="service_report"></div>

    <!-- Info boxes (optional, to display specific service counts) -->
    <div class="info-box">
        <span class="info-box-number" id="wash_fold_count">Loading...</span> Orders for Wash Fold
    </div>

    <!-- JavaScript to fetch and display data -->
    <script type="text/javascript">
        $(function () {
            "use strict";

            // Initial data fetch from PHP
            function fetchOrderData() {
                $.ajax({
                    url: 'fetch_order_data.php', // PHP script to fetch data
                    method: 'GET',
                    success: function(response) {
                        // Parse the returned JSON data
                        var serviceData = JSON.parse(response);

                        // Prepare the chart data
                        var chartData = serviceData.map(function(item) {
                            return {
                                label: item.service,  // Service name
                                value: parseInt(item.total)  // Number of orders for that service
                            };
                        });

                        // Create the donut chart
                        var donut = new Morris.Donut({
                            element: 'service_report',
                            resize: true,
                            colors: ["#2782CE", "#EF881B", "#adb5bd", "#FF5733"],  // Customize colors
                            data: chartData,  // Data for the chart
                            hideHover: 'auto'
                        });

                        // Update info boxes with total orders for specific services
                        serviceData.forEach(function(item) {
                            if(item.service == 'wash_fold') {
                                $('#wash_fold_count').text(item.total + ' Orders for Wash Fold');
                            }
                        });
                    }
                });
            }

            // Fetch the data initially
            fetchOrderData();

            // Auto-refresh the data every 30 seconds
            setInterval(fetchOrderData, 30000);  // 30 seconds
        });
    </script>
</body>
</html>
