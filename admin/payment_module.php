<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Payment Module</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="dist/img/AdminLTELogo.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <a href="customer_form.php" class="nav-link">
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
            <a href="payment_module.php" class="nav-link active">
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
            <h1>Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>
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
              <div class="card-header">
                   <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="margin-left:40%"><h5 class="card-title"><b>PAYMENT MODULE</b></h5></div>
                    <div class="col-md-3"></div>
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
                        <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addPayer"><i class="fa fa-plus"> Process Payment</i>
                        </button>
                    </h3>
                  </div>
      <!-- /.card-header -->
          <div class="card-body">
            <table id="payment" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>Profile</th>
                        <th>Fullname</th>
                        <th>Service Name</th>
                        <th>Unit Name</th>
                        <th>Quantity</th>
                        <th>Charge Amount</th>
                        <th>Discount</th>
                        <th>Remarks</th>
                        <th>Payment Status</th>
                        <th>Date of Payment</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="dist/img/avatar2.png" alt="AdminLTE Logo" class="brand-image img-square elevation-3" width="40" style="opacity: .8"></td>
                       <td>Sharon Cuneta</td>
                        <td>Washing</td>
                        <td>Shirts</td>
                        <td>12</td>
                        <td>₱7,800.00</td>
                        <td>20</td>
                        <td>Remarks</td>
                        <td><span style="color:green;"><b>Payed </b><i class="fa fa-check"></i></span></td>
                        <td>03/21/2021</td>
                       <td>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#updateCust1"><i class="fa fa-pencil-alt"> Edit</i> 
                            </button>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_umanagement"><i class="fa fa-trash"> Delete</i></button>
                        </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Profile</th>
                    <th>Fullname</th>
                    <th>Service Name</th>
                    <th>Unit Name</th>
                    <th>Quantity</th>
                    <th>Charge Amount</th>
                    <th>Discount</th>
                    <th>Remarks</th>
                    <th>Payment Status</th>
                    <th>Date of Payment</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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
                              <form role="form" id="quickForm1">
                                <div class="card-body">
                                    <div  class="row">
                                        <div  class="col-sm-6">
                                            <div class="form-group">
                                              <label for="cstmr">Customer Name <span style="color:red;">*</span></label>
                                              <select id="cstmr" name="customer" class="form-control select2bs4" style="width: 100%;" autofocus required>
                                                <option value="Sharon Cuneta">Sharon Cuneta</option>
                                                <option value="Coco Martin">Coco Martin</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="srvc_nm">Service Name <span style="color:red;">*</span></label>
                                              <select id="srvc_nm" name="service" class="form-control select2bs4" style="width: 100%;" required>
                                                <option value="Washing">Washing</option>
                                                <option value="Ironing">Ironing</option>
                                                <option value="Dry Cleaning">Dry Cleaning</option>
                                                <option value="Others">Others</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="unt_nm">Unit Name <span style="color:red;">*</span></label>
                                              <select id="unt_nm" name="unit" class="form-control select2bs4" style="width: 100%;" required>
                                                <option value="Shirts">Shirts</option>
                                                <option value="Pants">Pants</option>
                                                <option value="Jeans">Jeans</option>
                                                <option value="Others">Others</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="qntty">Quantity <span style="color:red;">*</span></label>
                                                <input type="number" id="qntty" name="quantity" class="form-control" placeholder="Enter Quantity.." style="width: 100%;" value="12" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="chrg">Charge Amount <span><i>(Quantity * Unit Charge)</i></span></label>
                                                <input id="chrg" type="number" name="amount" class="form-control" placeholder="Charge Amount.." size="40" value="7800" required><i></i>
                                            </div>
                                        </div>
                                        <div  class="col-sm-6">
                                            <div class="horizontal-form">
                                                <div class="form-group">
                                                    <label for="dscnt">Discount <span style="color:red;">*</span></label>
                                                    <input id="dscnt" type="number" name="discount" class="form-control" placeholder="Discount.." size="40" value="20" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rmrks">Remarks <span style="color:red;">*</span></label>
                                                    <textarea id="rmrks" name="remarks" class="form-control" placeholder="Enter Remarks.." size="40" required>Remarks</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pymnt_stt">Payment Status <span style="color:red;">*</span></label>
                                                    <input id="pymnt_stt" type="text" name="payment_stats" class="form-control" placeholder="Payment Status.." value="Payed" size="40" required>
                                                </div>
                                                <div class="form-group">
                                                  <label for="dpayment">Date of Payment <span style="color:red;">*</span></label>
                                                    <input type="date" class="form-control" value="2021-03-21" min="1990-01-01" max="2021-12-31" id="dpayment" name="date_payment" required>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" checked>
                                                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>. <span style="color:red;">*</span></label>
                                                    </div>
                                                  </div>
                                                <div class="form-group">
                                                    <button class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancel</button>
                                                    <button name="btn_submit" type="submit" class="btn btn-primary btn-md"><i class="fa fa-check"></i> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                </div>
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
                <div class="modal fade" id="addPayer">
                    <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" style="margin-left:37%"><i class="fa fa-plus"> Add Payer</i></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                                <!-- form start -->
                              <form role="form" id="quickForm">
                                <div class="card-body">
                                    <div  class="row">
                                        <div  class="col-sm-6">
                                            <div class="form-group">
                                              <label for="cstmr">Customer Name <span style="color:red;">*</span></label>
                                              <select id="cstmr" name="customer" class="form-control select2bs4" style="width: 100%;" autofocus required>
                                                <option selected disabled>Select Customer Name</option>
                                                <option value="Sharon Cuneta">Sharon Cuneta</option>
                                                <option value="Coco Martin">Coco Martin</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="srvc_nm">Service Name <span style="color:red;">*</span></label>
                                              <select id="srvc_nm" name="service" class="form-control select2bs4" style="width: 100%;" required>
                                                <option selected disabled>Select Service Name</option>
                                                <option value="Washing">Washing</option>
                                                <option value="Ironing">Ironing</option>
                                                <option value="Dry Cleaning">Dry Cleaning</option>
                                                <option value="Others">Others</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="unt_nm">Unit Name <span style="color:red;">*</span></label>
                                              <select id="unt_nm" name="unit" class="form-control select2bs4" style="width: 100%;" required>
                                                <option selected disabled>Select Unit Name</option>
                                                <option value="Shirts">Shirts</option>
                                                <option value="Pants">Pants</option>
                                                <option value="Jeans">Jeans</option>
                                                <option value="Others">Others</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="qntty">Quantity <span style="color:red;">*</span></label>
                                                <input type="number" id="qntty" name="quantity" class="form-control" placeholder="Enter Quantity.." style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="chrg">Charge Amount <span><i>(Quantity * Unit Charge)</i></span></label>
                                                <input id="chrg" type="number" name="amount" class="form-control" placeholder="Charge Amount.." size="40" required><i></i>
                                            </div>
                                        </div>
                                        <div  class="col-sm-6">
                                            <div class="horizontal-form">
                                                <div class="form-group">
                                                    <label for="dscnt">Discount <span style="color:red;">*</span></label>
                                                    <input id="dscnt" type="number" name="discount" class="form-control" placeholder="Discount.." size="40" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="rmrks">Remarks <span style="color:red;">*</span></label>
                                                    <textarea id="rmrks" name="remarks" class="form-control" placeholder="Enter Remarks.." size="40" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pymnt_stt">Payment Status <span style="color:red;">*</span></label>
                                                    <input id="pymnt_stt" type="text" name="payment_stats" class="form-control" placeholder="Payment Status.." size="40" required>
                                                </div>
                                                <div class="form-group">
                                                  <label for="dpayment">Date of Payment <span style="color:red;">*</span></label>
                                                    <input type="date" class="form-control"  id="dpayment" name="date_payment" required>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>. <span style="color:red;">*</span></label>
                                                    </div>
                                                  </div>
                                                <div class="form-group">
                                                    <button class="btn btn-danger btn-md" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> Cancel</button>
                                                    <button name="btn_submit" type="submit" class="btn btn-primary btn-md"><i class="fa fa-check"></i> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                </div>
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
    <strong>Copyright &copy; 2020-2021 <a href="#">LaundryBookingUI</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> function reload(){ window.location.reload(); } </script>
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
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"  type="text/javascript"></script>
<!-- datepicker -->
<script src="plugins/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/bower_components/fastclick/lib/fastclick.js"></script> 
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
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
<script>
$(document).ready(function(){
         	var table = $('#payment').DataTable( {
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
});
</script>
</body>
</html>
