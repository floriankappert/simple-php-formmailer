<?php
# This is the basic configuration file
# Enter the email-address you want the email mailed to
$mail_to = "florian@videri-concept.de";
$mail_reply_to = "florian@videri-concept.de";
$mail_return_path = "florian@videri-concept.de";

# Enter the mail subject
$mail_subject = "THIS IS YOUR MESSAGE SUBJECT";

# Change the messages body. You can use HTML. Make sure that your layout should not be larger than 600px wide.
$mail_body = "
				<strong>YEAHA! YOU RECEIVED A MESSAGE FROM YOUR WEBSITE</strong> <br>
				<br>
				<strong>Name:</strong><br> 
				".$_POST['form_firstname']." ".$_POST['form_name']." <br>
				<br>
				<strong>Email:</strong><br> 
				".$_POST['form_email']." <br>
				<br>
				<strong>Phone:</strong><br> 
				".$_POST['form_phone']." <br>
				<br>
				<strong>Fax:</strong><br> 
				".$_POST['form_fax']." <br>
				<br>
				<strong>ZIP/Town:</strong><br> 
				".$_POST['form_town']." <br>
				<br>
				<strong>Message:</strong><br> 
				".nl2br($_POST['form_message'])." <br>
				<br>
				-----
				<br>
				Sincerely<br>
				Your Website
";

$mail_headers = 'From: Website Contact Formmailer'."\r\n";
$mail_headers .= 'Reply-To: '.$mail_reply_to.''."\r\n";
$mail_headers .= 'Return-Path: '.$mail_return_path.''."\r\n";
$mail_headers .= 'X-Mailer: PHP5'."\n";
$mail_headers .= 'MIME-Version: 1.0'."\n";
$mail_headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

?>