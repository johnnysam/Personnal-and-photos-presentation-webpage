<?php
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'ioannis.samartzis@gmail.com';
$subject = 'Message from a visitor of my personal page';

$body_message = 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = "From: $cf_email\r\n";
$headers .= "Reply-To: $cf_email\r\n";

if("" == trim($field_email){
    	$mail_status = false;
}  
else {
	$mail_status = mail($mail_to, $subject, $body_message, $headers);
}

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
	alert('Thank you for you message. I will contact you shortly.');
	window.location = 'Welcome.html';
	</script>
	<?php
}
?>

