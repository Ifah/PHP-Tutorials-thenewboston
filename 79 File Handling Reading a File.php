<?php 

if(isset($_POST['name']))
{
	$name = $_POST['name'];
	if(!empty($name))
	{
		$handle = fopen('names.txt', 'a');
		fwrite($handle, $name."\n");
		fclose($handle);
		
		echo 'Current names in file: ';
		$count = 1;
		$readin = file('names.txt');
		$readin_count = count($readin);
		foreach($readin as $fname)
		{
			echo trim($fname);
			if($count!=$readin_count)
			{
				echo ', ';
			}
			$count++;
		}
	}
	else
	{
		echo 'Please enter a name.';
	}
}
?>

<form action="78 File Handling Reading a File.php" method="POST">
	Name:<br/>
	<input type="text" name="name"><br/><br/>
	<input type="submit" value="Submit">
</form>