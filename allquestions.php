<?php
session_start();
include("database.php");
	$fd=fopen("prog.txt","r");
 			$pg=fread($fd,filesize("prog.txt"));
 	strtolower($pg);

 			//reading Prog txt
 			$fd1=fopen("cn.txt","r");
 			$con=fread($fd1,filesize("cn.txt"));

 				//reading Prog txt
 			$fd2=fopen("cc.txt","r");
 			$cc=fread($fd2,filesize("cc.txt"));
 	
 			//reading Prog txt
 			$fd3=fopen("year.txt","r");
 			$yr=fread($fd3,filesize("year.txt"));

 				//reading Prog txt
 			$fd4=fopen("term.txt","r");
 			$tr=fread($fd4,filesize("term.txt"));
 	
 			//reading Prog txt
 			$fd5=fopen("qsets.txt","r");

 			$qsets=fread($fd5,filesize("qsets.txt"));

 			if($_SESSION['rg']%2==0)
 			{
$rs=mysql_query("select * from $qsets where que_id ",$cn) or die(mysql_error());
	}
	else
	{
	$rs=mysql_query("select * from $qsets  order  by que_id  DESC ",$cn) or die(mysql_error());

	}
	while($row=mysql_fetch_row($rs))
	{
		echo "".$row[0].")&nbsp&nbsp";
		echo "".$row[1]."<br>";
		echo "&nbsp&nbsp&nbsp  a)&nbsp&nbsp".$row[2]."<br>";
		echo "&nbsp&nbsp&nbsp  b)&nbsp&nbsp".$row[3]."<br>";
		echo "&nbsp&nbsp&nbsp  c)&nbsp&nbsp".$row[4]."<br>";
		echo "&nbsp&nbsp&nbsp  d)&nbsp&nbsp".$row[5]."<br>";

		echo "<br><br>";
	}










 ?>			