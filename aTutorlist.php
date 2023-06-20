<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                <a class="nav-link" href="aDashboard.php">
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
                 <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Students</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="aStudentlist.php">List of Students</a>
           
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                            <i class='fas fa-chalkboard-teacher'></i>
                    <span>Tutor</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="aTutorlist.php">List of Tutors</a>
                        <a class="collapse-item" href="aApproval.php">List of Applicants</a>
                        <a class="collapse-item" href="aDeclined.php">Declined Tutors</a>
                </div>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                <div class="container-fluid" style = "text-align:center">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List of Tutors</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tutors</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php 

                                include ("condb.php");
                                  echo"<thead>
                                  <tr>
                                    <th width='10%'>Tutor ID</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th width='15%'>Options</th>
                                  </tr>";

                               $sql = "SELECT * FROM tutortbl WHERE Status = '1' AND Approve = '1' ORDER BY TID";
                                $result = mysqli_query($cn, $sql);
                                  while($row = mysqli_fetch_assoc($result))
                                  {

                                echo"<tbody>";
                                echo "<tr>";
                                echo "<form method='POST' action='download.php?id=" . $row['TID'] . "&file=" . $row['CV'] . "'>"; 
                                echo "<input type='hidden' id='ID' name='ID' value='" . $row['TID'] . "'>";
                                echo "<td>" . $row['TID'] . " </td> ";
                                echo "<td>" . $row['Fullname'] . " </td> ";
                                echo "<td>" . $row['Email'] . " </td> ";
                                echo "<td>
                                <button type='button' class='open-edit btn btn-success btn-xs' data-toggle='tooltip' title='Edit Information'><i class='fa fa-pencil-alt'></i></button>
                                <button type='button' class='open-confirmation btn btn-danger btn-xs' data-toggle='tooltip' title='Remove Tutor'><i class='fa fa-trash'></i></button>
                                </td></form>";
                                echo "</tr>";
                }
                         
                   ?>
               </table>
                            </div>
                        </div>
                    </div>

                    <?php

                        $sql2 = "SELECT * FROM tutortbl";
                        $result2 = mysqli_query($cn, $sql);
                        $row2 = mysqli_fetch_assoc($result2);


                   echo" <div class='modal fade' id='edit' style = 'text-align:center'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='Update.php?id=" . $row2['TID'] . "'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Edit Tutor Profile</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                            echo "<div class='card card-primary'>
                              <div class='card-body'>
                            <div class='row'>";

                            echo '<div class="col-12">
                            <img src="TutorProfile.png" alt="Avatar" style="width:200px">
                                </div>';

                           echo'<div class="col-12">
                            <label for="">Tutor ID</label>
                                 <input style = "text-align:center" type="text" name = "tID" id = "tID" class="form-control" 
                                 readonly>
                              </div>';


                          echo'<div class="col-12">
                             <label for="">Full name</label>
                                <input style = "text-align:center" type="text" name = "fname" id = "fname" class="form-control" >
                              </div>';

                            echo'<div class="col-12">
                             <label for="">Email</label>
                                <input style = "text-align:center" type="text" name = "temail" id = "temail" class="form-control" >
                              </div>';

                            echo"
                            </div>
                            </div>
                            </div>";

                            echo '<div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>';
                        echo ' <input type= "submit" class="btn btn-success" name = "" value = "Submit">
                       </div>';

                       echo "
                       </div>
                         </div>
                          </div>
                          </form>";

                        echo" <div class='modal fade' id='confirmation' style = 'text-align:center'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='Delete.php?id=" . $row2['TID'] . "' method='POST'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Delete Tutor Data</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                            echo "<div class='card card-primary'>
                              <div class='card-body'>
                            <div class='row'>";

                            echo '<div class="col-12">
                            <img src="TutorProfile.png" alt="Avatar" style="width:200px">
                                </div>';

                           echo'<div class="col-12">
                            <label for="">Tutor ID</label>
                                 <input style = "text-align:center" type="text" name = "tID1" id = "tID1" class="form-control" 
                                 readonly>
                              </div>';


                          echo'<div class="col-12">
                             <label for="">Full name</label>
                                <input style = "text-align:center" type="text" name = "fname1" id = "fname1" class="form-control" readonly>
                              </div>';

                            echo'<div class="col-12">
                             <label for="">Email</label>
                                <input style = "text-align:center" type="text" name = "temail1" id = "temail1" class="form-control"  readonly>
                              </div>';

                              echo"
                            </div>
                            </div>
                            </div>";

                       echo '<div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>';
                        echo ' <input type= "submit" class="btn btn-success" name = "" value = "Submit">
                       </div>
                       </div>
                         </div>
                          </div></form>';


                       ?>       

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
                <div class="modal-body">Are you sure you want to end session?</div>
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

    <script>

        $(document).ready(function(){
            $('.open-edit').on('click', function(){
                $('#edit').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#tID').val(data[0]);
                $('#fname').val(data[1]);
                $('#temail').val(data[2]);
            });
        });
    
    </script>

    <script>

        $(document).ready(function(){
            $('.open-confirmation').on('click', function(){
                $('#confirmation').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#tID1').val(data[0]);
                $('#fname1').val(data[1]);
                $('#temail1').val(data[2]);
                $('#specializaiton1').val(data[3]);

                $('#cName').val(data[0] + "-" + data[1]);
            });
        });
    
    </script>

</body>

</html>