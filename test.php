<?php
//Setup all variables
$name = "ivan";
$email = "email@isimic.com";

if(isset($_POST['order'])){
    $order = $_POST['order'];
}else{
    $order = "None";
}
$order = "123";
$smessage = "testmessage";


// --------------------------------------//
// Send the email // INSERT YOUR EMAIL HERE
$to = "info@soulmatehealer.com";
// --------------------------------------//

if($order == "none"){
    $subject = "Support Request: $name";
}else{
    $subject = "Support Request: $order";
}

$message = "Name: $name 
Email: $email 
Order: $order 
Message: 
$smessage";
$headers = 'From: info@soulmatehealer.com' . "\r\n" .
'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);

?>