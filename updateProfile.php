<?php
session_start();
include ("condb.php");

$id = $_SESSION["TID"];

$cv = rand(1000,10000)."-".$_FILES["cv"]["name"];

$tname = $_FILES["cv"]["tmp_name"];

$uploads_dir = 'files';

move_uploaded_file($tname, $uploads_dir.'/'.$cv);

$cert1 = rand(1000,10000)."-".$_FILES["cert1"]["name"];

$tname1 = $_FILES["cert1"]["tmp_name"];

$uploads_dir1 = 'files';

move_uploaded_file($tname1, $uploads_dir1.'/'.$cert1);

$cert2 = rand(1000,10000)."-".$_FILES["cert2"]["name"];

$tname2 = $_FILES["cert2"]["tmp_name"];

$uploads_dir2 = 'files';

move_uploaded_file($tname2, $uploads_dir2.'/'.$cert2);

$cert3 = rand(1000,10000)."-".$_FILES["cert3"]["name"];

$tname3 = $_FILES["cert3"]["tmp_name"];

$uploads_dir3 = 'files';

move_uploaded_file($tname3, $uploads_dir3.'/'.$cert3);

$sql = "SELECT * from tutortbl WHERE Status='1' AND TID ='$id'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
if ($row <> 0)
{
	$sql2 = "UPDATE tutortbl SET CV='$cv', Certification1 = '$cert1', Certification2 = '$cert2', Certification3 = '$cert3' WHERE TID='$id'";
	$res = mysqli_query($cn, $sql2);
	
	function myAlert($msg, $url){
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Information Updated!", "tProfile.php");
}
?>