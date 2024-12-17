<?php
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laundry_service"; // Use your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get number of users
$sql_users = "SELECT COUNT(*) as total_users FROM users"; // Assume 'users' is your table
$result_users = $conn->query($sql_users);
$row_users = $result_users->fetch_assoc();
$total_users = $row_users['total_users'];



// Get number of rental orders
$sql_orders = "SELECT COUNT(*) as total_orders FROM orders"; // Assume 'orders' is your table
$result_orders = $conn->query($sql_orders);
$row_orders = $result_orders->fetch_assoc();
$total_orders = $row_orders['total_orders'];

$conn->close();
?>



  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="dist/img/AdminLTELogo.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="plugins/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-gray">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="index.php">
          Logout <i class="nav-icon fas fa-sign-out-alt"></i> 
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FreshFold</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Name</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="menu-open nav-item">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customer_form.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Customer Form</p>
            </a>
          </li>
          <!-- Add other links here -->
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Users Info Box -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 bg-gray">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Number of Users</span>
                <span class="info-box-number"><?php echo $total_users; ?></span>
              </div>
            </div>
          </div>

          <!-- Rental Orders Info Box -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 bg-gray">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Rental Orders</span>
                <span class="info-box-number"><?php echo $total_orders; ?></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Charts -->
        <div class="row">
          <div class="col-md-6">
            <div class="card bg-gradient-default">
              <div class="card-header border-0">
                <h3 class="card-title"><i class="fas fa-flag"></i> Report by Service</h3>
              </div>
              <div class="card-body">
                <div class="chart" id="service_report" style="height: 300px;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-gradient-default">
              <div class="card-header border-0">
                <h3 class="card-title"><i class="fas fa-flag"></i> Report by Unit</h3>
              </div>
              <div class="card-body">
                <div class="chart" id="unit_report" style="height: 300px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

</body>
</html>


