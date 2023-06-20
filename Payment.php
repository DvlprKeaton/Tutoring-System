<?php

include("condb.php");

session_start();

$name = $_POST['cName'];
$date = $_POST['reservationdate'];
$time = $_POST['reservationtime'];
$tname = $_POST['fname1'];
$amount = $_POST['amount'];
$subj = $_POST['specializaiton1'];

$sname = $_SESSION["Fullname"];

$sql = "SELECT * FROM reservationtbl WHERE rTutor = '$tname' AND rDate = '$date' AND rTime = '$time' AND Status = '1'";
$res = mysqli_query($cn, $sql);

if($res && mysqli_num_rows($res)>0)
{
  function myAlert($msg, $url)
    {
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
    }
    myAlert("The Tutor is unavailable to the picked time and date", "sReservation.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>

    <link rel="stylesheet" href="stylePayment.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Summary of Payment</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./assets/pro1.png" alt="">
                            </div>
                            <div class="title">
                                <h3><?php

                                echo $name;
                                $_SESSION['Classname'] = $name;
                                $_SESSION['Tutorname'] = $tname;
                                $_SESSION['Subject'] = $subj;
                                $_SESSION['Date'] = $date;
                                $_SESSION['Time'] = $time;
                                $_SESSION['Amount'] = $amount;


                            ?></h3>
                                <span><?php

                                $sname = $_SESSION["Fullname"];

                                echo $tname;

                            ?></span>
                            <br>
                            <span><?php

                                $sname = $_SESSION["Fullname"];

                                echo $subj;

                            ?></span>
                            <br>
                            <span><?php

                                echo $date;

                            ?></span>
                            <br>
                            <span><?php

                                $sname = $_SESSION["Fullname"];

                                echo $time;

                            ?></span>
                            <br>
                                <a href="Oncancel.php">Cancel Payment</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red"><?php echo $amount;?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>

                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Teaching Hours (1 hour): </label>
                                <span><?php echo $amount;?></span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title"><?php echo $amount;?></span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://www.paypal.com/sdk/js?client-id=AZh9HkXzAznk26-FuPqgYH9aJukPXWVROdmQwFW2hjUAtSFnLEYmN2pKwVmG661qQQjdJkcl850zSAzQ&disable-funding=credit,card"></script>
    <script src="payment.js"></script>
</body>
</html>