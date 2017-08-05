<?php
session_start();
?>
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Adminstrative AreaOnline Quiz </title>
				
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
	
extract($_POST);
if(isset($submit))
{
	include("database.php");
	$rs=mysql_query("select * from admin_login where Username='$Username' and Password='$Password'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
			?>
		<br><br><div class="alert alert-danger" role="alert"><h4><center>Oops ! Please enter a valid name and password.</center></h4></div>
		<?php
		exit;
		
	}
	$_SESSION[login]="true";
	
}
else if(!isset($_SESSION[login]))
{	
	?>		
	
		<br><div class="alert alert-danger" role="alert"><h4><center>Your are not logged in</center><br> <center>Please <a href="adminlog.php">Login</center></a><div></h4></div>
		<?php
		exit;
	//		echo "<a href=fhp4.php>start</a>";
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
		<center><em><u><h1>Welcome to Admistrative Area</h1></u></em></center> <br><br><br><br><br><br>


		<!--THE FOUR CIRCLES THAT FORM THE MAIN GUI OF OUR HOME PAGE-->
		<div class="row">	
					<div class="main_content_container cwidth_container">
						<div class="main_content_wrapper cwidth_wrapper">
							<div class="main_content cwidth">
								<div class="col-1-1">
									<div class="col">
										<div class="grid">
				<div class="col-content">
					<div class="col">
						<div class="page-1_container main_column">
							<div class="page-1_wrapper">
								<div class="page-1 content_cols_eq">
									<div class="post_content">
										<div class="grid">
											<div class="col-md-3 col-sm-3 col-xs-6 ">
												<div class="col">
													<div class="text_icon_expand_item_wrapper">
														<a class="text_icon_expand_item" href="#">
															<span class="text_icon_expand_item_inner">
																<span class="text_icon_expand_image_wrapper">
																	<img class="text_icon_expand_image" src="images/HPimg.jpg" alt="">
																</span>
																<span class="tie_icon_wrapper">
																	<span class="tie_icon glyphicon glyphicon-file"></span>
																</span>
																
																
																<span class="tie_title" onclick="location='Exam.php'" >Exam</span>
															</span>
														</a>
													</div>
												</div>
											</div>
											
											<div class="col-md-3 col-sm-3 col-xs-6 ">
												<div class="col">
													<div class="text_icon_expand_item_wrapper">
														<a class="text_icon_expand_item" href="#">
															<span class="text_icon_expand_item_inner">
																<span class="text_icon_expand_image_wrapper">
																	<img class="text_icon_expand_image img-responsive" src="images/HPimg.jpg" alt="">
																</span>
																<span class="tie_icon_wrapper">
																	<span class="tie_icon glyphicon glyphicon-pencil"></span>
																</span>
																
																
																<span class="tie_title"onclick="location='admin_questionadd.php'">Questions</span>
															</span>
														</a>
													</div>
										</div>
									</div>

									<div class="col-md-3 col-sm-3 col-xs-6 ">
												<div class="col">
													<div class="text_icon_expand_item_wrapper">
														<a class="text_icon_expand_item" href="#">
															<span class="text_icon_expand_item_inner">
																<span class="text_icon_expand_image_wrapper">
																	<img class="text_icon_expand_image" src="images/HPimg.jpg" alt="">
																</span>
																<span class="tie_icon_wrapper">
																	<span class="tie_icon glyphicon glyphicon-file"></span>
																</span>
																
																
																<span class="tie_title" onclick="location='resultstud.php'" >Results</span>
															</span>
														</a>
													</div>
												</div>
											</div>
								</div>
								</div>
								</div></div></div></div></div></div></div></div></div></div></div></div></function></script>


		<!--javascript-->

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
				<br><br>
						<br><br>
								<br><br>		<br><br>
		

<?php
include("footer.php");
?>
	</body>
</html>
