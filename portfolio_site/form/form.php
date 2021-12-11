<?php


$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$comments = filter_input(INPUT_POST, 'comments');

$to = 'thegang5@box5260.bluehost.com';
$email_subject = "Contact Form";
$email_body = "New Contact Submission. ".
"Details:\n Name: $name \n Email: $email\n Comments \n $comments";
$headers = "From: $to \n";
$headers = "Reply-To: $email";

if(empty(trim($name)) || empty(trim($email)) || empty(trim($comments))){
	include("error.html");
	
}
else if (mail($to,$email_subject,$email_body,$headers))
{
	include("submission.html");
}

else
{
	echo "Something went wrong. ";
	echo "<a href ='https://www.georgemitchellportfolio.net'> Return to site</a>";
}

?>
