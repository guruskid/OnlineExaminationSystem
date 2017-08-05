<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<?php

session_start();
//echo "session".$_SESSION["sample"];
//echo "hello".$_SESSION['sname'];
//echo "the value is".$_SESSION['my'];
//if(isset($_POST['Programme']) && isset($_POST['Year']) && isset($_POST['Term']) && isset($_POST['Course_Code']) && isset($_POST['Course_Name']) && isset($_POST['Question_Sets']))

//echo "program is".$_SESSION['Programme'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title> </title>
				
<meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
            <link rel="stylesheet" type="text/css" href="css/table.css" />
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


	<body>


	<table>
	<tr><center><b><i><font size=5 color="Purple">Student Login Status</font></i></b></center></tr>
	<tr>
	<th>Roll No</th>
	<th>Student Name</th>
	<th>Programme</th>
	<th>Course Code</th>
	<th>Course Name</th>
	<th>Status</th>
	</tr>
	<?php
	include("database.php");
error_reporting(E_ALL & ~E_NOTICE);
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
		
			$rs=mysql_query("select * from $pg where Course_Name='$con'",$cn44)or die(mysql_error());
		


			while($row=mysql_fetch_row($rs))
			{
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "</tr>";
	}


	?>
	</table>


	</body>
	


