<?php
$name = $POST['name'];  
$visitor_email = $POST['email'];  
$subject = $POST['subject'];  
$message = $POST['message'];  

$email_from = 'website@domain.com';

$email_subject = 'NEW FORM SUBMISSION';

$email_body = "USER NAME:  $name.\n".
            "USER EMAIL:  $visiotr_email.\n".
            "SUBJECT:  $subject.\n".
            "USER MESSAGE:  $message.\n";

$to = 'famiy.osman786@gmail.com';

$headers = "From $email_from  \r\n";

$headers . = "Reply-To $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")


?>