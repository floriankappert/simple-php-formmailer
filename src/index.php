<?php	require("inc/_simpleformmailer.php"); 	?>

<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width">
	<title>SIMPLE PHP FORMMAILER</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/overrides.css">
</head>
<body>

<!-- Error-Handling -->
<?php if ($errors == true) { ?>
	<p style="color: red;" class="form-error">Please fill all required (*) fields.</p>
<?php } ?>


<?php if (!isset($_POST["submitted"]) || $errors == true) { ?>
		<form action="index.php?s=1" method="post" name="form_s">
			<label for="form_name">Name</label>
			<input type="text" id="form_name" name="form_name" value="<?php echo $_REQUEST['form_name']; ?>">
			
			<label for="form_name">First Name</label>
			<input type="text" id="form_firstname" name="form_firstname" value="<?php echo $_REQUEST['form_firstname']; ?>">
			
			<label for="form_town">ZIP / Town</label>
			<input type="text" id="form_town" name="form_town" value="<?php echo $_REQUEST['form_town']; ?>">

			
			<label for="form_email">Email *</label>
			<input type="text" id="form_email" name="form_email" value="<?php echo $_REQUEST['form_email']; ?>">

			<label for="form_phone">Phone</label>
			<input type="text" id="form_phone" name="form_phone" value="<?php echo $_REQUEST['form_phone']; ?>">

			<label for="form_fax">Fax</label>
			<input type="text" id="form_fax" name="form_fax" value="<?php echo $_REQUEST['form_fax']; ?>">
			
			<label>Message *</label>
			<textarea name="form_message" id="form_message" cols="30" rows="10"><?php echo $_REQUEST['form_message']; ?></textarea>
			
			<input type='submit' name='submitted' value='submit'>
			<br>
			<small>Please fill all <strong>*</strong>-fields. <br>After clicking the submit button your message will be emailed to us.</small>
		</form>
<?php } else { ?>
		<p>
			<strong>Thanks</strong> for your message.<br>
			<br>
			Sincerely<br>
			Your Website-Team
		</p>

<?php } ?>	
	
</body>
</html>