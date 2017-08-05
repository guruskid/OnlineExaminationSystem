<?php
error_reporting(E_ALL & ~E_NOTICE ^ E_DEPRECATED);
$cn=mysql_connect("localhost","exam_user","examuser");
// or die("Could not Connect My Sql");
if($cn)
{
	//echo "<br>exam db connected<br>";

}
else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
}
mysql_select_db("exam",$cn)  or die("<br>Could not connect to exam Database");



$cn11=mysql_connect("localhost","chemistry_user","chemistryuser");
// or die("Could not Connect My Sql");
if($cn11)
{
	//echo "<br>chemistry db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to chemistry Database";
}


mysql_select_db("chemistry",$cn11)  or die("<br>Could connect to chemistry Database");
$cn21=mysql_connect("localhost","math_user","mathuser");
if($cn21)
{
	//echo "<br>chemistry db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to math Database";
}


mysql_select_db("math",$cn21)  or die("<br>Could connect to math Database");

$cn22=mysql_connect("localhost","physics_user","physicsuser");
// or die("Could not Connect My Sql");
if($cn22)
{
	//echo "<br>Physics db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to Physics Database";
}
mysql_select_db("physics",$cn22)  or die("<br>Could connect to physics Database");


$cn33=mysql_connect("localhost","results_user","resultsuser");
// or die("Could not Connect My Sql");
if($cn33)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to Results Database";
}
mysql_select_db("results",$cn33)  or die("<br>Could connect to Results Database");



$cn44=mysql_connect("localhost","root2","");
// or die("Could not Connect My Sql");
if($cn44)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to status Database";
}
mysql_select_db("status",$cn44)  or die("<br>Could connect to status Database");


$cn55=mysql_connect("localhost","automobile_user","automobileuser");
// or die("Could not Connect My Sql");
if($cn55)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to automobile Database";
}
mysql_select_db("automobile",$cn55)  or die("<br>Could connect to status Database");



$cn66=mysql_connect("localhost","civil1_user","civil1user");
// or die("Could not Connect My Sql");
if($cn66)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to civil1 Database";
}
mysql_select_db("civil_1",$cn66)  or die("<br>Could connect to civil1 Database");

$cn77=mysql_connect("localhost","civil2_user","civil2user");
// or die("Could not Connect My Sql");
if($cn77)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to civil2 Database";
}
mysql_select_db("civil_2",$cn77)  or die("<br>Could connect to civil2 Database");



$cn88=mysql_connect("localhost","mechanical1_user","mechanical1user");
// or die("Could not Connect My Sql");
if($cn88)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to mechanical1 Database";
}
mysql_select_db("mechanical_1",$cn88)  or die("<br>Could connect to mechanical1 Database");


$cn99=mysql_connect("localhost","mechanical2_user","mechanical2user");
// or die("Could not Connect My Sql");
if($cn99)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to mechanical2 Database";
}
mysql_select_db("mechanical_2",$cn99)  or die("<br>Could connect to mech2 Database");


$cn101=mysql_connect("localhost","plastic_user","plasticuser");
// or die("Could not Connect My Sql");
if($cn101)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to ps Database";
}
mysql_select_db("plastic",$cn101)  or die("<br>Could connect to ps Database");


$cn111=mysql_connect("localhost","etc1_user","etc1user");
// or die("Could not Connect My Sql");
if($cn111)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to etc1 Database";
}
mysql_select_db("etc_1",$cn111)  or die("<br>Could connect to etc1 Database");


$cn121=mysql_connect("localhost","etc2_user","etc2user");
// or die("Could not Connect My Sql");
if($cn121)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to etc2 Database";
}
mysql_select_db("etc_2",$cn121)  or die("<br>Could connect to etc2 Database");

/*
$cn131=mysql_connect("localhost","electrical_user","electricaluser");
// or die("Could not Connect My Sql");
if($cn131)
{
	//echo "<br>Results db connected";
}

else
{
	//echo "cant connect".mysql_errno();
	//echo "<br>cant connect".mysql_error();
	echo "<br>Could not connect to elect Database";
}
mysql_select_db("electrical",$cn131)  or die("<br>Could connect to elect Database");
*/
?>


