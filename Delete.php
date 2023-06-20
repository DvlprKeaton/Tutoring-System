<?php

include ("condb.php");
			
session_start();

$ID = $_GET['id'];

$sql = "SELECT * from tutortbl WHERE Status='1' AND TID ='$ID'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
if ($row <> 0)
{
	$sql2 = "DELETE FROM tutortbl WHERE TID='$ID'";
	$res = mysqli_query($cn, $sql2);
	
	function myAlert($msg, $url){
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Data Deleted", "aTutorlist.php");
}





?>