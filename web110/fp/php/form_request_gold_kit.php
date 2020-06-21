<?php
	$name = $_POST['name_first'];
    $name = $_POST['name_last'];
	$visitor_email = $_POST['email'];
	$_GET = $_POST['quantity'];
    $_GET = $_POST['tel'];
	
	$email_from = 'pacificnorthwestgoldbuyers@pacificnorthwestgoldbuyers.com';
	
	$email_subject = "New Form Submission";
	
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
						
	$to = "pacificnorthwestgoldbuyers@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: index.html");				


?>

