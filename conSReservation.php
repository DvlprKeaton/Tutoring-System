<?php

include("condb.php");

session_start();

$name = $_POST['cName'];
$date = $_POST['reservationdate'];
$time = $_POST['reservationtime'];
$tname = $_POST['fname1'];

$sname = $_SESSION["Fullname"];

$sql = "SELECT * FROM reservationtbl WHERE Classname = '$name' AND rDate = '$date' AND rTime = '$time' AND Status = '1'";
$res = mysqli_query($cn, $sql);

if($res && mysqli_num_rows($res)>0)
{
  function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Reservation is already made!", "sReservation.php");
}
else 
	{
			$sql2 = "INSERT INTO reservationtbl(Classname,rDate,rTime,Status,rTutor,rStudent) VALUE ('$name','$date','$time','1','$tname','$sname')";
			$result = mysqli_query($cn, $sql2);
			$sql3 = "INSERT INTO classroomtbl(Classname,cDate,cTime,Status,cStudent,cTutor) VALUE ('$name','$date','$time','1','$sname','$tname')";
			$result = mysqli_query($cn, $sql3);
			$sql4 = "UPDATE tutortbl SET Available = '0' WHERE Fullname = '$tname'";
			$result = mysqli_query($cn, $sql4);
			function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("Redirecting to billing", "sClassroom.php");
	}

?>

