<?php 

$directory = 'files';

if($handle = opendir($directory.'/'))
{
	echo 'Looking inside \''.$directory.'\':<br/>';
	
	while($file = readdir($handle))
	{
		if($file!='.'&&$file!='..')
		{
			echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br/>'; 
			//if it was image files, change above to below
			//echo '<img src="'.$directory.'/'.$file.'">'.$file.'</a><br/>';
		}
	}
}
?>