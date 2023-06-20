<?php
include ("condb.php");
            
session_start();

$studentname =  $_SESSION["Fullname"];
$class = $_SESSION['Classname'];
$tutorname = $_SESSION['Tutorname'];
$subject = $_SESSION['Subject'];
$date = $_SESSION['Date'];
$time = $_SESSION['Time'];
$amount = $_SESSION['Amount'];

$sql2 = "INSERT INTO reservationtbl(Classname,Subject,rDate,rTime,Status,rTutor,rStudent,Paid,Payment) VALUE ('$class','$subject','$date','$time','1','$tutorname','$studentname','1','$amount')";
$res = mysqli_query($cn, $sql2);
$sql3 = "INSERT INTO classroomtbl(Classname,Subject,cDate,cTime,Status,cStudent,cTutor) VALUE ('$class','$subject','$date','$time','1','$studentname','$tutorname')";
$result = mysqli_query($cn, $sql3);

                                    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="stylePayment.css">

</head>
<body>
<main id="cart-main">

    <div class="site-title text-center">
        <div><img src="./assets/checked.png" alt=""></div>
        <h1 class="font-title">Payment Done Successfully...!</h1>
        <a href="sClassroom.php">Finish Transaction</a>
    </div>

</main>

</body>
</html>