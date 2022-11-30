<?php


$schoolName = $_POST['schoolName'];
$userName = $_POST['name'];
// $userLesson = $_POST['dropdown'];
$userEmail = $_POST['email'];
$userMobileNo = $_POST['mobileNo'];

$to = "info.itpluto@gmail.com";

$subject = "MSMS Leads ";

$body .= "schoolName: ".$schoolName. "\r\n"; 
$body .= "Name: ".$userName. "\r\n"; 
// $body .="userLesson: ".$userLesson. "\r\n";
$body .= "Email: ".$userEmail. "\r\n"; 
$body .= "MobileNo: ".$userMobileNo. "\r\n";

$headers = "From: MSMS Leads" . "\r\n" .
"CC: info@musicschoolmarketingsolution.com";



    mail($to,$subject,$body,$headers);




//redirect page
 header("Location:https://booking.musicschoolmarketingsolution.com/");






?>