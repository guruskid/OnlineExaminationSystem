<?php
session_start();
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

	<br><div class="alert alert-success" role="alert"><center><h4>You have logged out successfully....!!!</center></h4></div>

	<?php
	include("database.php");
		$log=fopen("status/$_SESSION[Reg_No] Status.xml", "w");
			fwrite($log,"false");
			fclose($log);

			mysql_query("update `".$_SESSION['Prg']."`
        SET Status='false'
        WHERE Reg_No='$_SESSION[Reg_No]'",$cn44);



			?>