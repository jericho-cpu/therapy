<?php

    session_start();
    include '../config.php';
    
    if(isset($_SESSION['admin_Id'])) {
        $id = $_SESSION['admin_Id'];

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SVFC Guidance & Counseling</title>

  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="../images/logo3.jpg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css"> -->
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ba6fe04144.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../css/summernote-bs4.min.css">

  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- TOASTER -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  

  <!-- DataTables -->
  <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../css/buttons.bootstrap4.min.css">

  <script src="../js/bootstrap5-downloaded-ni-erwin/bootstrap.bundle.min.js" type="text/javascript"></script>

<style>
  .modal-content{
    -webkit-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -moz-box-shadow: 0 5px 15px rgba(0,0,0,0);
    -o-box-shadow: 0 5px 15px rgba(0,0,0,0);
    box-shadow: 0 5px 15px rgba(0,0,0,0);
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation" src="../dist/img/logo3.jpg" alt="Admin" height="120" width="120">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Administrators</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->


       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="my_messages.php" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">
              <img src="../dist/img/icon3.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> 


            <!-- Message End -->


          </a>
          <div class="dropdown-divider"></div>
          <a href="my_messages.php" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>


      <!-- Notifications Dropdown Menu -->
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <!-- FULL SCREEN -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- FULL SCREEN -->


      <!-- RIGHT SIDEBAR -->
       <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <!-- RIGHT SIDEBAR -->

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../dist/img/logo3.jpg" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SVFC - Admin</span>
    </a>

    <?php 
        $admin = mysqli_query($conn, "SELECT * FROM admin WHERE admin_Id='$id'");
        $row = mysqli_fetch_array($admin);
    ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images-admin/<?php echo $row['image']; ?>" alt="User Image" style="height: 34px; width: 34px; border-radius: 50%;">
        </div>
        <div class="info">
          <a href="about_me.php" class="d-block"><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           <li class="nav-header">APPOINTMENT</li>
          <?php
            $appointment = mysqli_query($conn, "SELECT appointment_Id from appointment");
             $row_appointment = mysqli_num_rows($appointment);
          ?>
          <li class="nav-item">
            <a href="appointment.php" class="nav-link">
              <i class="fa-solid fa-calendar-check"></i>
              <p>
                &nbsp; Appointment list
                <span class="badge badge-danger right"><?php //echo $row_appointment;  ?></span>
              </p>
            </a>
          </li>


          <?php
            $consultancy_fee = mysqli_query($conn, "SELECT consult_fee_Id from consultancy_fee");
            $row_consultancy_fee = mysqli_num_rows($consultancy_fee);
          ?>
          <li class="nav-item">
            <a href="consultancy_fee.php" class="nav-link">
              <i class="fa-solid fa-sack-dollar"></i>
              <p>
                &nbsp; Consultancy fee list
                <span class="badge badge-secondary right"><?php echo $row_consultancy_fee;  ?></span>
              </p>
            </a>
          </li>



          <li class="nav-header">APPOINTMENT TRANSACTION</li>
          <?php
            $new_payment = mysqli_query($conn, "SELECT new_payment_Id from new_payment");
            $row_new_payment = mysqli_num_rows($new_payment);
          ?>
          <li class="nav-item">
            <a href="paid_patients.php" class="nav-link">
              <i class="fa-solid fa-calendar-check"></i>
              <!-- <i class="fa-solid fa-sack-dollar"></i> -->
              <p>
                &nbsp; Paid patients
                <span class="badge badge-danger right"><?php echo $row_new_payment;  ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaction_history.php" class="nav-link">
              <i class="fa-brands fa-bitcoin"></i>
              <p>
                &nbsp; Payment History
              </p>
            </a>
          </li>


          
          <li class="nav-header">USERS</li>
           <?php
            $admin = mysqli_query($conn, "SELECT admin_Id from admin");
            $row_admin = mysqli_num_rows($admin);
           ?>
          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="fa-solid fa-user-secret"></i>
              <p>
                &nbsp;&nbsp; Administrators
                <span class="badge badge-primary right"><?php echo $row_admin;  ?></span>
              </p>
            </a>
          </li>




          <?php
            $therapist = mysqli_query($conn, "SELECT therapist_Id from therapist");
            $row_therapist = mysqli_num_rows($therapist);
           ?>
          <li class="nav-item">
            <a href="therapist.php" class="nav-link">
              <i class="fa-solid fa-user-doctor"></i>
              <p>
                &nbsp; Therepist list
                <span class="badge badge-warning right"><?php echo $row_therapist;  ?></span>
              </p>
            </a>
          </li>





          <?php
            $users = mysqli_query($conn, "SELECT patient_Id from patient");
            $row_users = mysqli_num_rows($users);
           ?>
          <li class="nav-item">
            <a href="patient.php" class="nav-link">
              <i class="fa-solid fa-users"></i>
              <p>
                &nbsp; Patient list
                <span class="badge badge-success right"><?php echo $row_users;  ?></span>
              </p>
            </a>
          </li>



          <li class="nav-header">SECURITY</li>
          <li class="nav-item">
            <a href="changepassword.php" class="nav-link">
              <i class="fa-solid fa-key"></i>
              <p>
                &nbsp;&nbsp; Change password
              </p>
            </a>
          </li>




          <li class="nav-header">PROFILE</li>
          <li class="nav-item">
            <a href="about_me.php" class="nav-link">
              <i class="fa-solid fa-user"></i>
              <p>
                &nbsp;&nbsp; About me
              </p>
            </a>
          </li>
          
          


          <li class="nav-item">
            <a href="" data-toggle="modal" data-target="#logoutmodal" class="nav-link">
              <i class="fa-solid fa-power-off"></i>
              <p>
                &nbsp; Logout
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-------------------------------LOGOUT MODAL------------------------------------>
      <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
             <div class="modal-header alert-light">
              <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-large"></i> Admin logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
              </button>
            </div>
            <div class="modal-body">
              <form action="../logout.php" method="POST">
                <!--<input type="hidden" class="form-control" value="<?php echo $row['user_Id']; ?>" name="user_Id">-->
                <?php if($row['gender'] === 'Male'):?>
                    <h6>Mr.   <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php else: ?>
                    <h6>Ma'am <?php echo $row['lastname'];?>, are you sure you want to logout?</h6>
                <?php endif; ?>
            </div>
            <div class="modal-footer alert-light">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
              <button type="submit" class="btn btn-primary" name="delete_user"><i class="fa-solid fa-circle-check"></i> Confirm</button>
            </div>
              </form>
          </div>
        </div>
      </div>
  <!-------------------------------END LOGOUT MODAL-------------------------------->


<?php
// ------------------------------CLOSING THE SESSION OF THE LOGGED IN USER WITH else statement----------//
    } else {
     header('Location: ../index.php');
    }
?>
