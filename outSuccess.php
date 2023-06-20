<?php
session_start();
unset($_SESSION["SID"]);
unset($_SESSION["Fullname"]);
header("Location:index.php");
?>