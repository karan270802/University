<?php
$name = $_POST['name']
$Visitor_email = ['email']
$subject = ['subject']
$message = ['message']

$email_form = 'info@yourwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $Visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message\n";

$to = 'karantulshain@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $Visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")



?>