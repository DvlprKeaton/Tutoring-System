<?php

include("condb.php");

if (isset($_GET['code'])) {
	$code = $_GET['code'];

	$sql = "SELECT * FROM tutortbl WHERE Verified = 0 AND VerificationCode = '$vkey' LIMIT 1";
	$res = mysqli_query($cn, $sql);

	if ($res && mysqli_num_rows($res)>0) {
		$sql2 = "UPDATE tutortbl SET Verified= 1 WHERE VerificationCode='$vkey'";
		$res2 = mysqli_query($cn, $sql2);
		if ($sql2) {
					
					function myAlert1($msg, $url){
					echo '<script language="javascript">alert("'.$msg.'");</script>';
					echo "<script>document.location = '$url'</script>";
					}
					myAlert1("Your Account has been Verified. You may now login", "SignTutor.php");

					}
		}
		else{
			echo $mysqli->error;
		}
	}

	else{

		function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("This account is invalid or Already Verified", "SignTutor.php");
		}
	
?>