<?php
include("condb.php");

session_start();

//$ID = $_GET['id'];
$ID = $_POST['tID'];

$pname = rand(1000,10000)."-".$_FILES["file"]["name"];

$tname = $_FILES["file"]["tmp_name"];

$uploads_dir = 'subAct';

move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$sql = "SELECT * from activitytbl WHERE Status='1' AND AID ='$ID'";
$result = mysqli_query($cn,$sql);
$row= mysqli_num_rows($result);
if ($row <> 0)
{
					$sql2 = "UPDATE activitytbl SET aSubFile = '$pname', fAct = '1' WHERE AID = '$ID'";
					$result2 = mysqli_query($cn, $sql2);
					echo $pname;
					function myAlert1($msg, $url){
					echo '<script language="javascript">alert("'.$msg.'");</script>';
					echo "<script>document.location = '$url'</script>";
					}
					echo $pname;
					myAlert1("Upload Success!", "sActivity.php");
}else{

	echo 'huhu';

}

?>