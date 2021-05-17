<?php
$name= $_POST['name'];
$visitor_email= $_POST['mail'];
$birth= $_POST['birth'];
$phone_number= $_POST['number'];
$message= $_POST['message'];

$email_from = 'agrawalishita15@gmail.com';

$email_subject='New form Submission';


$email_body = "User Name: $name.\n".
                  "User Name: $name.\n".
                  "User Email: $mail.\n".
                  "User Subject: $birth.\n".
                  "User Phone Number: $number.\n".
                  "User Message: $message.\n";

$to = 'ishita.20208056@gmailcom';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers)


header("Location: contact.html");


?>