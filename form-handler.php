<?php
if($_POST['submit']){
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'info@sankalpteam.tech';

	$to = "vcetsankalp@gmail.com";

	$email_subject = 'New Form Submission';

	$headers = "MIME-Version: 1.0\r\n"
    			."Content-type:text/plain; charset=UTF-8\r\n"
				."Content-Transfer-Encoding: 8bit\r\n"
     			. 'From: '.$email_from.'<'.$email_from.'>' . "\r\n".'Reply-To: '.$email_from."\r\n" 
				. 'X-Mailer: PHP/' . phpversion();

	$email_body = "User Name: $name.\n".
			  "User Email: $visitor_email.\n".
			  "Subject: $subject.\n".
			  "Message: $message.\n";
	
	mail($to, $email_subject, $email_body,$headers);

	header("Location: contact.html");
}

?> 
