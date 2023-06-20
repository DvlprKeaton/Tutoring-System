<?php

include("condb.php");

$contact = $_POST['number'];

                  
$sql = "SELECT * FROM studenttbl where Contact = '$contact'";
$res = mysqli_query($cn, $sql);

$code = rand(1000,9999);


if($res && mysqli_num_rows($res)>0)
		{
	 	
		//##########################################################################
					// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
					// Visit www.itexmo.com/developers.php for more info about this API
					//##########################################################################

					function itexmo($number,$message,$apicode,$passwd){
							$url = 'https://www.itexmo.com/php_api/api.php';
							$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
							$param = array(
								'http' => array(
									'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
									'method'  => 'POST',
									'content' => http_build_query($itexmo),
								),
							);
							$context  = stream_context_create($param);
							return file_get_contents($url, false, $context);
					}
					//##########################################################################

					$result = itexmo($contact, $code, 'TR-ONLIN818591_UEV6D', '!lrn8(a&(s');
					if ($result == ""){
					echo "iTexMo: No response from server!!!
					Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
					Please CONTACT US for help. ";	
					}else if ($result == 0){

						$sql2 = "UPDATE studenttbl SET Password = '$code' WHERE Contact = '$contact'";
						$res2 = mysqli_query($cn, $sql2);
						
						function myAlert($msg, $url){
					    echo '<script language="javascript">alert("'.$msg.'");</script>';
					    echo "<script>document.location = '$url'</script>";
						}
						myAlert("OTP code Sent!", "OTPresettutor.php");
					}
					else{	
					echo "Error Num ". $result . " was encountered!";
					}
				}
        
    
?>

