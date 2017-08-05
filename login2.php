<?php
session_start();
?>
<html>

<head>
<title></title>
</head>
<body>
<?php


extract($_POST);
if(isset($submit))
{
	include("database.php");
	$rs=mysql_query("select * from stud_login where Roll_No='$Roll_NO'and Stud_Name='$Stud_Name' ",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<0)
	{
		echo "<BR><BR><BR><BR><div class=head1>Please enter the Roll number & password <div>";
		exit;
		
	}
	elseif(mysql_num_rows($rs)<1)
	{
		echo"Invalid roll no.";
	}
	$_SESSION[login]="true";
	
}
else if(!isset($_SESSION[login]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=studlogin3.php>Login</a><div>";
		exit;
}
?>

<p class="head1">You are successfully Logged in </p>
<p align="center" class="style7"><a href="quiz.php">Start Exam</a></p>

<p align="center" class="head1">&nbsp;</p>
</body>
</html>