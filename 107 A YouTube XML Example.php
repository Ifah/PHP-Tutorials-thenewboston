<?php 

$video = simplexml_load_file('http://gdata.youtube.com/feeds/api/videos/ILczf41Cvz8');

echo '<strong>Title</strong>:<br/>'.$video->title.'<br/>';
echo '<strong>Description</strong>:<br/>'.$video->content;

?>