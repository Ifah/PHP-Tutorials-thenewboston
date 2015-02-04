<?php 
require 'connect.inc.php';

header('Content-type: image/jpeg');

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($mysql_connect, "SELECT surname FROM users WHERE id='".mysqli_real_escape_string($mysql_connect, $id)."'");
	if(mysqli_num_rows($query)==1)
	{
		$query_row = mysqli_fetch_assoc($query);
		$email = $query_row['surname'];
	}
	else
	{
		$email = 'Email not found.';
	}
}
else
{
	$email = 'No ID specified.';
}

$email_length = strlen($email);

$font_size = 4;

$image_height = ImageFontHeight($font_size);
$image_width = ImageFontWidth($font_size) * ($email_length);

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);
?>