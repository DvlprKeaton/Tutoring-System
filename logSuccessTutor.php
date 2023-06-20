<?php
include("condb.php");
session_start();

$email = $_POST['email'];
$pword = $_POST['pword'];
$sql = "Select * from tutortbl WHERE Email = '$email' AND Password = '$pword' AND Verified = '1'";
$result= mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
$row2 = mysqli_fetch_assoc($result);

$_SESSION['TID'] = $row2['TID'];
$_SESSION['Fullname'] = $row2['Fullname'];

if($row<>0)
{
	if (isset($_SESSION["TID"])) {
		header("location:tDashboard.php");
	}
}else if($email === 'Admin@gmail.com' && $pword === 'Admin'){

	header("location:aDashboard.php");

}
else
{
	function myAlert1($msg, $url){
	echo '<script language="javascript">alert("'.$msg.'");</script>';
	echo "<script>document.location = '$url'</script>";
	}
	myAlert1("Invalid Username and Password or Account is not yet Verified!", "SignTutor.php");
	
}

?>