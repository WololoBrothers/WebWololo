<?php
require_once "Mail.php";

$host = "smtp.mailgun.org";
$username = "postmaster@mailgun.pedagogiadigital.com";
$password = "ba79469c2cfa88142132acc05c00317b";
$port = "587";
$to = "info@wololo.guru";

$email_from = "example@sender.com";
$email_subject = "Awesome Subject line" ;
$email_body = "This is the message body" ;
$email_address = "replyto@sender.com";
$content = "text/html; charset=utf-8";
$mime = "1.0";

$headers = array ('From' => $email_from,
'To' => $to,
'Subject' => $email_subject,
'Reply-To' => $email_address,
'MIME-Version' => $mime,
'Content-type' => $content);

$params = array  ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password);

$smtp = Mail::factory ('smtp', $params);
$mail = $smtp->send($to, $headers, $email_body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message sent successfully!</p>");
}

?>