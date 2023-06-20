<?php

include ("condb.php");
			
session_start();

$tname =  $_SESSION['Fullname'];
$tid = $_SESSION['TID'];
$hourly = $_POST['Hourly'];

$sql = "SELECT * from tutortbl WHERE Status='1' AND TID ='$tid'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
if ($row <> 0)
{
	$sql2 = "UPDATE tutortbl SET Hourly = '$hourly'  WHERE TID='$tid'";
	$res = mysqli_query($cn, $sql2);
	
	function myAlert($msg, $url){
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Hourly Rate Updated", "tProfile.php");
}





?>