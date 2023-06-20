<?php

include("condb.php");

$vkey = $_POST['vkey'];
$sql = "SELECT * FROM tutortbl WHERE Verified = 0 AND VerificationCode = '$vkey'";
$res = mysqli_query($cn, $sql);



if($res && mysqli_num_rows($res)>0)
		{

		$sql2 = "UPDATE tutortbl SET Verified= 1 WHERE VerificationCode='$vkey'";
		$res2 = mysqli_query($cn, $sql2);
		function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("Your Account has been Verified. You may now login", "SignTutor.php");
		  
		}
else{
		function myAlert($msg, $url)
			{
		    echo '<script language="javascript">alert("'.$msg.'");</script>';
		    echo "<script>document.location = '$url'</script>";
			}
			myAlert("Account Already Verified", "SignTutor.php");

				
	}
	
	
?>