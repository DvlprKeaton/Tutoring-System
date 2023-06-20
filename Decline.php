<?php

include("condb.php");

$id= $_POST['tID1'];

			$sql2 = "UPDATE tutortbl SET Status = '0', Available = '0', Approve = '0' WHERE TID = '$id'";
			$result = mysqli_query($cn, $sql2);
			function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("Application Declined!", "aApproval.php");

?>

