<?php 
header('Content-type: image/jpeg');

if(isset($_GET['source']) && !empty($_GET['source']))
{
	$source = $_GET['source'];
	
	$watermark = imagecreatefrompng('aPDUAccepted0004.png');
	$watermark_width = imagesx($watermark);
	$watermark_height = imagesy($watermark);
	
	$image = imagecreatetruecolor($watermark_width, $watermark_height);
	$image = imagecreatefromjpeg($source);
	
	$image_size = getimagesize($source);
	$x = $image_size[0] - $watermark_width - 10;
	$y = $image_size[1] - $watermark_height - 10;
	
	imagecopymerge($image, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 20);
	imagejpeg($image);//output image
	//imagejpeg($image, $source.'_watermaked.jpg');//to save file to dir - file name would be $source_watermarked.jpg
}

?>