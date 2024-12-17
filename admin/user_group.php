<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | User Group</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="dist/img/AdminLTELogo.png">
    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
            <a href="user_group.php" class="nav-link active">
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
            <h1>Weekly</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Group</li>
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
                    <div class="col-md-6" style="margin-left:40%"><h5 class="card-title"><b>Subscribers</b></h5></div>
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
                    <form role="form" method="post" id="quickForm">
                        <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addGroup"><i class="fa fa-plus"> Add Group</i>
                        </button>
                            <div class="modal fade" id="addGroup">
                                <div class="modal-dialog" style="width:450px !important;">
                                  <form action="">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="margin-left:23%"><i class="fa fa-plus"> Add Group</i></h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="card card-primary">
                                       <div class="card-body">
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="form-group">
                                              <label for="gname">Group Name: <span style="color:red;">*</span></label>
                                                <input id="gname" type="text" name="Groupname" class="form-control" placeholder="Enter Group Name.." required>
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="form-group">
                                                <label for="dscrptn">Description: <span style="color:red;">*</span></label>
                                            <textarea id="dscrptn" class="form-control" rows="3" name="dscrptn" placeholder="Enter Description.." required></textarea>
                                              </div>
                                          </div>
                                          <div class="col-sm-6">
                                          <!-- checkbox -->
                                          <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="t1" id="customCheckbox1" value="option1">
                                              <label for="customCheckbox1" class="custom-control-label">Allow Add</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="t2" id="customCheckbox2" value="option2">
                                              <label for="customCheckbox2" class="custom-control-label">Allow Edit</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="t3" id="customCheckbox3" value="option3">
                                              <label for="customCheckbox3" class="custom-control-label">Allow Delete</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <!-- radio -->
                                          <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="t4" id="customCheckbox4" value="option4">
                                              <label for="customCheckbox4" class="custom-control-label">Allow Print</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="t5" id="customCheckbox5" value="option5">
                                              <label for="customCheckbox5" class="custom-control-label">Allow Import</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                              <input class="custom-control-input" type="checkbox" name="t6" id="customCheckbox6" value="option5">
                                              <label for="customCheckbox6" class="custom-control-label">Allow Export</label>
                                            </div>
                                          </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                                    </div>
                                  </div>
                                  </form>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              </div>
                      <div class="col-md-6">
                        <form role="form" method="post" enctype="multipart/form-data" id="ImportD">
                            <div class="form-group">
                                <div class="input-group">
                                  <div class="custom-file">
                                    <label class="custom-file-label" for="ImportData">Import Data</label>
                                    <input type="file" name="importData" class="custom-file-input" id="ImportData" required>
                                  </div>
                                  <div class="input-group-append">
                                        <button class="btn btn-primary btn-md"> Upload <i class="fa fa-arrow-up"></i></button>
                                  </div>
                                </div>
                              </div>
                          </form>
                      </div>
                  <div class="col-md-4"></div>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                    <th>Group Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
              <tbody>
                  <tr>
                    <td>Downing Group</td>
                    <td>Downing Description</td>
                    <td>
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#update1"><i class="fa fa-pencil-alt"> Edit</i></button>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_ugroup" ><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Roro Group</td>
                    <td>Roro Description</td>
                    <td>
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#update2"><i class="fa fa-pencil-alt"> Edit</i></button>
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_ugroup" ><i class="fa fa-trash"> Delete</i></button>
                    </td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
                    <th>Group Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
              </tfoot>
            </table>
            <div class="modal fade" id="update1">
                <div class="modal-dialog" style="width:450px !important;">
                <form action="" role="form" method="post" id="quickForm1">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" style="margin-left:23%"><i class="fa fa-spinner"> Update Downing Group</i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="card card-primary">
                   <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                                <label for="grpname">Group Name: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="grpName" id="grpname" placeholder="Enter Group Name.." value="Downing Group" required>
                                  </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="description">Description: <span style="color:red;">*</span></label>
                                <textarea class="form-control" id="description" name="dscrptn" rows="3" placeholder="Enter Description.." required>Downing Description</textarea>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <!-- checkbox -->
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="option1">
                              <label for="customCheckbox11" class="custom-control-label">Allow Add</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox22" value="option2">
                              <label for="customCheckbox22" class="custom-control-label">Allow Edit</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox33" value="option3">
                              <label for="customCheckbox33" class="custom-control-label">Allow Delete</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- radio -->
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox44" value="option4">
                              <label for="customCheckbox44" class="custom-control-label">Allow Print</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox55" value="option5">
                              <label for="customCheckbox55" class="custom-control-label">Allow Import</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox66" value="option5">
                              <label for="customCheckbox66" class="custom-control-label">Allow Export</label>
                            </div>
                          </div>
                        </div>
                          </div>
                        </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-spinner"></i> Update</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
            <div class="modal fade" id="update2">
                <div class="modal-dialog" style="width:450px !important;">
                <form action="" role="form" method="post" id="quickForm2">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" style="margin-left:23%"><i class="fa fa-spinner"> Update Roro Group</i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="card card-primary">
                   <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <label for="grpname">Group Name: <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="grpname" name="Groupname" placeholder="Enter Group Name.." value="Roro Group" required>
                              </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="description">Description: <span style="color:red;">*</span></label>
                            <textarea class="form-control" id="description" name="dscrptn" rows="3" placeholder="Enter Description.." required>Roro Description</textarea>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <!-- checkbox -->
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="option1">
                              <label for="customCheckbox11" class="custom-control-label">Allow Add</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox22" value="option2">
                              <label for="customCheckbox22" class="custom-control-label">Allow Edit</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox33" value="option3">
                              <label for="customCheckbox33" class="custom-control-label">Allow Delete</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <!-- radio -->
                          <div class="form-group">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox44" value="option4">
                              <label for="customCheckbox44" class="custom-control-label">Allow Print</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox55" value="option5">
                              <label for="customCheckbox55" class="custom-control-label">Allow Import</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox" id="customCheckbox66" value="option5">
                              <label for="customCheckbox66" class="custom-control-label">Allow Export</label>
                            </div>
                          </div>
                        </div>
                          </div>
                        </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-spinner"></i> Update</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              <div class="modal fade" id="delete_ugroup">
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
                    </div>
                   <!-- /.card-body -->
                  </div> <!-- /.card -->
                 </div>
                </div>
              </div>
            </div>
        <!-- /.card -->
        </div>
    </div>
  </section>
<!-- /.content -->
</div>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
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
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
    
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
$(document).ready(function(){
         	var table = $('#example2').DataTable( {
            "responsive": true,
              "autoWidth": false,
            lengthChange: false,
            dom: 'Bfrtip',
            buttons: [
                {
                    text: '<i class ="fa fa-file-excel"></i> Excel',
                    extend: 'excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                }, 
                {
                    text: '<i class ="fa fa-file-pdf"></i> PDF',
                    extend: 'pdfHtml5',
                    download: 'open',
                    exportOptions: {
                        columns: ':visible'
                        
                    }
                },
                {
                    text: '<i class ="fa fa-print"></i> Print',
                    extend: 'print',
                    customize: function(win){
                        $(win.document.body)
                                .prepend('<div class="container-fluid"><div class="col-lg-12 col-xs-12"><h1><b><center>Laundry Booking System</center></b></h1></div></div>');
                    },
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    text: "<i class ='fa fa-eye-slash'></i> Column Visibility"
                }
            ],
            columnDefs: [ {
                visible: false
            } ]
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
  $('#ImportD').validate({
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
