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
                <div class="container-fluid" style = "text-align:center">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List of Lesson/Activities</h1>
                    <!-- DataTales Example -->
                       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="open-addNewLesson btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewLesson" > Add Lesson</button>
                            <button type="button" class="open-addNewLesson btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewActivity" > Add Activity</button>
                </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php 

                                include ("condb.php");
                                  echo"<thead>
                                  <tr>
                                    <th width='10%'>Lesson ID</th>
                                    <th>Filename</th>
                                    <th>Date Posted</th>
                                    <th>Student</th>
                                  </tr>";

                                    $name = $_SESSION["Fullname"];

                                $sql = "SELECT * FROM lecturetbl WHERE Status = '1' AND lTutor = '$name' ORDER BY LID";
                                $result = mysqli_query($cn, $sql);
                                  while($row = mysqli_fetch_assoc($result))
                                  {

                                echo"<tbody>";
                                echo "<tr>";
                                echo "<form method='POST'>"; 
                                echo "<input type='hidden' id='ID' name='ID' value='" . $row['LID'] . "'>";
                                echo "<td>L - " . $row['LID'] . " </td> ";
                                echo "<td>" . $row['Lecturename'] . " </td> ";
                                echo "<td>" . $row['lDate'] . " </td> ";
                                echo "<td>" . $row['lStudent'] . " </td> ";
                                echo "</form>";
                                echo "</tr>";
                }
                
                   ?>

                   
               </table>
                            </div>
                        </div>
                    </div>



                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php 

                                $name = $_SESSION["Fullname"];

                                include ("condb.php");
                                  echo"<thead>
                                  <tr>
                                    <th width='10%'>Activity ID</th>
                                    <th>Filename</th>
                                    <th>Submission Date</th>
                                    <th>Student</th>
                                  </tr>";

                                $sql = "SELECT * FROM activitytbl WHERE Status = '1' AND aTutor = '$name' ORDER BY AID";
                                $result = mysqli_query($cn, $sql);
                                  while($row = mysqli_fetch_assoc($result))
                                  {

                                echo"<tbody>";
                                echo "<tr>";
                                echo "<form method='POST'>"; 
                                echo "<input type='hidden' id='ID' name='ID' value='" . $row['AID'] . "'>";
                                echo "<td>A - " . $row['AID'] . " </td> ";
                                echo "<td>" . $row['Activityname'] . " </td> ";
                                echo "<td>" . $row['aDate'] . " </td> ";
                                echo "<td>" . $row['aStudent'] . " </td> ";
                                echo "</form>";
                                echo "</tr>";
                }
                
                   ?>
               </table>
                            </div>
                        </div>
                    </div>

                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Finished Activity</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php 

                                include ("condb.php");

                                $name = $_SESSION["Fullname"];
                                  echo"<thead>
                                  <tr>
                                    <th  width='10%'>Activity ID</th>
                                    <th>Activity name</th>
                                    <th>Submission Date</th>
                                    <th>Submitted File</th>
                                    <th></th>
                                  </tr>";

                                $sql = "SELECT * FROM activitytbl WHERE Status = '1' AND fAct = '1' AND aTutor = '$name' ORDER BY AID";
                                $result = mysqli_query($cn, $sql);
                                  while($row = mysqli_fetch_assoc($result))
                                  {

                                echo"<tbody>";
                                echo "<tr>";
                                echo "<form method='POST' action='subDownload.php?id=" . $row['AID'] . "&file=" . $row['aSubFile'] . "'>"; 
                                echo "<input type='hidden' id='ID' name='ID' value='" . $row['AID'] . "'>";
                                echo "<td>" . $row['AID'] . " </td> ";
                                echo "<td>" . $row['Activityname'] . " </td> ";
                                echo "<td>" . $row['aDate'] . " </td> ";
                                echo "<td>" . $row['aSubFile'] . " </td> ";
                                echo "<td><button type='submit' class='btn btn-primary btn-xs' data-toggle='tooltip'>View Submitted Activity</button>
                                </td></form>";
                                echo "</tr>";
                }
                
                   ?>
               </table>
                            </div>
                        </div>
                    </div>

                    <?php

                        $name = $_SESSION["Fullname"];

                    echo" <div class='modal fade' id='addNewLesson'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form method='POST' action='upLesson.php?' enctype='multipart/form-data'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Upload a Lesson</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                            echo "<div class='card card-primary'>
                              <div class='card-body'>
                            <div class='row'>";

                            echo '<br><div class="col-12" style = "text-align:center">
                            <label for=""><center>Type of File</center></label>
                             <input type="text" style = "text-align:center" class="form-control" name="typetype" id = "typetype" value = "Lesson" readonly>
                                  </div>';

                            echo'<div class="col-6">
                             <label for="">Tutor</label>
                                <input type="text" class="form-control" value = " '. $name .' " readonly>
                              </div><br>';

                             echo'<br><div class="col-6">
                            <label for=""><center>Title</center></label>
                                 <input type="text" name = "title" id ="title" class="form-control" required>
                              </div>';

                            echo '<br><div class="col-12" style = "text-align:center">
                            <label for=""><center>Student name</center></label>
                             <select style = "text-align:center" name ="student" id = "student" class="form-control">
                             <option value="0" required> - SELECT STUDENT- </option>';
                                $name = $_SESSION["Fullname"];

                                $sql3 = "SELECT * FROM classroomtbl WHERE Status = '1' AND cTutor = '$name' ORDER BY CID";
                                $result3 = mysqli_query($cn, $sql3);
                                while($row3 = mysqli_fetch_assoc($result3))
                                  {
                                    $classid = $row3['CID'];
                                    $student = $row3['cStudent'];
                                  echo'<option value="'.$student.'">'.$student.'</option>
                                    ';
                                }
                                echo'</select>
                                  </div>';

                                  echo'<br><div class="col-12" style = "text-align:center">

                             <label for="myfile"><center>Select a file:</center></label>
                             <br>
                                <input type="file" id="file" name="file" required>
                                     <br>
                                     <label for="">.asc .doc .docx .rtf .msg, .pdf .txt .wpd .wps .xls .xld .xlk</label>
                              </div> <br>';

                              echo '<div class="modal-footer justify-content-between col-12">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>';
                        echo ' <input type= "submit" class="btn btn-success" name = "" value = "Submit">
                       </div>';

                            echo"
                            </div>
                            </div>
                            </div>";

                       echo "
                       </div>
                         </div>
                          </div>
                          </form>";
                      
                       ?>

                       <?php

                        $name = $_SESSION["Fullname"];

                    echo" <div class='modal fade' id='addNewActivity'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form method='POST' action='upActivity.php?' enctype='multipart/form-data'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Upload Activity</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                            echo "<div class='card card-primary'>
                              <div class='card-body'>
                            <div class='row'>";

                              echo '<br><div class="col-12" style = "text-align:center">
                            <label for=""><center>Type of File</center></label>
                             <input type="text" style = "text-align:center" class="form-control" name="typetype" id = "typetype" value = "Activity" readonly>
                                  </div>';

                            echo'<div class="col-6">
                             <label for="">Tutor</label>
                                <input type="text" class="form-control" value = " '. $name .' " readonly>
                              </div><br>';

                             echo'<br><div class="col-6">
                            <label for=""><center>Title</center></label>
                                 <input type="text" name = "title" id ="title" class="form-control" required>
                              </div>';

                            echo '<br><div class="col-12" style = "text-align:center">
                            <label for=""><center>Student name</center></label>
                             <select style = "text-align:center" name ="student" id = "student" class="form-control">
                             <option value="0" required> - SELECT STUDENT- </option>';
                                $name = $_SESSION["Fullname"];

                                $sql3 = "SELECT * FROM classroomtbl WHERE Status = '1' AND cTutor = '$name' ORDER BY CID";
                                $result3 = mysqli_query($cn, $sql3);
                                while($row3 = mysqli_fetch_assoc($result3))
                                  {
                                    $classid = $row3['CID'];
                                    $student = $row3['cStudent'];
                                  echo'<option value="'.$student.'">'.$student.'</option>
                                    ';
                                }
                                echo'</select>
                                  </div>';

                                   echo'<br><div class="col-12">
                             <label for="">Submission Date</label>
                                <input style = "text-align:center" type="date" class="form-control" name="sDate" id="sDate">
                              </div><br>';

                                  echo'<br><div class="col-12" style = "text-align:center">

                             <label for="myfile"><center>Select a file:</center></label>
                             <br>
                                <input type="file" id="file" name="file" required>
                                     <br>
                                     <label for="">.asc .doc .docx .rtf .msg, .pdf .txt .wpd .wps .xls .xld .xlk</label>
                              </div> <br>';

                              echo '<div class="modal-footer justify-content-between col-12">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
                        echo ' <input type= "submit" class="btn btn-success" name = "" value = "Submit">
                       </div>';

                            echo"
                            </div>
                            </div>
                            </div>";

                       echo "
                       </div>
                         </div>
                          </div>
                          </form>";
                      
                       ?>
           

                </div>
                   <!-- Content Row -->
                        

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

    <script>

        $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;

        // or instead:
        // var maxDate = dtToday.toISOString().substr(0, 10);

        
        $('#sDate').attr('min', maxDate);
        });

        /*$(document).ready(function(){
            $('.open-addNewLesson').each('click', function(){
                $('#addNewLesson').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#tID').val(data[0]);
                $('#fname').val(data[1]);
                $('#temail').val(data[2]);
                $('#specializaiton').val(data[3]);
            });
        });*/
    
    </script>

    <script>

        /*$(document).ready(function(){
            $('.open-addNewActivity').each('click', function(){
                $('#addNewActivity').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#tID').val(data[0]);
                $('#fname').val(data[1]);
                $('#temail').val(data[2]);
                $('#specializaiton').val(data[3]);
            });
        });*/
    
    </script>

</body>

</html>