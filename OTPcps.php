<?php

include("condb.php");

$vkey = $_POST['vkey'];
$pword = $_POST['pass'];
$cnpword = $_POST['conpass'];
$sql = "SELECT * FROM studenttbl WHERE Password = '$vkey'";
$res = mysqli_query($cn, $sql);

if($res && mysqli_num_rows($res)>0)
		{
			if ($_POST['pass'] === $_POST['conpass']){

		$sql2 = "UPDATE studenttbl SET Password= '$pword' WHERE Password ='$vkey'";
		$res2 = mysqli_query($cn, $sql2);
		function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("You password has been change!", "SignStudent.php");
		  
		}

			}

		
else{
		function myAlert($msg, $url)
			{
		    echo '<script language="javascript">alert("'.$msg.'");</script>';
		    echo "<script>document.location = '$url'</script>";
			}
			myAlert("Account Already Verified", "SignStudent.php");

				
	}
	
	
?>