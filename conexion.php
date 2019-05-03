<?php
function conectar(){
	$link=mysqli_connect('localhost','root','','grupo')
	or die("Error". mysql_error($link));
	return $link;
}
?>