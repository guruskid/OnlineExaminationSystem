<?php
if(isset($_SESSION['username'])){
	$user=$_SESSION['username'];
	$date=date('c');
	mysql_query("replace into navigation (username,time) values('$user','$date')");
}
?>