<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
//echo "session".$_SESSION["sample"];
//echo "the value is".$_SESSION['my'];
//if(isset($_POST['Programme']) && isset($_POST['Year']) && isset($_POST['Term']) && isset($_POST['Course_Code']) && isset($_POST['Course_Name']) && isset($_POST['Question_Sets']))
if(isset($_POST['Programme']) and isset($_POST['Year']) and isset($_POST['Term']) and isset($_POST['Course_Code']) and isset($_POST['Course_Name']) and isset($_POST['Question_Sets']))
{
	$_SESSION['Programme']=$_POST['Programme'];

	/////
	//$prog_sample=$_POST['Programme'];

	//$_SESSION[$prog_sample];
	/////
	$_SESSION['Year']=$_POST['Year'];
	$_SESSION['Term']=$_POST['Term'];
	$_SESSION['Course_Code']=$_POST['Course_Code'];
	$_SESSION['Course_Name']=$_POST['Course_Name'];
	$_SESSION['Question_Sets']=$_POST['Question_Sets'];
	
	header("location:a.php");
}
if(empty($_SESSION['Programme']) || empty($_SESSION['Year']) || empty($_SESSION['Term']) || empty($_SESSION['Course_Code']) || empty($_SESSION['Course_Name']) || empty($_SESSION['Question_Sets'])  )
{
	header("location:admin_login.php");
}

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
		<div class="alert alert-success" role="alert"><h4>The exam has started !</h4></div>
	<?php
	


		 	
		 	//echo "<h3>You have setted Paper & Start Paper Successfully</h3>";
		 	
		 	echo "<blockquote>";
			echo "<table class=table table-striped table-bordered table-hover>";
				echo "<tr>";
					echo "<th>Programme:</th><td>".$_SESSION['Programme']."</td>";
				
					echo "<th>Year:</th><td>$_SESSION[Year]</td>";

					echo "<th>Term:</th><td>$_SESSION[Term]</td>";
				echo"</tr>";

				echo "<tr>";
					echo "<th>Course Code:</th><td>$_SESSION[Course_Code]</td>";

					echo "<th>Course Name:</th><td>$_SESSION[Course_Name]</td>";

					echo "<th>Question Sets:</th><td>$_SESSION[Question_Sets]</td>";

				echo "</tr>";	
			echo "</table>";
			echo "</blockquote>";

		// Store Programme in file
			$fd=fopen("prog.txt", "w+");
		fwrite($fd,$_SESSION['Programme']);
		fclose($fd);

		// Store Course name in file
		$fd1=fopen("cn.txt", "w+");
		fwrite($fd1,$_SESSION['Course_Name']);
		fclose($fd1);

		// Store Programme in file
		$fd2=fopen("cc.txt", "w+");
		fwrite($fd2,$_SESSION['Course_Code']);
		fclose($fd2);

		// Store Programme in file
		$fd3=fopen("year.txt", "w+");
		fwrite($fd3,$_SESSION['Year']);
		fclose($fd3);

		// Store Programme in file
		$fd4=fopen("term.txt", "w+");
		fwrite($fd4,$_SESSION['Term']);
		fclose($fd4);

		// Store Programme in file
		$fd5=fopen("qsets.txt", "w+");
		fwrite($fd5,$_SESSION['Question_Sets']);
		fclose($fd5);
	



	?>






















	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
