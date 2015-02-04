<?php 
$xml = simplexml_load_file('105 example.xml');

//echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;
foreach($xml->producer as $producer)
{
	echo '<strong>'.$producer->name.' ('.$producer->age.')</strong><br/>';
	foreach($producer->show as $show)
	{
		echo $show->showname.' on '.$show->showdate.'<br/>';
	}
}
//output
//Ifah (22)
//A show on 12th December 2010
//Another show on 5th December 2008
//Rana (21)
//Better show on 26th May 2014
//Yo (30)
?>