<?php 

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']))
{
	if(!empty($_POST['contact_name']) && !empty($_POST['contact_email']) && !empty($_POST['contact_text']))
	{
		$contact_name = $_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];
		
		if(strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text)>1000)
		{
			echo 'Sorry, max length for some fields has been exceeded.';
		}
		else
		{
			$to = 'example@example.com';
			$subject = 'Contact Us Form Submitted.';
			$body = $contact_name."\n".$contact_text;
			$headers = 'From: '.$contact_email;

			if(mail($to, $subject, $body, $headers))
			{
				echo 'Thanks for contacting us. We\'ll be in touch soon.';
			}
			else
			{
				echo 'Sorry, an error occurred. Please try again later.';
			}
		}
	}
	else
	{
		echo 'All fields are required.';
	}
}
?>
<form action="100 Creating a Simple Contact Us Form.php" method="POST">
	Name:<br/><input type="text" name="contact_name" maxlength="25"><br/><br/>
	Email:<br/><input type="text" name="contact_email" maxlength="50"><br/><br/>
	Message:<br/><textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea><br/><br/>
	<input type="submit" value="Send">
</form>