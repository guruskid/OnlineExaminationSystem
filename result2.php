<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<?php
session_start();
?>
<html>
	<head>
		<title>Result</title>
	<meta charset="UTF-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
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
		<link rel="stylesheet" href="css/bootstrap.min.css">
	    <script src="js/respond.js"></script>

	</head>
	<body>
			<header class="row">
					<img src="images/logoo.jpg"height="15%"width="17%"align="left">
					<img src="images/Logo2.jpg"height="15%"width="53%"align="left"class="visible-lg">
					<img src="images/Logo3.jpg"height="15%"width="30%"align="left">
				</header>

			
		<div class="row">
			<div class="col-md-1 col-md-offset-11">
				<button class="btn btn-primary " type="submit" name="submit" onclick="location='logout.php'">
				<span class="glyphicon glyphicon-off"aria-hidden="true"></span>
				&nbsp Log Out</button>
			</div>
		</div>
				<u><center><h2>Result</h2></center></u>
		

			<?php
			error_reporting(E_ALL & ~E_NOTICE);
			session_start();
			include("database.php");
			extract($_POST);
			extract($_GET);
			extract($_SESSION);

  				error_reporting(E_ERROR | E_PARSE);

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
 			$f3=fopen("year.txt","r");
 			$yr=fread($fd3,filesize("year.txt"));

 				//reading Prog txt
 			$fd4=fopen("term.txt","r");
 			$tr=fread($fd4,filesize("term.txt"));
 	
 			//reading Prog txt
 			$fd5=fopen("qsets.txt","r");
 			$qsets=fread($fd5,filesize("qsets.txt"));


 			if($con=="Chemistry")
 			{
				$rs3=mysql_query("select * FROM $pg where Reg_No=$Reg_No",$cn11) or die(mysql_error());
				mysql_data_seek($rs3,$_SESSION[q]);
				$row2=mysql_fetch_row($rs3,$_SESSION[q]);
					
			
			}
			else if($con=="Physics")
			{
				
				$rs3=mysql_query("select * FROM $pg where Reg_No=$Reg_No",$cn22) or die(mysql_error());
				mysql_data_seek($rs3,$_SESSION[q]);
				$row2=mysql_fetch_row($rs3,$_SESSION[q]);
				
			}
				else if($con=="Math")
			{
				
				$rs3=mysql_query("select * FROM $pg where Reg_No=$Reg_No",$cn21) or die(mysql_error());
				mysql_data_seek($rs3,$_SESSION[q]);
				$row2=mysql_fetch_row($rs3,$_SESSION[q]);
				
			}
/*
			$fid=fopen("$Reg_No.xml", "r");
			$rd=fread($fid,filesize("Reg_No.xml"));
			echo "<center><h2>Result</h2></center>";
			echo $rd;

			
			echo"</table>";
		
*/			
			
			
			//mysql_query("insert into $pg(Reg_No,S_Name,Course_Name,Attempt_Que,Right_Ans,Wrong_Ans,Obt_Marks) values ('$_SESSION[Reg_No]','$_SESSION[Nm]','$_SESSION[Course_Name]','$_SESSION[Attempt_Que]','$_SESSION[Right_Ans]', '$_SESSION[Wrong_Ans]','$_SESSION[markss]')",$cn33) or die(mysql_error());
							
				?>
			<table class="table table-condensed">
			<?php
				$ff=fopen("backup/$Reg_No.xml", "r");
				$ra=fread($ff,filesize("backup/$Reg_No.xml"));
				$Obt_Marks=$ra/2;
						if($pg=="automobile")
					{   
						$conn=$cn55;
						
					}
				else if($pg=="civil_1")
				{
					$conn=$cn66;
						
				}
				else if($pg=="civil_2")
			{
				
					$conn=$cn77;
						
			}
				else if($pg=="mechanical_1")
			{
				
					$conn=$cn88;
						
			}
				else if($pg=="mechanical_2")
			{
				
						$conn=$cn99;
						
			}
				else if($pg=="plastic")
			{
				
				$conn=$cn101;
						
			}
				else if($pg=="e&tc_1")
			{
				
					$conn=$cn111;
						
			}
				else if($pg=="e&tc_2")
			{
				
					$conn=$cn121;
						
			}
				else if($pg=="electrical")
			{
				
						$conn=$cn131;
			}







				mysql_query("Select * from  `" . $Reg_No . "` ",$conn);
				$a=mysql_affected_rows($conn);
				$_SESSION['Attempt_Que']=$a;
  				echo"<tr><th>Name :</th><td>$_SESSION[Nm]</td></tr>";
  				echo"<tr><th>Roll no :</th><td>$_SESSION[Reg_No]</td></tr>";
  				echo"<tr><th>Programme :</th><td>$_SESSION[Prg]</td></tr>";
  				echo"<tr><th>Course Code :</th><td>$_SESSION[Course_Code]</td></tr>";
  				echo"<tr><th>Course Name :</th><td>$_SESSION[Course_Name]</td></tr>";
  				echo"<tr><th>Year:</th><td>$_SESSION[Year]</td></tr>";
  				echo"<tr><th>Term:</th><td>$_SESSION[Term]</td></tr>";
  				echo"<tr><th>Attempted Questions:</th><td>$_SESSION[Attempt_Que]</td></tr>";
  				echo"<tr><th>Correct Answers</th><td>$ra</td></tr>";
  				//echo"<tr><th>Wrong Answers</th><td>$_SESSION[Wrong_Ans]</td></tr>";
  				echo"<tr><th>Marks Obtained:</th><td>$Obt_Marks</td></tr>";
  				error_reporting(E_ERROR | E_PARSE);
		
  				$fid=fopen("backup_marks/$Reg_No(2).xml", "a+");

						fputs($fid,"Name: ".$_SESSION['Nm']."\t \n");
						fputs($fid,"Roll No: ".$_SESSION['Reg_No']."\t \n");
						fputs($fid,"Programme: ".$_SESSION['Prg']."\t \n");
						fputs($fid,"Course Code: ".$_SESSION['Course_Code']."\t \n");
						fputs($fid,"Course Name: ".$_SESSION['Course_Name']."\t \n");
						fputs($fid,"Attempted Questions: ".$_SESSION['Attempt_Que']."\t \n");
						fputs($fid,"Correct Answers".$ra."\t \n");
						//fputs($fid,"Wrong Answers".$_SESSION['Wrong_Ans']);
						fputs($fid,"Obtained Marks: ".$Obt_Marks."\t \n");
						fclose($fid);	

						
						mysql_query("insert into $_SESSION[Prg](Reg_No,S_Name,Programme,Course_Code,Course_Name,Right_Ans,Obt_Marks) values ('$_SESSION[Reg_No]','$_SESSION[Nm]','$_SESSION[Prg]','$_SESSION[Course_Code]','$_SESSION[Course_Name]', '$ra','$Obt_Marks')",$cn33) or die(mysql_error());
          
  		
				if($pg=="automobile")
					{   
						$rs21=mysql_query("select * from $_SESSION[Reg_No] ",$cn55);
					//	$a=mysql_num_rows();
						//echo "Affected Rows: ".$a;

					}
				else if($pg=="civil_1")
				{
					mysql_query("select count(*) from $_SESSION[Reg_No] ",$cn66);

						

				}
				else if($pg=="civil_2")
			{
				$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn77);
				//echo "Affected Rows: ".mysql_affected_rows($rs21);

						
			}
				else if($pg=="mechanical_1")
			{
				$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn88);
				//echo "Affected Rows: ".mysql_affected_rows($rs21);

						
			}
				else if($pg=="mechanical_2")
			{
						$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn99);
							//echo "Affected Rows: ".mysql_affected_rows($rs21);
	
			}
				else if($pg=="plastic")
			{
						$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn101);
									///echo "Affected Rows: ".mysql_affected_rows();

			}
				else if($pg=="e&tc_1")
			{
				
$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn111);
//echo "Affected Rows: ".mysql_affected_rows();

			}
				else if($pg=="e&tc_2")
			{
							$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn121);
								//	echo "Affected Rows: ".mysql_affected_rows();

			}
				else if($pg=="electrical")
			{
				
						$rs21=mysql_query("select * from $_SESSION[Reg_No] where que_id",$cn131);
						//echo "Affected Rows: ".mysql_affected_rows();

						
			}
//						echo "Affected Rows: ".mysql_affected_rows();

			?>		
			
		
		

			<!--javascript-->

				<script src="http://code.jquery.com/jquery-latest.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
	</body>
</html>







