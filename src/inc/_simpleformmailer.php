<?php
	require("_config.php");
	if (isset($_POST["submitted"])) {
		if (
			// Set fields for validation
			!empty($_POST["form_email"]) && 
			!empty($_POST["form_message"])
			) {
			$errors = false; } else { $errors = true;
		}
		if ($errors == false) {
			$to = $mail_to;
			$subject = $mail_subject;
			$body = $mail_body;
			mail($mail_to, $mail_subject, $mail_body, $mail_headers);
		}
	} 
?>