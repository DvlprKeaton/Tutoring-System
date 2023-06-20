<?php

include("condb.php");

$id= $_POST['tID'];

			$sql2 = "UPDATE tutortbl SET Status = '1', Available = '1', Approve = '1' WHERE TID = '$id'";
			$result = mysqli_query($cn, $sql2);
			function myAlert1($msg, $url){
			echo '<script language="javascript">alert("'.$msg.'");</script>';
			echo "<script>document.location = '$url'</script>";
			}
			myAlert1("Application Success!", "aApproval.php");

?>

