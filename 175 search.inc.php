<?php 
require '175 connect.inc.php';


if(isset($_GET['search_text']) && !empty($_GET['search_text']))
{
	$search_text = $_GET['search_text'];
	
	$query = "SELECT name FROM names WHERE name LIKE'".mysqli_real_escape_string($mysql_connect, $search_text)."%'";
	$query_run = mysqli_query($mysql_connect, $query);
	while($query_row = mysqli_fetch_assoc($query_run))
	{
		//echo $name = $query_row['name'].'<br/>';
		echo $name = '<a href="anotherpage.php?search_text='.$query_row['name'].'">'.$query_row['name'].'</a><br/>';
	}
}

?>