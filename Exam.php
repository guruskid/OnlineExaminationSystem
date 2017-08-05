<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Adminstrative Area Online Quiz </title>
				
		<meta charset="UTF-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	    <title>Home Page</title>
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
	<?php
	error_reporting(E_ALL & ~E_NOTICE);
extract($_POST);
if(isset($submit))
{
	include("database.php");
	$rs=mysql_query("select * from admin_login where Username='$Username' and Password='$Password'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		?>
		<br><div class="alert alert-danger" role="alert">Please enter a valid name and password.</div>
		<?php 
		exit;
		
	}
	$_SESSION[login]="true";
	
}
else if(!isset($_SESSION[login]))
{
	?>
	<br><div class="alert alert-danger"role="alert"><h4> Your are not logged in<br> Please <a href=adminlog.php>Login</a></h4><div>";
	<?php	exit;
}
?>



		<!--COLLEGE LOGO IMAGES-->
				<header class="row">
					<img src="images/logoo.jpg"height="15%"width="17%"align="left">
					<img src="images/Logo2.jpg"height="15%"width="53%"align="left"class="visible-lg">
					<img src="images/Logo3.jpg"height="15%"width="30%"align="left">
				</header>

<?php
include("head.php");
?>

<br><br>
<div class="container">
		
		<div class="row">
			<div class="col-md-2 col-md-offset-1">
				<button class="btn btn-primary btn-lg" onclick="SetPage('startexam.php')">Start Exam</button>
			</div>
			<div class="col-md-2 col-md-offset-1">
				<button class="btn btn-danger btn-lg" onclick="SetPage('endexam.php')">End Exam</button>
			</div>
			
			<div class="col-md-2 col-md-offset-1">
				<button class="btn btn-warning btn-lg" onclick="SetPage('showdetails.php')">Show details</button>
			</div>
			<div class="col-md-2 col-md-offset-1">
				<button class="btn btn-info btn-lg" onclick="SetPage('results.php')">Results</button>
			</div>
		</div>
		</div>

		<script>
					function SetPage(url)
					{
			 
						document.getElementById("myframe").setAttribute("src", url);
			 
					}
			</script>




<br><br><br><br><br><br>
<center>
			<iframe id="myframe" height="45%" width="60%">
			
			</iframe>
		</center>
		<!--javascript-->

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


<?php
include("footer.php");
?>
</body>
</html>