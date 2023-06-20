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

    <title>Student - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');


.comment-box {
    padding: 5px
}

.comment-area textarea {
    resize: none;
    border: 1px solid #ad9f9f
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202
}

.rating {
    display: flex;
    margin-top: -10px;
    flex-direction: row-reverse;
    margin-left: -4px;
    float: left
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 19px;
    font-size: 25px;
    color: #ff0000;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
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
                <a class="nav-link" href="sDashboard.php">
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
                        <h6 class="collapse-header">View:</h6>
                        <a class="collapse-item" href="sRecord.php">Record Transactions</a>
           
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-briefcase"></i>
                    <span>Reservation</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">View:</h6>
                        <a class="collapse-item" href="sReservation.php">Set a Reservation</a>
          
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
                        <a class="collapse-item" href="sActivity.php">Activity</a>
                        <a class="collapse-item" href="sLesson.php">Lessons</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="sClassroom.php">
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
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row d-flex justify-content-center" style = "text-align:center">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <?php  
                                                include ("condb.php");

                                                $sname = $_SESSION["Fullname"];

                                                $sql = "SELECT * FROM classroomtbl WHERE Status = '1' AND cStudent='$sname' ORDER BY cTime";   
                                                $result2 = mysqli_query($cn, $sql);
                                                $row2 = mysqli_fetch_assoc($result2);
                                                  
                                                echo '<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Schedule</div>';

                                               if ($row2 === null) {
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">No Schedule Available</div>';
                                                }else{
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$row2['cTime'].'</div>';

                                                }
                                                  

                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <?php  
                                                include ("condb.php");

                                                $sname = $_SESSION["Fullname"];

                                                  $sql = "SELECT * FROM classroomtbl WHERE Status = '1' AND cStudent='$sname' ORDER BY cTime";   
                                                  $result2 = mysqli_query($cn, $sql);
                                                  $row2 = mysqli_fetch_assoc($result2);


                                                echo '<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Tutors</div>';

                                               if ($row2 === null) {
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">No Tutor Available</div>';
                                                }else{
                                                    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">'.$row2['cTutor'].'</div>';

                                                }
                                                  
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="container-fluid" style = "text-align:center">
                        <br>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List of Class</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Class</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php 

                                include ("condb.php");
                                  echo"<thead>
                                  <tr>
                                    <th  width='10%'>Class ID</th>
                                    <th>Class name</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th  width='10%'></th>
                                  </tr>";
                                  $sname = $_SESSION["Fullname"];

                                $sql = "SELECT * FROM classroomtbl WHERE Status = '1' AND cStudent='$sname' ORDER BY CID";
                                $result = mysqli_query($cn, $sql);
                                  while($row = mysqli_fetch_assoc($result))
                                  {

                                    $tname = $row['cTutor'];

                                echo"<tbody>";
                                echo "<tr>";
                                echo "<form method='POST' action='moveLink.php?id=" . $row['CID'] . "&roomid=" . $row['Classname'] . "'>"; 
                                echo "<input type='hidden' id='ID' name='ID' value='" . $row['CID'] . "'>";
                                echo "<td>C - " . $row['CID'] . " </td> ";
                                echo "<td>" . $row['Classname'] . " </td> ";
                                echo "<td>" . $row['Subject'] . " </td> ";
                                echo "<td>" . $row['cDate'] . " </td> ";
                                echo "<td>" . $row['cTime'] . " </td> ";
                                echo "<td><button type='submit' class='btn btn-primary btn-xs' data-toggle='tooltip' title='Enter Class'>Enter Classroom</button>
                                <hr>
                                <button type='button' class='open-view btn btn-success btn-xs' data-toggle='tooltip' title='Review Profile'>Rate Tutor</button>
                                </td></form>";
                                echo "</tr>";
                            }

                            

                             echo" <div class='modal fade' id='view' style = 'text-align:center'>
                        <div class='modal-dialog modal-md'>"; 
                          echo " <form action='submitRating.php' method='POST'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h4 class='modal-title'>Rate Tutor</h4>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>";

                            echo "<div class='card card-primary'>
                              <div class='card-body'>
                            <div class='row'>";

                             $sql2 = "SELECT * FROM tutortbl WHERE Status = '1' AND Fullname ='$tname' ORDER BY TID";
                            $result2 = mysqli_query($cn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);

                             echo "<input type='hidden' id='tutorname' name='tutorname' value='" . $row2['Fullname'] . "'>";
                             echo "<input type='hidden' id='TID' name='TID' value='" . $row2['TID'] . "'>";

                            echo'<div class="row" style="margin:0 auto;text-align:center">
                                <div class="col-sm-3">
                                </div>
                               <div class="comment-box ml-2">
                            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
                            <div class="comment-area"> <textarea id= "comm" name ="comm" class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
                            <div class="comment-btns mt-2">
                            </div>
                        </div>
                                
                              </div>
                              <hr>
                              <div class="row">

                    
                    
                  </div>';

                              echo'<div class="col-12">
                                <input type="submit" name="rate" value="Submit Rating" class="btn btn-info ">
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


               </table>
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

    <script>

        $(document).ready(function(){
            $('.open-view').on('click', function(){
                $('#view').modal('show');

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
        });
    
    </script>


</body>

</html>