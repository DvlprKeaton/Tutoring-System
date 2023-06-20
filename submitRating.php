<?php
session_start();
include ("condb.php");

$id = $_POST['TID'];
$rate = $_POST['rating'];
$comm = $_POST['comm'];

$sid = $_SESSION["SID"];

$sql = "SELECT * from tutortbl WHERE TID ='$id'";
$result = mysqli_query($cn,$sql);
$row = mysqli_fetch_assoc($result);

$tname = $row["Fullname"];

$sql2 = "SELECT * from studenttbl WHERE SID ='$sid'";
$result2 = mysqli_query($cn,$sql2);
$row2 = mysqli_fetch_assoc($result2);

$sname = $row2["Fullname"];

$sql4 = "SELECT * from ratingtbl WHERE Studentname ='$sname' AND Tutorname = '$tname'";
$result4 = mysqli_query($cn,$sql4);

if($result4 && mysqli_num_rows($result4)>0)
		{
		  function myAlert($msg, $url)
			{
		    echo '<script language="javascript">alert("'.$msg.'");</script>';
		    echo "<script>document.location = '$url'</script>";
			}
			myAlert("Rating Already Submitted", "sClassroom.php");
		}
else {
$sql3 = "INSERT INTO ratingtbl(TutorID,StudentID,Tutorname,Studentname,Rating,Comments) VALUE ('$id','$sid','$tname','$sname','$rate','$comm')";
$result = mysqli_query($cn, $sql3);

	function myAlert1($msg, $url){
	echo '<script language="javascript">alert("'.$msg.'");</script>';
	echo "<script>document.location = '$url'</script>";
	}
	myAlert1("Rating Submitted", "sDashboard.php");
}

?>