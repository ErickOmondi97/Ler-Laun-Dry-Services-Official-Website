<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'lerlaundryservices@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $first_name\n".
              "User Name: $last_name\n".
              "User Email: $visitor_email\n".
              "Subject: $visitor_subject\n".
              "User Message: $message. \n";

$to = 'lerlaundryservices@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject, $email_body, $headers);

header("Location: contact.html");


?>