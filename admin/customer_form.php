
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Customer Info</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="dist/img/AdminLTELogo.png">
  <link href="plugins/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
    <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    

    
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-gray">
    <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
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
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fresh Fold</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Name</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="customer_form.php" class="nav-link active">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Customer Form
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="service_management.php" class="nav-link">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>
                Service Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="unit_management.php" class="nav-link">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>
                Unit Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="payment_module.php" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Payment Module
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_management.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user_group.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Group
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) BREADCRUMB -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header border-0">
                   <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-2"><h5 class="card-title"><b>CUSTOMER FORM</b></h5></div>
                       <div class="col-md-5"></div>
                  </div>
              </div>
              <!-- /.card-header -->
  <!-- form start -->
    <div class="card-body">
        <div  class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                        <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addCustomer"><i class="fa fa-plus"> Add Customer</i>
                        </button>
                    </h3>
                  </div>
      <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Profile</th>
                        <th>Fullname</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <?php
                      include 'db.php';

                      $sql = "SELECT id, CONCAT(first_name, ' ', last_name) AS fullname, address, contact_number, email FROM users";


                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td><img src='dist/img/avatar2.png' alt='Profile' class='brand-image img-square elevation-3' width='40' style='opacity: .8'></td>";
                          echo "<td>" . $row["fullname"] . "</td>";
                          echo "<td>" . $row["address"] . "</td>";
                          echo "<td>" . $row["contact_number"] . "</td>";
                          echo "<td>" . $row["email"] . "</td>";
                          
                          echo "<td>
                              <button type='button' class='btn btn-info btn-xs' data-toggle='modal' data-target='#updateCust" . $row["id"] . "'><i class='fa fa-pencil-alt'> Edit</i></button>
                              <button type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#delete_umanagement'><i class='fa fa-trash'> Delete</i></button>
                              </td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "0 results";
                      }
                    
                      ?>
                      
                    </tr>
                    
                  </tbody>
                 
                </table>
                <div class="modal fade" id="updateCust1">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" style="margin-left:37%"><i class="fa fa-spinner"> Update Customer</i></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <!-- form start -->
                              <form role="form" id="quickForm1" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div  class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Choose Profile <span style="color:red;">*</span></label>
                                                <input type="file" class="form-control" name="Cust1" id="Cust1">
                                            </div>
                                        </div>
                                        <div  class="col-sm-4">
                                            <div class="form-group">
                                                <label for="fn">Firstname: <span style="color:red;">*</span></label>
                                                <input class="form-control" type="text" class="form-control" id="fn" name="fname" placeholder="Firstname" size="40" value="Sharon" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label for="mn">Middlename: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="" name="mname" id="mn" placeholder="Middlename" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ln">Lastname: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="Cuneta" id="ln" name="lname" placeholder="Lastname" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="addrs">Complete Address: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="Sagay City, Neg. Occ." id="addrs" name="address" placeholder="Address" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cn">Contact Number: <span style="color:red;">*</span></label>
                                                <input type="number" class="form-control" value="09123456789" maxlength="11" id="cn" name="contact" placeholder="Contact Number" size="40" required>
                                            </div>
                                        </div>		
                                        <div  class="col-sm-4">
                                            <div class="horizontal-form">
                                                <div class="form-group">
                                                    <label for="email">Email Address: <span style="color:red;">*</span></label>
                                                    <input type="email" class="form-control" value="Email123@yahoo.com" id="email" name="email" placeholder="Email Address" size="40" required>
                                                </div>
                                               
                                                
                                                <div class="form-group" style="margin-left:20%">
                                                    <button class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancel</button>
                                                    <button name="btn_submit" type="submit" class="btn btn-primary btn-md"><i class="fa fa-spinner"></i> Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer"></div>
                              </form>
                          </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                <div class="modal fade" id="updateCust2">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" style="margin-left:37%"><i class="fa fa-spinner"> Update Customer</i></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <!-- form start -->
                              <form role="form" id="quickForm2" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div  class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Choose Profile <span style="color:red;">*</span></label>
                                                <input type="file" class="form-control" name="Cust2" id="Cust2">
                                            </div>
                                        </div>		
                                        <div  class="col-sm-4">
                                            <div class="form-group">
                                                <label for="fn">Firstname: <span style="color:red;">*</span></label>
                                                <input class="form-control" type="text" class="form-control" id="fn" name="fname" placeholder="Firstname" size="40" value="Coco" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label for="mn">Middlename: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="" name="mname" id="mn" placeholder="Middlename" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ln">Lastname: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="Martin" id="ln" name="lname" placeholder="Lastname" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="addrs">Complete Address: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" value="Old Sagay, Neg. Occ." id="addrs" name="address" placeholder="Address" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cn">Contact Number: <span style="color:red;">*</span></label>
                                                <input type="number" class="form-control" value="09091234567" maxlength="11" id="cn" name="contact" placeholder="Contact Number" size="40" required>
                                            </div>
                                        </div>		
                                        <div  class="col-sm-4">
                                            <div class="horizontal-form">
                                                <div class="form-group">
                                                    <label for="email">Email Address: <span style="color:red;">*</span></label>
                                                    <input type="email" class="form-control" value="Email45@gmail.com" id="email" name="email" placeholder="Email Address" size="40" required>
                                                </div>
                                                
                                                <div class="form-group" style="margin-left:20%">
                                                    <button class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancel</button>
                                                    <button name="btn_submit" type="submit" class="btn btn-primary btn-md"><i class="fa fa-spinner"></i> Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer"></div>
                              </form>
                          </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                <div class="modal fade" id="delete_umanagement">
                    <div class="modal-dialog" style="width:400px !important;">
                        <form action="">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" style="margin-left:15%">Are you sure you want delete?</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Yes</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                <div class="modal fade" id="addCustomer">
                    <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" style="margin-left:37%"><i class="fa fa-plus"> Add Customer</i></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <!-- form start -->
                              <form role="form" id="quickForm" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div  class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Choose Profile <span style="color:red;">*</span></label>
                                                <input type="file" class="form-control" name="Profile" id="Profile">
                                            </div>
                                        </div>
                                        <div  class="col-sm-4">
                                            <div class="form-group">
                                                <label for="fn">Firstname: <span style="color:red;">*</span></label>
                                                <input class="form-control" type="text" class="form-control" id="fn" name="fname" placeholder="Firstname" size="40" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label for="mn">Middlename: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="mname" id="mn" placeholder="Middlename" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ln">Lastname: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="ln" name="lname" placeholder="Lastname" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="addrs">Complete Address: <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="addrs" name="address" placeholder="Address" size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cn">Contact Number: <span style="color:red;">*</span></label>
                                                <input type="number" class="form-control" maxlength="11" id="cn" name="contact" placeholder="Contact Number" size="40" required>
                                            </div>
                                        </div>
                                        <div  class="col-sm-4">
                                            <div class="horizontal-form">
                                                <div class="form-group">
                                                    <label for="email">Email Address: <span style="color:red;">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" size="40" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gen">Gender: <span style="color:red;">*</span></label>
                                                    <select id="gen" name="gender" class="form-control" required>
                                                    <option selected disabled>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="civil">Civil Status: <span style="color:red;">*</span></label>
                                                    <select id="civil" name="civilstat" class="form-control" required>
                                                    <option selected disabled>Select Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                    <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                  <label for="bdate">Birthdate: <span style="color:red;">*</span></label>
                                                    <input type="date" class="form-control"  id="bdate" name="remarks" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="age">Age: <span style="color:red;">*</span></label>
                                                    <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
                                                </div>
                                                <div class="form-group" style="margin-left:20%">
                                                    <button class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancel</button>
                                                    <button name="btn_submit" type="submit" class="btn btn-primary btn-md"><i class="fa fa-check"></i> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer"></div>
                              </form>
                          </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                  </div><!-- /.card-body -->
                </div> <!-- /.card -->
                </div>
            </div>
        </div>
            </div>
        <!-- /.card -->
        </div>
  <!--/.col (right) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"  type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="plugins/metisMenu/metisMenu.min.js"  type="text/javascript"></script>
<script src="plugins/pace-1.0.2/pace.min.js"  type="text/javascript"></script>
<script src="plugins/bootstrap-fileinput/js/fileinput.min.js"  type="text/javascript"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Select-->
<script src="plugins/select2/select2.full.min.js"  type="text/javascript"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
$("#Profile").fileinput({
        showCancel: false,
        showUpload: false,
        showRemove: false,
        browseClass: "btn btn-default",
        defaultPreviewContent: '<img src="dist/img/avatar.png" alt="Your Avatar" class="img img-responsive" style="left-margin:auto; max-width:auto">',
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
    });
</script>
<script type="text/javascript">
$("#Cust1").fileinput({
        showCancel: false,
        showUpload: false,
        showRemove: false,
        browseClass: "btn btn-default",
        defaultPreviewContent: '<img src="dist/img/avatar2.png" alt="Your Avatar" class="img img-responsive" style="left-margin:auto; max-width:auto">',
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
    });
</script>
<script type="text/javascript">
$("#Cust2").fileinput({
        showCancel: false,
        showUpload: false,
        showRemove: false,
        browseClass: "btn btn-default",
        defaultPreviewContent: '<img src="dist/img/avatar04.png" alt="Your Avatar" class="img img-responsive" style="left-margin:auto; max-width:auto">',
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
    });
</script>
<script>
$(document).ready(function(){
         	var table = $('#example2').DataTable( {
            "responsive": true,
              "autoWidth": false,
            lengthChange: false,
            dom: 'Bfrtip',
            buttons: []
	} );
});
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#quickForm1').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#quickForm2').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
