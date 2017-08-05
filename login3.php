<?php
session_start();
//$_SESSION['Stud_Name']=$_POST['Stud_Name'];
//$_SESSION['Roll_No']=$_POST['Roll_No'];

$_SESSION['Reg_No']=$_POST['Reg_No'];

?>		
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]--><meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
			<link rel='stylesheet' id='google_font_Open_Sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Cvietnamese%2Cgreek%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%2Cgreek-ext' type='text/css' media='all' />

			<link href="scripts/bxslider/jquery.bxslider.css" rel="stylesheet" />
			<link href="scripts/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
			<link href="scripts/magnific-popup/magnific-popup.css" rel="stylesheet" />
			<link href="scripts/magnific-popup/magnific-popup-anim.css" rel="stylesheet" />
			<link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="scripts/entypo/entypo.css">
			<link rel="stylesheet" href="scripts/zocial/zocial.css">
			<link rel="stylesheet" href="style.css" type="text/css"/>
			<link id="skin-style-css" rel="stylesheet" href="skins/blue/blue.css" type="text/css"/>
			<link href="scripts/colorpicker/css/colorpicker.css" rel="stylesheet" />
			<link rel="stylesheet" href="switcher/switcher.css" type="text/css"/>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/respond.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>

<body>
   
		<bgcolor="lightblue">
			<?php  
			include("database.php");  
			mysql_select_db("chemistry",$cn11)  or die("<br>Could not connect to chemistry Database");             /*CONNECTING TO OUR DATABASE TO VERIFY THE USER HERE */
				define("login","");
				extract($_POST);
	if(isset($submit))
	{
		error_reporting(E_ERROR | E_PARSE);
		//reading Prog txt
 		$fd=fopen("prog.txt","r");
 		$pg=fread($fd,filesize("prog.txt"));
 		strtolower($pg);
 	
 		$fd1=fopen("cn.txt","r");
 		$con=fread($fd1,filesize("cn.txt"));

 		$fd2=fopen("cc.txt","r");
 		$cc=fread($fd2,filesize("cn.txt"));

 		
	//$pg=$_SESSION['Programme'];
	//echo $ex;
	//echo "<br>program is".$pg;
	//echo $_SESSION['Programme'];
	//echo $_SESSION['Year'];
	
	//$cn2=mysql_connect("localhost","user2","user2") or die("Could not Connect My Sql");
	//mysql_select_db($con,$cn2)  or die("Couldt connect to Database sdfd");	
		if($con=="Chemistry")
		{
			$sql_pg="SELECT * FROM $pg where Reg_No=$Reg_No";
			$rs3=mysql_query($sql_pg,$cn11) or die(mysql_error());
			$row=mysql_fetch_row($rs3);
			$sname=$row[2];
		}
		else if($con=="Physics")
		{
			$sql_pg="SELECT * FROM $pg where Reg_No=$Reg_No";
			$rs3=mysql_query($sql_pg,$cn22) or die(mysql_error());
			$row=mysql_fetch_row($rs3);
			$sname=$row[2];
		}
		else if($con=="Math")
		{
			$sql_pg="SELECT * FROM $pg where Reg_No=$Reg_No";
			$rs3=mysql_query($sql_pg,$cn21) or die(mysql_error());
			$row=mysql_fetch_row($rs3);
			$sname=$row[2];
		}
		else
		{
			?>
			<br><div class="alert alert-danger" role="alert"><h4><center> Please, Select proper subject.</center></h4></div>
			<?php
		}
		error_reporting(E_ERROR | E_PARSE);
		$log1=fopen("status/$Reg_No Status.xml", "r");
		$status=fread($log1,filesize("status/$Reg_No Status.xml"));
		
		if($status=="true")
 		{
 			
 			fclose($log1);
 			header("Location:status.php");
 			//echo "The User $_POST[Reg_No] is already logged in . ";
 		}

	//$aff=mysql_affected_rows();
	//echo "<br>no of affected".$aff;
		else if(mysql_num_rows($rs3)<1)
		{
			?>
			<br><div class="alert alert-danger" role="alert"><center><h4>
			<span class="glyphicon glyphicon-exclamation-sign"aria-hidden="true"></span> Oops ! Please enter a valid Roll no.</center></h4></div>
			<?php
						exit;						
		}
		else
		{				
			include("database.php");
			$_SESSION[login]="true";
			$log=fopen("status/$Reg_No Status.xml", "w");
			fwrite($log,"true");
			fclose($log);
			$logg=fopen("status/$Reg_No Status.xml", "r");
			$st=fread($logg, filesize("status/$Reg_No Status.xml"));
			$_SESSION['status']=$st;
			$log2=fopen("result/$Reg_No result.xml", "w");
			fwrite($log2,$Reg_No);
			fclose($log2);
			$_SESSION['rl']=$Reg_No;
			$_SESSION['sname']=$sname;

			if($pg=="automobile")
			{   
			
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4) primary key,".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5),".
					"primary key(que_id)

					);",$cn55);

			}
			else if($pg=="civil_1")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5),".
					"primary key(que_id) 
					);",$cn66);
			}
				else if($pg=="civil_2")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5),".
					"primary key(que_id) 
					);",$cn77);
			}
				else if($pg=="mechanical_1")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5),".
					"primary key(que_id) 
					);",$cn88);
			}
				else if($pg=="mechanical_2")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5) ,".
					"primary key(que_id)
					);",$cn99);
			}
				else if($pg=="plastic")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5) ,".
					"primary key(que_id)
					);",$cn101);
			}
				else if($pg=="e&tc_1")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5) ,".
					"primary key(que_id)
					);",$cn111);
			}
				else if($pg=="e&tc_2")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5) ,".
					"primary key(que_id)
					);",$cn121);
			}
				else if($pg=="electrical")
			{
				$cr=mysql_query("CREATE TABLE`".$Reg_No."`(".
					"que_id INT(4),".
					"que_desc TEXT(100),".
					"true_ans INT(5),". 
					"stud_ans INT(5) ,".
					"primary key(que_id)
					);",$cn131);
			}
			
				
			
			
			
			
			
			
		}
		/*$rowk=mysql_fetch_array($rs3);
		$db_email1=$rowk['Reg_No'];		
		$db_status=$rowk['ustatus'];
		$db_sessionid=$rowk['session_id'];

		$old_sessionid = session_id();
		$new_sessionid = session_regenerate_id(true);
		$_SESSION['newregid']=$new_sessionid;
		$_SESSION['odlregid']=$old_sessionid;

		$_SESSION['new_email']=$db_email1;
		$_SESSION['new_pass']=$db_pass;
		$_SESSION['new_status']=$db_status;


		if(!empty($old_sessionid))
		{

		$query_time=mysql_query("UPDATE $_SESSION[Programme] SET session_id='".$old_sessionid."' 
		WHERE Reg_No='".$Reg_No."'");

		}

else if($db_sessionid!=$_SESSION['odlregid'])
{

$query_time=mysql_query("UPDATE $_SESSION[Programme] SET session_id='".$new_sessionid."' 
WHERE Reg_No='".$Reg_No."'");

}

/*if($_SESSION['Course_Name']=="Chemistry")
	{
		include("Chemistry.php");

		if($_SESSION['Programme']=="Civil_1")
		{
			include("programmes/Civil_1.php");		
		}

		else if($_SESSION['Programme']=="Civil_2")
		{
			include("programmes/Civil_2.php");		
		}

		else if($_SESSION['Programme']=="Mechanical_1")
		{
			include("programmes/Mech_1.php");		
		}

		else if($_SESSION['Programme']=="Mechanical_2")
		{
			include("programmes/Mech_2.php");		
		}

		else if($_SESSION['Programme']=="E&TC_1")
		{	
			include("programmes/E&TC_1.php");		
		}

		else if($_SESSION['Programme']=="E&TC_2")
		{	
			include("programmes/E&TC_2.php");			
		}

		else if($_SESSION['Programme']=="Automobile")
		{
			include("programmes/Automobile.php");			
		}

		else if($_SESSION['Programme']=="Computer_Tech")
		{
			include("programmes/Computer.php");		
		}

		else if($_SESSION['Programme']=="Information_Tech")
		{
			include("programmes/Information.php");			
		}

		else if($_SESSION['Programme']=="Electrical_Engg")
		{	
			include("programmes/Electrical.php");		
		}

		else if($_SESSION['Programme']=="Plastic_Engg")
		{
			include("programmes/Plastic.php");		
		}

		else
		{
			echo "<b>Select Proper Programme Or Branch</b>";
		}

	}
	else if($_SESSION['Course_Name']=="Physics")
	{
		include("Physics.php");

		if($_SESSION['Programme']=="Civil_1")
		{
			include("programmes/Civil_1.php");		
		}

		else if($_SESSION['Programme']=="Civil_2")
		{
			include("programmes/Civil_2.php");		
		}

		else if($_SESSION['Programme']=="Mechanical_1")
		{
			include("programmes/Mech_1.php");		
		}

		else if($_SESSION['Programme']=="Mechanical_2")
		{
			include("programmes/Mech_2.php");		
		}

		else if($_SESSION['Programme']=="E&TC_1")
		{	
			include("programmes/E&TC_1.php");		
		}

		else if($_SESSION['Programme']=="E&TC_2")
		{	
			include("programmes/E&TC_2.php");			
		}

		else if($_SESSION['Programme']=="Automobile")
		{
			include("programmes/Automobile.php");			
		}

		else if($_SESSION['Programme']=="Computer_Tech")
		{
			include("programmes/Computer.php");		
		}

		else if($_SESSION['Programme']=="Information_Tech")
		{
			include("programmes/Information.php");			
		}

		else if($_SESSION['Programme']=="Electrical_Engg")
		{	
			include("programmes/Electrical.php");		
		}

		else if($_SESSION['Programme']=="Plastic_Engg")
		{
			include("programmes/Plastic.php");		
		}

		else
		{
			echo "<b>Select Proper Programme Or Branch</b>";
		}

	}*/
}
				/*if(isset($submit))
				{
					
					include("database.php");
					
					$rs=mysql_query("select * from stud_login where Roll_no='$Roll_No' and Stud_name='$Stud_Name'",$cn) or die(mysql_error());
					
					if(mysql_num_rows($rs)<1)
					{
						echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
						exit;
						
					}
					$_SESSION[login]="true";
					
				}*/
				else if(!isset($_SESSION[login]))
				{
					?>
								<br><div class="alert alert-danger" role="alert"><h4> Your are not logged in<br> Please <a href="FHP4.php">Login</a></h4></div>
					<?php
						exit;
				}


			if($con=="Chemistry")
			{
				$rs1=mysql_query("select * from $pg where Reg_No='$Reg_No'  ",$cn11) or die(mysql_error());
			mysql_data_seek($rs1,$_SESSION[q]);
			$row=mysql_fetch_row($rs1,$_SESSION[q]);
				
			}

			else if ($con=="Physics") 
			{
				
				$rs1=mysql_query("select * from $pg where Reg_No='$Reg_No'  ",$cn22) or die(mysql_error());
			mysql_data_seek($rs1,$_SESSION[q]);
			$row=mysql_fetch_row($rs1,$_SESSION[q]);
				
			}
			


			else if ($con=="Math") 
			{
				
				?><script>window.location.href("math.php");</script><?php
				
			}
			?>
			<br><div class="alert alert-success" role="alert"><h4><center>You have successfully logged in.</center></h4></div>
				
		<?php
			echo "<blockquote>";
			echo "<table class=table table-striped table-bordered table-hover>";
				echo "<tr>";
					echo "<th>Name :</th><td> $row[2]</td>";
				
					echo "<th>Roll no:</th><td>$Reg_No </td>";
				echo"</tr>";

				echo "<tr>";
					echo "<th>Programme:</th><td> $pg</td>";
				echo "</tr>";	
			echo "</table>";
			echo "</blockquote>";
	//mysql_query("insert into '$pg' (Reg_No,S_Name,Programme,Course_Code,Course_Name,Status) values ('$_SESSION[rl]','$_SESSION[sname]','$pg','$cc','$con','$_SESSION[status]')",$cn44)or die (mysql_error());
	mysql_query("insert into $pg(Reg_No,S_Name,Programme,Course_Code,Course_Name,Status) values ('$_SESSION[rl]','$_SESSION[sname]','$pg','$cc','$con','$_SESSION[status]')",$cn44)or die (mysql_error());
?>
		
<?php

?>
<!--<center><a href="quiz.php" target="_blank">List of subjects</a><br></center>--> 
<form method="post" target="_blank" action="quiz.php">
<!--<input type="submit"  name="submit" value="Start" onclick="quiz.php">-->
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<button class="btn btn-primary btn-lg" type="submit"name="submit"data-toggle="tooltip" data-placement="right" title="Click here to start the exam"  >Start Exam</button>
</form> 
<br><br><br><br><br><br>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/dropdown.js"></script>
			
			
		
			
</body>
</html>