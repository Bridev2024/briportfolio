<?php
$to = 'bri.dev.2024@gmail.com'; // replace this mail with yours
$firstname = $_POST["fname"];
$email= $_POST["email"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$message ='<table style="width:100%">
    <tbody><tr>
        <td>'.$firstname.'  '.$laststname.'</td>
    </tr>
    <tr><td>Email: '.$email.'</td></tr>
</tbody></table>';
 
if (@mail($to, $email, $message, $headers))
{
    echo 'The message has been sent.';
}else{
    echo 'failed';
}
?>