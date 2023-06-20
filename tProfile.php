<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutor - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <style>
.badge {
    font-size: 25px;
    font-weight: 200
}

.badge i {
    font-size: 20px;
    font-weight: 200
}

.about-rating {
    font-size: 15px;
    font-weight: 500;
    margin-top: 10px
}

.total-ratings {
    font-size: 12px
}

.bg-custom {
    background-color: #b7dd29 !important
}

.progress {
    margin-top: 10px
}</style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
    
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="tDashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="  fas fa-clipboard-list"></i>
                    <span>Transactions</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tRecord.php">Record Transactions</a>
           
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                   <i class="fa fa-tasks"></i>
                    <span>Appointments</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tAppointment.php">View Appointments</a>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa fa-book"></i>
                    <span>Bookshelves</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tLesson.php">Lessons</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="tClassroom.php">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Classroom</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["Fullname"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="tProfile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/undraw_profile.svg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION["Fullname"]; ?></h4>
                      <p class="text-secondary mb-1">
                        <?php 
                        include ("condb.php");
                      $id = $_SESSION["TID"]; 
                        $sql = "SELECT * FROM tutortbl WHERE TID = '$id' ORDER BY TID";  
                        $result2 = mysqli_query($cn, $sql);
                        $row2 = mysqli_fetch_assoc($result2);

                        echo $row2['Specialization'];

                    ?> Tutor</p>
                    
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $_SESSION["Fullname"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
                        include ("condb.php");
                      $id = $_SESSION["TID"]; 
                        $sql = "SELECT * FROM tutortbl WHERE TID = '$id' ORDER BY TID";  
                        $result2 = mysqli_query($cn, $sql);
                        $row2 = mysqli_fetch_assoc($result2);

                        echo $row2['Email'];

                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Curriculum Vitae</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
                        include ("condb.php");
                      $id = $_SESSION["TID"]; 
                        $sql = "SELECT * FROM tutortbl WHERE TID = '$id' ORDER BY TID";  
                        $result2 = mysqli_query($cn, $sql);
                        $row2 = mysqli_fetch_assoc($result2);

                        echo $row2['CV'];

                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Hourly Rate</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
                        include ("condb.php");
                      $id = $_SESSION["TID"]; 
                        $sql = "SELECT * FROM tutortbl WHERE TID = '$id' ORDER BY TID";  
                        $result2 = mysqli_query($cn, $sql);
                        $row2 = mysqli_fetch_assoc($result2);

                        if ($row2['Hourly'] != null) {
                            echo '₱'. $row2['Hourly'];
                        }else{
                            echo 'Please Update Hourly Rate';
                        }

                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Certificate</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
                      echo $row2['Certification1'];

                    ?>
                    <br>
                    <?php 
                      echo $row2['Certification2'];

                    ?>
                    <br>
                    <?php 
                      echo $row2['Certification3'];

                    ?>
                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info"  href="etProfile.php">Upload Certifications</a>
                      <a class="btn btn-success"  href="rHourly.php">Update Hourly Rate</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                   <div class="col-md-4 border-right">
                    <?php
                    include ("condb.php");
                    $id = $_SESSION["TID"];

                    $sql = "SELECT * FROM ratingtbl WHERE TutorID = '$id' AND Rating = '1'";  
                    $result2 = mysqli_query($cn, $sql);
                    $star1 = mysqli_num_rows($result2);

                   // echo $star1;

                    $sql = "SELECT * FROM ratingtbl WHERE TutorID = '$id' AND Rating = '2'";  
                    $result2 = mysqli_query($cn, $sql);
                    $star2 = mysqli_num_rows($result2);

                   // echo $star2;

                    $sql = "SELECT * FROM ratingtbl WHERE TutorID = '$id' AND Rating = '3'";  
                    $result2 = mysqli_query($cn, $sql);
                    $star3 = mysqli_num_rows($result2);

                    //echo $star3;

                    $sql = "SELECT * FROM ratingtbl WHERE TutorID = '$id' AND Rating = '4'";  
                    $result2 = mysqli_query($cn, $sql);
                    $star4 = mysqli_num_rows($result2);

                    //echo $star4;


                    $sql = "SELECT * FROM ratingtbl WHERE TutorID = '$id' AND Rating = '5'";  
                    $result2 = mysqli_query($cn, $sql);
                    $star5 = mysqli_num_rows($result2);

                    //echo $star5;

                    $tot_stars = $star1 + $star2 + $star3 + $star4 + $star5;

                   if ($tot_stars != 0) {

                      $percent1 = $star1 * 100 / $tot_stars;
                      $percent2 = $star2 * 100 / $tot_stars;
                      $percent3 = $star3 * 100 / $tot_stars;
                      $percent4 = $star4 * 100 / $tot_stars;
                      $percent5 = $star5 * 100 / $tot_stars;
                      
                   }else{
                    $percent1 = 0;
                    $percent2 = 0;
                    $percent3 = 0;
                    $percent4 = 0;
                    $percent5 = 0;
                   }
                   
                     

                    ?>
                <div class="ratings text-center p-4 py-5"> <span class="badge bg-success"><?php
           echo $tot_stars;
        ?> ratings<i class="fa fa-star-o"></i></span></div>
            </div>
            <div class="col-md-8">
                <div class="rating-progress-bars p-3">
                    <div class="progress-1 align-items-center">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php
                            echo $percent5; ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> <?php
                            echo $percent5; ?>% </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-custom" role="progressbar" style="width: <?php
                            echo $percent4; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php
                            echo $percent4; ?>%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php
                            echo $percent3; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php
                            echo $percent3; ?>%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php
                            echo $percent2; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php
                            echo $percent2; ?>%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php
                            echo $percent1; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php
                            echo $percent1; ?>%</div>
                        </div>
                    </div>
                </div>
            </div>
                    
                  </div>
                  <hr>
                  
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
                   
            </div>
        </div>
                        

        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="outSuccess.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>