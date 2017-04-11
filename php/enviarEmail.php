<?php
$name       = @trim(stripslashes($_POST['txtName'])); 
$from       = @trim(stripslashes($_POST['txtEmail'])); 
$subject    = @trim(stripslashes($_POST['txtAsunto'])); 
$message    = @trim(stripslashes($_POST['txtMensaje'])); 
$to   		= 'heidy.aroca@cun.edu.co';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;