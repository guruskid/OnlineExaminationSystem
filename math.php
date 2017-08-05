<?php
/*Note: 
This File math.php has Coding For Paper of Math Seperately
*/


//Session Starting 
session_start();

include("database.php");//including database.php
extract($_POST);
extract($_GET);
extract($_SESSION);

	$logg=fopen("status/$Reg_No Status.xml", "r");
			$st=fread($logg, filesize("status/$Reg_No Status.xml"));
			$_SESSION['status']=$st;
			if($_SESSION['status']=="false")
			{
				header("location:fhp4.php");
			}



?>

 <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
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
    	<script src="js/jquery-2.1.3.min.js"></script>   

	<!-- The Following Style is used for some effect Fonts,colors,hover  etc using CSS  -->
    	<style type="text/css">
    		
		    		
    				#xyz{border-radius: 25px;border: 2px solid #8AC007;}
		    		
    				/*css for the text size zoom controls */
		    		#wrapper{background: #fff;} 
		    			
		    		#controls  {  
		              padding:2px;
		              background:#333;           
		              text-align:center;
		              transition:.25s ease-out;}

		   			#controls a {
		   			  font-size:24px;
		              color:#aaa;
		              font-weight:bold;
		              padding: 5px;}

		    		#controls a:hover {
		    		  color:#fff;
		              background:#000;
		              transition:.25s ease-out;}

					#controls a:focus  {  
					  background:#000;
		              color:#fff ;}

					#small     {  font-size:10px !important;}
					#medium    {  font-size:14px !important;}
					#large     {  font-size:18px  !important;}

    	</style> 

    	<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
		<script type="text/javascript">

		/*JAVASCRIPT TO INCREASE THE TEXT SIZE OF QUESTIONS */
  				
			$(document).ready(function(){
  
					  $("#small").click(function(event){
					    event.preventDefault();
					    $("#q").animate({"width":"50%","height":"125%"});
					    $("#c1").animate({"width":"30%","height":"90px"});
					    $("#c2").animate({"width":"30%","height":"90px"});
					    $("#c3").animate({"width":"30%","height":"90px"});
					    $("#c4").animate({"width":"30%","height":"90px"});
					    
					    
					  });
					  
					  $("#medium").click(function(event){
					    event.preventDefault();
					    $("#q").animate({"width":"60%","height":"150%"});
					    $("#c1").animate({"width":"40%","height":"105px"});
					    $("#c2").animate({"width":"40%","height":"105px"});
					    $("#c3").animate({"width":"40%","height":"105px"});
					    $("#c4").animate({"width":"40%","height":"105px"});
					    
					    
					  });
					  
					  $("#large").click(function(event){
					    event.preventDefault();
					    $("#q").animate({"width":"70%","height":"175%"});
					    $("#c1").animate({"width":"50%","height":"120px"});
					    $("#c2").animate({"width":"50%","height":"120px"});
					    $("#c3").animate({"width":"50%","height":"120px"});
					    $("#c4").animate({"width":"50%","height":"120px"});
					    
					  });
					  
					  $( "a" ).click(function() {
					   $("a").removeClass("selected");
					  $(this).addClass("selected");
					  
					 });

				});

  		</script>		
<script >
window.onload = function() {

    var ans = localStorage.getItem(ans);
    if (ans !== null) $('#ans').val(ans);

    // ...
}
</script>

		<title>Quiz</title>
		


	
		<!--HEADER ROW IE ROW NO.1-->
		<header class="row">
			<img src="images/logoo.jpg"height="15%"width="17%"align="left">
			<img src="images/Logo2.jpg"height="15%"width="53%"align="left"class="visible-lg">
			<img src="images/Logo3.jpg"height="15%"width="30%"align="left">
		</header>

		<!--ROW NO 2 CONSISTING OF STUDENT DETAILS AND TIMER-->
	<div class="row">	
		<div class="col-md-9">		
			<?php
				include("database.php");
   
				//Reading Program Name from prog.txt
				$fd=fopen("prog.txt","r");
	 			$pg=fread($fd,filesize("prog.txt"));
	 			strtolower($pg);

	 			//reading COURSE NAME txt
	 			$fd1=fopen("cn.txt","r");
	 			$con=fread($fd1,filesize("cn.txt"));

	 				//reading COURSE CODE txt
	 			$fd2=fopen("cc.txt","r");
	 			$cc=fread($fd2,filesize("cc.txt"));
 	
	 			//reading YEAR txt
	 			$fd3=fopen("year.txt","r");
	 			$yr=fread($fd3,filesize("year.txt"));

	 				//reading TERM txt
	 			$fd4=fopen("term.txt","r");
	 			$tr=fread($fd4,filesize("term.txt"));
	 	
	 			//reading QSETS txt
	 			$fd5=fopen("qsets.txt","r");
	 			$qsets=fread($fd5,filesize("qsets.txt"));
				

	 			//SELECTING THE MYSQL CONNECTION STRING AS OER THE PROGRAMME
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



			/*   CODE TO SET THE NAVIGATION BUTTONS GREEN WHEN A STUDENT HAS ATTEMPTED THE QUESTIONS
			     THIS HELPS THE STUDENTS UNDERSTAND WHICH QUESTION HE/SHE HAS ATTEMPTED             */
			$sql="select * from `" . $Reg_No . "` where que_id=1";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c11="checked  disabled";
						$c12="disabled";
						$c13="disabled";
						$c14="disabled";
						
					}
					else if($row[3]==2)
					{
						$c12="checked  disabled";
						$c11="disabled";
						$c13="disabled";
						$c14="disabled";
					}
					else if($row[3]==3)
					{
						$c13="checked  disabled";$c12="disabled";
						$c11="disabled";
						$c14="disabled";

					}
					else
					{
						$c14="checked  disabled";$c12="disabled";
						$c13="disabled";
						$c11="disabled";
					}
					$s1="green";
					$d1="disabled";
				}

							$sql="select * from `" . $Reg_No . "` where que_id=2";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c21="checked  disabled";
						$c22="disabled";
						$c23="disabled";
						$c24="disabled";
					}
					else if($row[3]==2)
					{
						$c22="checked  disabled";$c21="disabled";
						$c23="disabled";
						$c24="disabled";
					}
					else if($row[3]==3)
					{
						$c23="checked  disabled";$c21="disabled";
						$c22="disabled";
						$c24="disabled";
					}
					else
					{
						$c24="checked  disabled";$c22="disabled";
						$c23="disabled";
						$c21="disabled";
					}
					$s2="green";$d2="disabled";
				}
		
			$sql="select * from `" . $Reg_No . "` where que_id=3";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c31="checked  disabled";$c32="disabled";
						$c33="disabled";
						$c34="disabled";
					}
					else if($row[3]==2)
					{
						$c32="checked  disabled";$c31="disabled";
						$c33="disabled";
						$c34="disabled";
					}
					else if($row[3]==3)
					{
						$c33="checked  disabled";$c32="disabled";
						$c31="disabled";
						$c34="disabled";
					}
					else
					{
						$c34="checked  disabled";$c31="disabled";
						$c32="disabled";
						$c33="disabled";
					}
					$s3="green";$d3="disabled";
				}
		
							$sql="select * from `" . $Reg_No . "` where que_id=4";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c41="checked  disabled";$c42="disabled";
						$c43="disabled";
						$c44="disabled";
					}
					else if($row[3]==2)
					{
						$c42="checked  disabled";$c41="disabled";
						$c43="disabled";
						$c44="disabled";
					}
					else if($row[3]==3)
					{
						$c43="checked  disabled";$c41="disabled";
						$c42="disabled";
						$c44="disabled";
					}
					else
					{
						$c44="checked  disabled";$c41="disabled";
						$c43="disabled";
						$c42="disabled";
					}
					$s4="green";$d4="disabled";
				}

					$sql="select * from `" . $Reg_No . "` where que_id=5";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c51="checked  disabled";$c52="disabled";
						$c53="disabled";
						$c54="disabled";
					}
					else if($row[3]==2)
					{
						$c52="checked  disabled";$c51="disabled";
						$c53="disabled";
						$c54="disabled";
					}
					else if($row[3]==3)
					{
						$c53="checked  disabled";$c52="disabled";
						$c51="disabled";
						$c54="disabled";
					}
					else
					{
						$c54="checked  disabled";$c52="disabled";
						$c53="disabled";
						$c51="disabled";
					}
					$s5="green";$d5="disabled";
				}

							$sql="select * from `" . $Reg_No . "` where que_id=6";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
	
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c61="checked  disabled";$c62="disabled";
						$c63="disabled";
						$c64="disabled";
					}
					else if($row[3]==2)
					{
						$c62="checked  disabled";$c61="disabled";
						$c63="disabled";
						$c64="disabled";
					}
					else if($row[3]==3)
					{
						$c63="checked  disabled";$c62="disabled";
						$c61="disabled";
						$c64="disabled";
					}
					else
					{
						$c64="checked  disabled";$c62="disabled";
						$c61="disabled";
						$c63="disabled";
					}
					$s6="green";$d6="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=7";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c71="checked  disabled";$c72="disabled";
						$c73="disabled";
						$c74="disabled";
					}
					else if($row[3]==2)
					{
						$c72="checked  disabled";$c71="disabled";
						$c73="disabled";
						$c74="disabled";
					}
					else if($row[3]==3)
					{
						$c73="checked  disabled";$c72="disabled";
						$c71="disabled";
						$c74="disabled";
					}
					else
					{
						$c74="checked  disabled";$c72="disabled";
						$c73="disabled";
						$c71="disabled";
					}
					$s7="green";$d7="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=8";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c81="checked  disabled";$c82="disabled";
						$c83="disabled";
						$c84="disabled";
					}
					else if($row[3]==2)
					{
						$c82="checked  disabled";$c81="disabled";
						$c83="disabled";
						$c84="disabled";
					}
					else if($row[3]==3)
					{
						$c83="checked  disabled";$c81="disabled";
						$c82="disabled";
						$c84="disabled";
					}
					else
					{
						$c84="checked  disabled";$c82="disabled";
						$c83="disabled";
						$c81="disabled";
					}
					$s8="green";$d8="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=9";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c91="checked  disabled";$c92="disabled";
						$c93="disabled";
						$c94="disabled";
					}
					else if($row[3]==2)
					{
						$c92="checked  disabled";$c91="disabled";
						$c93="disabled";
						$c94="disabled";
					}
					else if($row[3]==3)
					{
						$c93="checked  disabled";$c91="disabled";
						$c92="disabled";
						$c94="disabled";
					}
					else
					{
						$c94="checked  disabled";$c92="disabled";
						$c93="disabled";
						$c91="disabled";
					}
					$s9="green";$d9="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=10";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c101="checked  disabled";$c102="disabled";
						$c103="disabled";
						$c104="disabled";
					}
					else if($row[3]==2)
					{
						$c102="checked  disabled";$c101="disabled";
						$c103="disabled";
						$c104="disabled";
					}
					else if($row[3]==3)
					{
						$c103="checked  disabled";$c104="disabled";
						$c102="disabled";
						$c101="disabled";
					}
					else
					{
						$c104="checked  disabled";$c103="disabled";
						$c102="disabled";
						$c101="disabled";
					}
					$s10="green";$d10="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=11";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
//echo $affect=mysql_affected_rows();
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c111="checked  disabled";$c112="disabled";
						$c113="disabled";
						$c114="disabled";					}
					else if($row[3]==2)
					{
						$c112="checked  disabled";$c111="disabled";
						$c113="disabled";
						$c114="disabled";
					}
					else if($row[3]==3)
					{
						$c113="checked  disabled";$c111="disabled";
						$c112="disabled";
						$c114="disabled";
					}
					else
					{
						$c114="checked  disabled";$c113="disabled";
						$c112="disabled";
						$c111="disabled";
					}
					$s11="green";$d11="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=12";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
	
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c121="checked  disabled";$c124="disabled";
						$c122="disabled";
						$c123="disabled";
					}
					else if($row[3]==2)
					{
						$c122="checked  disabled";$c124="disabled";
						$c123="disabled";
						$c121="disabled";
					}
					else if($row[3]==3)
					{
						$c123="checked  disabled";$c124="disabled";
						$c122="disabled";
						$c121="disabled";
					}
					else
					{
						$c124="checked  disabled";$c123="disabled";
						$c122="disabled";
						$c121="disabled";
					}
					$s12="green";$d12="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=13";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c131="checked  disabled";$c132="disabled";
						$c133="disabled";
						$c134="disabled";
					}
					else if($row[3]==2)
					{
						$c132="checked  disabled";$c131="disabled";
						$c133="disabled";
						$c134="disabled";
					}
					else if($row[3]==3)
					{
						$c133="checked  disabled";$c132="disabled";
						$c131="disabled";
						$c134="disabled";					}
					else
					{
						$c134="checked  disabled";$c131="disabled";
						$c133="disabled";
						$c132="disabled";
					}
					$s13="green";$d13="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=14";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c141="checked  disabled";$c142="disabled";
						$c143="disabled";
						$c144="disabled";
					}
					else if($row[3]==2)
					{
						$c142="checked  disabled";$c144="disabled";
						$c143="disabled";
						$c141="disabled";
					}
					else if($row[3]==3)
					{
						$c143="checked  disabled";$c144="disabled";
						$c142="disabled";
						$c141="disabled";
					}
					else
					{
						$c144="checked  disabled";$c143="disabled";
						$c142="disabled";
						$c141="disabled";
					}
					$s14="green";$d14="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=15";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c151="checked  disabled";$c152="disabled";
						$c153="disabled";
						$c154="disabled";
					}
					else if($row[3]==2)
					{
						$c152="checked  disabled";$c153="disabled";
						$c154="disabled";
						$c151="disabled";
					}
					else if($row[3]==3)
					{
						$c153="checked  disabled";$c154="disabled";
						$c152="disabled";
						$c151="disabled";
					}
					else
					{
						$c154="checked  disabled";$c153="disabled";
						$c152="disabled";
						$c151="disabled";
					}
					$s15="green";$d15="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=16";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
		
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c161="checked  disabled";$c162="disabled";
						$c163="disabled";
						$c164="disabled";
					}
					else if($row[3]==2)
					{
						$c162="checked  disabled";$c164="disabled";
						$c163="disabled";
						$c161="disabled";
					}
					else if($row[3]==3)
					{
						$c163="checked  disabled";$c164="disabled";
						$c162="disabled";
						$c161="disabled";
					}
					else
					{
						$c164="checked  disabled";$c163="disabled";
						$c162="disabled";
						$c161="disabled";
					}
					$s16="green";$d16="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=17";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c171="checked  disabled";$c172="disabled";
						$c173="disabled";
						$c174="disabled";
					}
					else if($row[3]==2)
					{
						$c172="checked  disabled";$c171="disabled";
						$c173="disabled";
						$c174="disabled";
					}
					else if($row[3]==3)
					{
						$c173="checked  disabled";$c174="disabled";
						$c172="disabled";
						$c171="disabled";
					}
					else
					{
						$c174="checked  disabled";$c173="disabled";
						$c172="disabled";
						$c171="disabled";					}
					$s17="green";$d17="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=18";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c181="checked  disabled";$c182="disabled";
						$c183="disabled";
						$c184="disabled";
					}
					else if($row[3]==2)
					{
						$c182="checked  disabled";$c181="disabled";
						$c183="disabled";
						$c184="disabled";
					}
					else if($row[3]==3)
					{
						$c183="checked  disabled";$c181="disabled";
						$c182="disabled";
						$c183="disabled";
					}
					else
					{
						$c184="checked  disabled";$c181="disabled";
						$c182="disabled";
						$c183="disabled";
					}
					$s18="green";$d18="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=19";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c191="checked  disabled";$c192="disabled";
						$c193="disabled";
						$c194="disabled";
					}
					else if($row[3]==2)
					{
						$c192="checked  disabled";$c191="disabled";
						$c193="disabled";
						$c194="disabled";
					}
					else if($row[3]==3)
					{
						$c193="checked  disabled";$c191="disabled";
						$c192="disabled";
						$c194="disabled";
					}
					else
					{
						$c194="checked  disabled";$c193="disabled";
						$c192="disabled";
						$c191="disabled";
					}
					$s19="green";$d19="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=20";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c201="checked  disabled";$c202="disabled";
						$c203="disabled";
						$c204="disabled";
					}
					else if($row[3]==2)
					{
						$c202="checked  disabled";$c201="disabled";
						$c203="disabled";
						$c204="disabled";
					}
					else if($row[3]==3)
					{
						$c203="checked  disabled";$c204="disabled";
						$c202="disabled";
						$c201="disabled";
					}
					else
					{
						$c204="checked  disabled";$c203="disabled";
						$c202="disabled";
						$c201="disabled";					}
					$s20="green";$d20="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=21";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c211="checked  disabled";$c212="disabled";
						$c213="disabled";
						$c214="disabled";
					}
					else if($row[3]==2)
					{
						$c212="checked  disabled";$c211="disabled";
						$c213="disabled";
						$c214="disabled";
					}
					else if($row[3]==3)
					{
						$c213="checked  disabled";$c211="disabled";
						$c212="disabled";
						$c214="disabled";
					}
					else
					{
						$c214="checked  disabled";$c211="disabled";
						$c212="disabled";
						$c213="disabled";
					}
					$s21="green";$d21="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=22";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c221="checked  disabled";$c222="disabled";
						$c223="disabled";
						$c224="disabled";
					}
					else if($row[3]==2)
					{
						$c222="checked  disabled";$c223="disabled";
						$c224="disabled";
						$c221="disabled";
					}
					else if($row[3]==3)
					{
						$c223="checked  disabled";$c224="disabled";
						$c222="disabled";
						$c221="disabled";
					}
					else
					{
						$c224="checked  disabled";$c223="disabled";
						$c222="disabled";
						$c221="disabled";
					}
					$s22="green";$d22="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=23";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c231="checked  disabled";$c232="disabled";
						$c233="disabled";
						$c234="disabled";
					}
					else if($row[3]==2)
					{
						$c232="checked  disabled";$c231="disabled";
						$c233="disabled";
						$c234="disabled";
					}
					else if($row[3]==3)
					{
						$c233="checked  disabled";$c231="disabled";
						$c232="disabled";
						$c234="disabled";
					}
					else
					{
						$c234="checked  disabled";$c233="disabled";
						$c232="disabled";
						$c231="disabled";
					}
					$s23="green";$d23="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=24";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c241="checked  disabled";$c242="disabled";
						$c243="disabled";
						$c244="disabled";
					}
					else if($row[3]==2)
					{
						$c242="checked  disabled";$c241="disabled";
						$c243="disabled";
						$c244="disabled";
					}
					else if($row[3]==3)
					{
						$c243="checked  disabled";$c241="disabled";
						$c242="disabled";
						$c244="disabled";
					}
					else
					{
						$c244="checked  disabled";$c242="disabled";
						$c243="disabled";
						$c241="disabled";
					}
					$s24="green";$d24="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=25";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c251="checked  disabled";$c252="disabled";
						$c253="disabled";
						$c254="disabled";
					}
					else if($row[3]==2)
					{
						$c252="checked  disabled";$c251="disabled";
						$c253="disabled";
						$c254="disabled";
					}
					else if($row[3]==3)
					{
						$c253="checked  disabled";$c254="disabled";
						$c252="disabled";
						$c251="disabled";
					}
					else
					{
						$c254="checked  disabled";$c253="disabled";
						$c252="disabled";
						$c251="disabled";
					}
					$s25="green";$d25="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=26";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c261="checked  disabled";$c262="disabled";
						$c263="disabled";
						$c264="disabled";
					}
					else if($row[3]==2)
					{
						$c262="checked  disabled";$c263="disabled";
						$c264="disabled";
						$c261="disabled";
					}
					else if($row[3]==3)
					{
						$c263="checked  disabled";$c264="disabled";
						$c262="disabled";
						$c261="disabled";
					}
					else
					{
						$c264="checked  disabled";$c263="disabled";
						$c262="disabled";
						$c261="disabled";					}
					$s26="green";$d26="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=27";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c271="checked  disabled";$c272="disabled";
						$c273="disabled";
						$c274="disabled";
					}
					else if($row[3]==2)
					{
						$c272="checked  disabled";$c271="disabled";
						$c273="disabled";
						$c274="disabled";
					}
					else if($row[3]==3)
					{
						$c273="checked  disabled";$c271="disabled";
						$c272="disabled";
						$c274="disabled";
					}
					else
					{
						$c274="checked  disabled";$c271="disabled";
						$c272="disabled";
						$c273="disabled";
					}
					$s27="green";$d27="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=28";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c281="checked  disabled";$c282="disabled";
						$c283="disabled";
						$c284="disabled";
					}
					else if($row[3]==2)
					{
						$c282="checked  disabled";$c283="disabled";
						$c284="disabled";
						$c281="disabled";
					}
					else if($row[3]==3)
					{
						$c283="checked  disabled";$c284="disabled";
						$c282="disabled";
						$c281="disabled";
					}
					else
					{
						$c284="checked  disabled";$c283="disabled";
						$c282="disabled";
						$c281="disabled";
					}
					$s28="green";$d28="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=29";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c291="checked  disabled";$c292="disabled";
						$c293="disabled";
						$c294="disabled";
					}
					else if($row[3]==2)
					{
						$c292="checked  disabled";$c293="disabled";
						$c291="disabled";
						$c294="disabled";
					}
					else if($row[3]==3)
					{
						$c293="checked  disabled";$c294="disabled";
						$c291="disabled";
						$c292="disabled";
					}
					else
					{
						$c294="checked  disabled";$c291="disabled";
						$c292="disabled";
						$c293="disabled";
					}
					$s29="green";$d29="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=30";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c301="checked  disabled";$c302="disabled";
						$c303="disabled";
						$c304="disabled";
					}
					else if($row[3]==2)
					{
						$c302="checked  disabled";$c301="disabled";
						$c303="disabled";
						$c304="disabled";
					}
					else if($row[3]==3)
					{
						$c303="checked  disabled";$c301="disabled";
						$c302="disabled";
						$c304="disabled";
					}
					else
					{
						$c304="checked  disabled";$c301="disabled";
						$c302="disabled";
						$c303="disabled";
					}
					$s30="green";$d30="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=31";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c311="checked  disabled";$c312="disabled";
						$c313="disabled";
						$c314="disabled";
					}
					else if($row[3]==2)
					{
						$c312="checked  disabled";$c311="disabled";
						$c313="disabled";
						$c314="disabled";
					}
					else if($row[3]==3)
					{
						$c313="checked  disabled";$c314="disabled";
						$c312="disabled";
						$c311="disabled";
					}
					else
					{
						$c314="checked  disabled";$c312="disabled";
						$c313="disabled";
						$c311="disabled";
					}
					$s31="green";$d31="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=32";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c321="checked  disabled";$c322="disabled";
						$c323="disabled";
						$c324="disabled";
					}
					else if($row[3]==2)
					{
						$c322="checked  disabled";$c321="disabled";
						$c323="disabled";
						$c324="disabled";
					}
					else if($row[3]==3)
					{
						$c323="checked  disabled";$c321="disabled";
						$c322="disabled";
						$c324="disabled";
					}
					else
					{
						$c324="checked  disabled";$c321="disabled";
						$c322="disabled";
						$c323="disabled";
					}
					$s32="green";$d32="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=33";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c331="checked  disabled";$c332="disabled";
						$c333="disabled";
						$c334="disabled";
					}
					else if($row[3]==2)
					{
						$c332="checked  disabled";$c331="disabled";
						$c333="disabled";
						$c334="disabled";
					}
					else if($row[3]==3)
					{
						$c333="checked  disabled";$c334="disabled";
						$c332="disabled";
						$c331="disabled";
					}
					else
					{
						$c334="checked  disabled";$c333="disabled";
						$c332="disabled";
						$c331="disabled";
					}
					$s33="green";$d33="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=34";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c341="checked  disabled";$c342="disabled";
						$c343="disabled";
						$c344="disabled";
					}
					else if($row[3]==2)
					{
						$c342="checked  disabled";$c341="disabled";
						$c343="disabled";
						$c344="disabled";
					}
					else if($row[3]==3)
					{
						$c343="checked  disabled";$c341="disabled";
						$c342="disabled";
						$c344="disabled";
					}
					else
					{
						$c344="checked  disabled";$c343="disabled";
						$c342="disabled";
						$c341="disabled";
					}
					$s34="green";$d34="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=35";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c351="checked  disabled";$c352="disabled";
						$c353="disabled";
						$c354="disabled";
					}
					else if($row[3]==2)
					{
						$c352="checked  disabled";$c351="disabled";
						$c353="disabled";
						$c354="disabled";
					}
					else if($row[3]==3)
					{
						$c353="checked  disabled";$c354="disabled";
						$c352="disabled";
						$c351="disabled";
					}
					else
					{
						$c354="checked  disabled";$c351="disabled";
						$c352="disabled";
						$c353="disabled";
					}
					$s35="green";$d35="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=36";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c361="checked  disabled";$c362="disabled";
						$c363="disabled";
						$c364="disabled";					}
					else if($row[3]==2)
					{
						$c362="checked  disabled";$c362="disabled";
						$c363="disabled";
						$c364="disabled";
					}
					else if($row[3]==3)
					{
						$c363="checked  disabled";$c361="disabled";
						$c362="disabled";
						$c364="disabled";
					}
					else
					{
						$c364="checked  disabled";$c361="disabled";
						$c362="disabled";
						$c363="disabled";
					}
					$s36="green";$d36="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=37";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c371="checked  disabled";$c372="disabled";
						$c373="disabled";
						$c374="disabled";
					}
					else if($row[3]==2)
					{
						$c372="checked  disabled";$c371="disabled";
						$c373="disabled";
						$c374="disabled";
					}
					else if($row[3]==3)
					{
						$c373="checked  disabled";$c371="disabled";
						$c372="disabled";
						$c374="disabled";
					}
					else
					{
						$c374="checked  disabled";$c373="disabled";
						$c372="disabled";
						$c371="disabled";
					}
					$s37="green";$d37="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=38";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c381="checked  disabled";$c382="disabled";
						$c383="disabled";
						$c384="disabled";
					}
					else if($row[3]==2)
					{
						$c382="checked  disabled";$c384="disabled";
						$c383="disabled";
						$c381="disabled";
					}
					else if($row[3]==3)
					{
						$c383="checked  disabled";$c384="disabled";
						$c382="disabled";
						$c381="disabled";
					}
					else
					{
						$c384="checked  disabled";$c381="disabled";
						$c382="disabled";
						$c383="disabled";
					}
					$s38="green";$d38="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=39";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c391="checked  disabled";$c394="disabled";
						$c392="disabled";
						$c393="disabled";
					}
					else if($row[3]==2)
					{
						$c392="checked  disabled";$c391="disabled";
						$c393="disabled";
						$c394="disabled";
					}
					else if($row[3]==3)
					{
						$c393="checked  disabled";$c391="disabled";
						$c392="disabled";
						$c394="disabled";
					}
					else
					{
						$c394="checked  disabled";$c39="disabled";
						$c392="disabled";
						$c393="disabled";
					}
					$s39="green";$d39="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=40";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c401="checked  disabled";$c402="disabled";
						$c403="disabled";
						$c404="disabled";
					}
					else if($row[3]==2)
					{
						$c402="checked  disabled";$c401="disabled";
						$c403="disabled";
						$c404="disabled";
					}
					else if($row[3]==3)
					{
						$c403="checked  disabled";$c401="disabled";
						$c402="disabled";
						$c404="disabled";
					}
					else
					{
						$c404="checked  disabled";$c401="disabled";
						$c402="disabled";
						$c403="disabled";
					}
					$s40="green";$d40="disabled";
				}


				/*  THE CODE OF TURNING BUTTONS GREEN WHEN USER ATTEMPTS THEM IS OVER HERE */	


		
		?>
	</head>    <!--HEAD TAG ENDS HERE-->

				<!--THE BODY TAG BEGINGS NOW-->
	<body>
			<?php
				include("database.php");
				

				$fd=fopen("prog.txt","r");
	 			$pg=fread($fd,filesize("prog.txt"));
	 			strtolower($pg);

	 			//reading COURSE NAME txt
	 			$fd1=fopen("cn.txt","r");
	 			$con=fread($fd1,filesize("cn.txt"));
	 			$odd=$con."_b";
	 			$odd=strtolower($odd);

	 				//reading COURSE CODE txt
	 			$fd2=fopen("cc.txt","r");
	 			$cc=fread($fd2,filesize("cc.txt"));
 	
	 			//reading YEAR txt
	 			$fd3=fopen("year.txt","r");
	 			$yr=fread($fd3,filesize("year.txt"));

	 				//reading TERM txt
	 			$fd4=fopen("term.txt","r");
	 			$tr=fread($fd4,filesize("term.txt"));
	 	
	 			//reading QSETS txt
	 			$fd5=fopen("qsets.txt","r");
	 			$qsets=fread($fd5,filesize("qsets.txt"));


	 			//DEPENDING ON THE COUSE NAME , FETCH THE APPROPRIATE QUESTIONS 
	 			
				if($con=="Math")
				{
					
					$rs3=mysql_query("select * FROM $pg where Reg_No=$Reg_No",$cn21) or die(mysql_error());
					mysql_data_seek($rs3,$_SESSION[q]);
				$row2=mysql_fetch_row($rs3,$_SESSION[q]);
				$_SESSION['Reg_No']=$Reg_No;
					
				}
				
				
				
			?>
					<!--STUDENT DETAILS-->
					
                    
			<?php
					
					echo "<blockquote>";
					echo"<center><h3>Student  Details</h3></center>";
					date_default_timezone_set('Asia/kolkata');
					//$_SESSION['naam']=$row2[2];
					echo "<table class=table table-striped table-bordered table-hover >";

					echo "<tr>";
						echo"<td rowspan=3><img src=photos/$row2[5] width=150 height=100 > </td>";
						echo "<th>Name&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</th><td>$row2[2]</td>";				
						echo "<th>Roll no&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</th><td>$Reg_No</td>";
						
					echo"</tr>";
					echo"<tr>";
						echo "<th>Programme &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</th><td> $pg</td>";
						echo "<th>Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</th><td>".date("d/m/Y")."</td>";
					echo"</tr>";
					

					echo"<tr>";

					echo "<th>Course Code &nbsp:</th><td> $cc</td>";
					echo "<th>Course Name &nbsp:</th><td> $con</td>";
					
					echo "</tr>";	
					echo "</table>";
					echo "</blockquote>";
			?>
					
		</div>
		<!--TIMER CODE INCLUDED HERE-->
		<div class="col-md-2 ">
				<?php
					echo"<br><br>"; 
					include("othertimer.php");
					echo "<br>";
					?><div><span class="label label-default">Note :</span>Please scroll down after zooming in. </div>
					
		</div>
	</div>
		<!--ROW NO 2 CONSISTING OF STUDENT DETAILS AND TIMER ENDS-->

		
		<!--ROW NO 3 CONSISTING OF ZOOM IN CONTROLS -->
	<div class="row">
		<div class="col-md-1 col-md-offset-7"> 
			<div id="wrapper">
			  	<div id="controls">
				    <a href="#" id="small">A</a>
				    <a href="#" id="medium" class="selected">A</a>
				    <a href="#" id="large">A</a>
				</div>
			</div>
 		</div>
  	</div>


	<!--ROW NO 4 CONSISTING OF QUESTIONS AND NAVIGATION BUTTONS -->	
		
	<div class="row">
		<div class="col-md-8">
			<?php

				include("database.php");
				$counter_id=1;
				//creating backup file of marks of student by its roll no & it only contains marks
				if(!file_exists("backup/$Reg_No.xml"))
				{
					touch("backup/$Reg_No.xml");
					$mk=fopen("backup/$Reg_No.xml","w");
					fwrite($mk,"0");
				}
			
				/*
				 $date= date('m/d/Y h:i:s a', time()); */
				$query="select * from $qsets";


				$rs=mysql_query("select * from $qsets where que_id",$cn) or die(mysql_error());


				if(!isset($_SESSION[qn]))
				{
					$_SESSION[qn]=0;
					mysql_query("delete from answer_sheet where sess_id='" . session_id() ."'",$cn) or die(mysql_error());
					$mkr=fopen("backup/$Reg_No.xml", "r");
					$markss=fread($mkr,filesize("backup/$Reg_No.xml"));
					$_SESSION[trueans]=$markss;
					
				}
				else
				{	
				if($submit=='Submit' && isset($ans)) //Coding For Submit Button After Submitting answer by Student
				{      
					//Insert query is used to inserting each and every question submitted by Student in database
						if($pg=="automobile")
					{   
						$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn55);
					}
				else if($pg=="civil_1")
				{
					$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn66);
						
				}
				else if($pg=="civil_2")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn77);
						
			}
				else if($pg=="mechanical_1")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn88);
						
			}
				else if($pg=="mechanical_2")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn99);
						
			}
				else if($pg=="plastic")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn101);
						
			}
				else if($pg=="e&tc_1")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn111);
						
			}
				else if($pg=="e&tc_2")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn121);
						
			}
				else if($pg=="electrical")
			{
				$q=$_SESSION[qn]+1;
						mysql_query("insert into `" . $Reg_No . "`(que_id,que_desc,true_ans,stud_ans) values ('$q','$_SESSION[que_desc]','$_SESSION[right_ans]','$ans')",$cn131);
						
			}
			
				
						//mysql_data_seek($rs,$_SESSION[qn]);
						$row= mysql_fetch_row($rs);	

						//mysql_query("insert into $pg(Reg_No,S_Name,Course_Name,Attempt_Que,Right_Ans,Wrong_Ans,Obt_Marks) values ('$Reg_No','$row2[2]','$con','$_SESSION[qn]','$_SESSION[trueans]', '$_SESSION[w]','$marks')",$cn33) or die(mysql_error());
						$fid1=fopen("StudPaper/$Reg_No Paper.xml", "a+");
						
						
						if($ans==$row[6])// Coding For Checking Answer is true or not
						{			
									$mkks=fopen("backup/$Reg_No.xml","r");
									$_SESSION[trueans]=fread($mkks,filesize("backup/$Reg_No.xml"));
									$_SESSION[trueans]=$_SESSION[trueans]+1;
									$mkk=fopen("backup/$Reg_No.xml","w");
									fwrite($mkk,"$_SESSION[trueans]");

						}
						
							fputs($fid1,"Que No : ".$q);
						fputs($fid1,"".$_SESSION['que_desc']);
						fputs($fid1,"\t \n Your Ans:".$ans."\n");
						//used to redirect student After submitting last question
							
						if($_SESSION[qn]==39)
						{
							$_SESSION[qn]=0;
						}
						else
						{
								$_SESSION[qn]=$_SESSION[qn]+1;
					
						}

						

				}

						//ASSIGN THE QUESTION ID ACCORDING TO THE NAVIGATION BUTTON SELECTED

						else if($submit=='Prev Question' /*&& isset($ans)*/) //Coding For Previous Question Button After Pressing It
						{      
								$_SESSION[qn]=$_SESSION[qn]-1;							

						}				

						else if($submit=='Next Question' /*&& isset($ans)*/) //Coding For Next Question Button After Pressing it
						{      
								$_SESSION[qn]=$_SESSION[qn]+1;							

						}				

							//the following Coding is used for indexing Buttons 
						else if($submit=='01')
						{
								$_SESSION[qn]=0;
						}

						else if($submit=='02')
						{
								$_SESSION[qn]=1;
						}
						else if($submit=='03')
						{
								$_SESSION[qn]=2;
						}
						else if($submit=='04')
						{
								$_SESSION[qn]=3;
						}
						else if($submit=='05')
						{
								$_SESSION[qn]=4;
						}
						else if($submit=='06')
						{
								$_SESSION[qn]=5;
						}
						else if($submit=='07')
						{
								$_SESSION[qn]=6;
						}
						else if($submit=='08')
						{
								$_SESSION[qn]=7;
						}
						else if($submit=='09')
						{
								$_SESSION[qn]=8;
						}
						else if($submit=='10')
						{
								$_SESSION[qn]=9;
						}
						else if($submit=='11')
						{
								$_SESSION[qn]=10;
						}
						else if($submit=='12')
						{
								$_SESSION[qn]=11;
						}
						else if($submit=='13')
						{
								$_SESSION[qn]=12;
						}
						else if($submit=='14')
						{
								$_SESSION[qn]=13;
						}
						else if($submit=='15')
						{
								$_SESSION[qn]=14;
						}
						else if($submit=='16')
						{
								$_SESSION[qn]=15;
						}
						else if($submit=='17')
						{
								$_SESSION[qn]=16;
						}
						else if($submit=='18')
						{
								$_SESSION[qn]=17;
						}
						else if($submit=='19')
						{
								$_SESSION[qn]=18;
						}
						else if($submit=='20')
						{
								$_SESSION[qn]=19;
						}
						else if($submit=='21')
						{
								$_SESSION[qn]=20;
						}
						else if($submit=='22')
						{
								$_SESSION[qn]=21;
						}
						else if($submit=='23')
						{
								$_SESSION[qn]=22;
						}
						else if($submit=='24')
						{
								$_SESSION[qn]=23;
						}
						else if($submit=='25')
						{
								$_SESSION[qn]=24;
						}
						else if($submit=='26')
						{
							$_SESSION[qn]=25;
						}
						else if($submit=='27')
						{
								$_SESSION[qn]=26;
						}
						else if($submit=='28')
						{
								$_SESSION[qn]=27;
						}
						else if($submit=='29')
						{
								$_SESSION[qn]=28;
						}
						else if($submit=='30')
						{
								$_SESSION[qn]=29;
						}
						else if($submit=='31')
						{
								$_SESSION[qn]=30;
						}
						else if($submit=='32')
						{
								$_SESSION[qn]=31;
						}
						else if($submit=='33')
						{
								$_SESSION[qn]=32;
						}
						else if($submit=='34')
						{
								$_SESSION[qn]=33;
						}
						else if($submit=='35')
						{
								$_SESSION[qn]=34;
						}
						else if($submit=='36')
						{
								$_SESSION[qn]=35;
						}
						else if($submit=='37')
						{
								$_SESSION[qn]=36;
						}
						else if($submit=='38')
						{
								$_SESSION[qn]=37;
						}
						else if($submit=='39')
						{
								$_SESSION[qn]=38;
						}
						else if($submit=='40')
						{
								$_SESSION[qn]=39;
						}

						else if($submit=='End Exam' /*&& isset($ans)*/) // Coding For End Exam Button after Pressing it.
						{
								
								//INSERT RESULTS INTO RESULTS TABLE ACCORDING THE BRANCH
							?>	<center><h3><a href ="result2.php">Click here for result</a></h3></center><?php
								
								$row= mysql_fetch_row($rs);	
								
								echo "</table>";
								mysql_query("Select * from  `" . $Reg_No . "` ",$conn);
								$a=mysql_affected_rows($conn);  //Used to Calculate No. of questions which are ssolved by Student
								
								$f=fopen("backup/$Reg_No.xml", "r");
								$mks=fread($f,filesize("backup/$Reg_No.xml"));
								$marks=$mks/2; //Calculating Marks	
								$_SESSION['Attempt_Que']=$a;
								error_reporting(E_ERROR | E_PARSE);
								$fid=fopen("studresult/$Reg_No.xml", "a+");

								//WRITE THE RESULT DETAILS IN AN XML FILE WHICH CAN'T BE OPENED DIRECTLY	
								fputs($fid,"Name: ".$row2[2]."\t \n");
								fputs($fid,"Roll No: ".$Reg_No."\t \n");
								fputs($fid,"Programme: ".$pg."\t \n");
								fputs($fid,"Course Code: ".$cc."\t \n");
								fputs($fid,"Course Name: ".$con."\t \n");
								fputs($fid,"Attempted Questions: ".$a."\t \n" );
								fputs($fid," Right Answers: ".$mks."\t \n");
								
								fputs($fid," Obtained Marks: ".$marks."\t \n" );
								fclose($fid);
								
								
						header("Location:result2.php");
						unset($_SESSION[qn]);
						unset($_SESSION[sid]);
						unset($_SESSION[tid]);
						unset($_SESSION[trueans]);
						exit;
						
						}	
								//$marks=$_SESSION[trueans]/2;
								$marks=$mks/2;	
								$_SESSION['Nm']=$row2[2];
								$_SESSION['Reg_No']=$Reg_No;
								$_SESSION['Prg']=$pg;
								$_SESSION['Course_Code']=$cc;
								$_SESSION['Course_Name']=$con;
								$_SESSION['Year']=$yr;
								$_SESSION['Term']=$tr;
								$_SESSION['Attempt_Que']=$a;
								$_SESSION['Right_Ans']=$mks;
								//$_SESSION['Wrong_Ans']=$_SESSION[w];
								$_SESSION['markss']=$marks;

				}

			
				//if($Reg_No%2==0)
				//{
					//mysql_query ("set character_set_client='utf8'");
					//mysql_query ("set character_set_results='utf8'");
					//mysql_query ("set collation_connection='utf8_general_ci'");
					//mysql_set_charset("UTF8");
					//$rs=mysql_query("select * from $qsets where que_id ",$cn) or die(mysql_error());
					//header('Content-type:text/html;charset=utf-8');

				//}
				//else
				//{
						$rs=mysql_query("select * from math where que_id ",$cn) or die(mysql_error());
				
				//}
				if($_SESSION[qn]>mysql_num_rows($rs)-1)
				{
				unset($_SESSION[qn]);
				echo "<h1 class=head1>Some Error  Occured</h1>";
				session_destroy();
				echo "Please <a href=FHP4.php> Start Again</a>";

				exit;
				}
				echo "<center>";
				mysql_data_seek($rs,$_SESSION[qn]);

						$row=mysql_fetch_row($rs);
						
					
						//if(startTimer())
						
						
						echo"<div id=m style=font-size:0px>";
						echo "<center>";	
						
						echo "<form id=myfm method=get action=math.php>";
						/*echo"<div id=$counter_id>";*/
						
						echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
						$n=$_SESSION[qn]+1;
						$_SESSION[qns]=$n;
						//DISPLAY THE QUESTIONS AND ITS OPTIONS 
						echo "<tr><td><span class=style2 p id=1><h4>Que ".$n .": <img id=q src=question_set/$n/$row[1]></h4></span>";
						?>
						<tr><td class="style8"><h5><input type="radio" name="ans" value="1" <?php if($n==1){echo $c11;}if($n==2){echo $c21;}elseif($n==3){echo $c31;}elseif($n==4){echo $c41;}elseif($n==5){echo $c51;}elseif($n==6){echo $c61;}elseif($n==7){echo $c71;}elseif($n==8){echo $c81;}elseif($n==9){echo $c91;}elseif($n==10){echo $c101;}
						elseif($n==11){echo $c111;}elseif($n==12){echo $c121;}elseif($n==13){echo $c131;}elseif($n==14){echo $c141;}elseif($n==15){echo $c151;}elseif($n==16){echo $c161;}elseif($n==17){echo $c171;}elseif($n==18){echo $c181;}elseif($n==19){echo $c191;}elseif($n==20){echo $c201;}elseif($n==21){echo $c211;}elseif($n==22){echo $c221;}
						elseif($n==23){echo $c231;}elseif($n==24){echo $c241;}elseif($n==25){echo $c251;}elseif($n==26){echo $c261;}elseif($n==27){echo $c271;}elseif($n==28){echo $c281;}elseif($n==29){echo $c291;}elseif($n==30){echo $c301;}elseif($n==31){echo $c311;}elseif($n==32){echo $c321;}elseif($n==33){echo $c331;}elseif($n==34){echo $c341;}
						elseif($n==35){echo $c351;}elseif($n==36){echo $c361;}elseif($n==37){echo $c371;}elseif($n==38){echo $c381;}elseif($n==39){echo $c391;}elseif($n==40){echo $c401;}  ?>><?php echo"<img id=c1 src=question_set/$n/$row[2]></h5>";?>
						<tr><td class="style8"><h5><input type="radio" name="ans" value="2" <?php if($n==1){echo $c12;}if($n==2){echo $c22;}elseif($n==3){echo $c32;}elseif($n==4){echo $c42;}elseif($n==5){echo $c52;}elseif($n==6){echo $c62;}elseif($n==7){echo $c72;}elseif($n==8){echo $c82;}elseif($n==9){echo $c92;}elseif($n==10){echo $c102;}
						elseif($n==11){echo $c112;}elseif($n==12){echo $c122;}elseif($n==13){echo $c132;}elseif($n==14){echo $c142;}elseif($n==15){echo $c152;}elseif($n==16){echo $c162;}elseif($n==17){echo $c172;}elseif($n==18){echo $c182;}elseif($n==19){echo $c192;}elseif($n==20){echo $c202;}elseif($n==21){echo $c212;}elseif($n==22){echo $c222;}
						elseif($n==23){echo $c232;}elseif($n==24){echo $c242;}elseif($n==25){echo $c252;}elseif($n==26){echo $c262;}elseif($n==27){echo $c272;}elseif($n==28){echo $c282;}elseif($n==29){echo $c292;}elseif($n==30){echo $c302;}elseif($n==31){echo $c312;}elseif($n==32){echo $c322;}elseif($n==33){echo $c332;}elseif($n==34){echo $c342;}
						elseif($n==35){echo $c352;}elseif($n==36){echo $c362;}elseif($n==37){echo $c372;}elseif($n==38){echo $c382;}elseif($n==39){echo $c392;}elseif($n==40){echo $c402;}  ?>><?php echo "<img id=c2 src=question_set/$n/$row[3]></h5>";?>
						<tr><td class="style8"><h5><input type="radio" name="ans" value="3" <?php if($n==1){echo $c13;}if($n==2){echo $c23;}elseif($n==3){echo $c33;}elseif($n==4){echo $c43;}elseif($n==5){echo $c53;}elseif($n==6){echo $c63;}elseif($n==7){echo $c73;}elseif($n==8){echo $c83;}elseif($n==9){echo $c93;}elseif($n==10){echo $c103;}
						elseif($n==11){echo $c113;}elseif($n==12){echo $c123;}elseif($n==13){echo $c133;}elseif($n==14){echo $c143;}elseif($n==15){echo $c153;}elseif($n==16){echo $c163;}elseif($n==17){echo $c173;}elseif($n==18){echo $c183;}elseif($n==19){echo $c193;}elseif($n==20){echo $c203;}elseif($n==21){echo $c213;}elseif($n==22){echo $c223;}
						elseif($n==23){echo $c233;}elseif($n==24){echo $c243;}elseif($n==25){echo $c253;}elseif($n==26){echo $c263;}elseif($n==27){echo $c273;}elseif($n==28){echo $c283;}elseif($n==29){echo $c293;}elseif($n==30){echo $c303;}elseif($n==31){echo $c313;}elseif($n==32){echo $c323;}elseif($n==33){echo $c333;}elseif($n==34){echo $c343;}
						elseif($n==35){echo $c353;}elseif($n==36){echo $c363;}elseif($n==37){echo $c373;}elseif($n==38){echo $c383;}elseif($n==39){echo $c393;}elseif($n==40){echo $c403;}  ?>><?php echo "<img id=c3 src=question_set/$n/$row[4]></h5>";?>
						<tr><td class="style8"><h5><input type="radio" name="ans" value="4" <?php if($n==1){echo $c14;}if($n==2){echo $c24;}elseif($n==3){echo $c34;}elseif($n==4){echo $c44;}elseif($n==5){echo $c54;}elseif($n==6){echo $c64;}elseif($n==7){echo $c74;}elseif($n==8){echo $c84;}elseif($n==9){echo $c94;}elseif($n==10){echo $c104;}
						elseif($n==11){echo $c114;}elseif($n==12){echo $c124;}elseif($n==13){echo $c134;}elseif($n==14){echo $c144;}elseif($n==15){echo $c154;}elseif($n==16){echo $c164;}elseif($n==17){echo $c174;}elseif($n==18){echo $c184;}elseif($n==19){echo $c194;}elseif($n==20){echo $c204;}elseif($n==21){echo $c214;}elseif($n==22){echo $c224;}
						elseif($n==23){echo $c234;}elseif($n==24){echo $c244;}elseif($n==25){echo $c254;}elseif($n==26){echo $c264;}elseif($n==27){echo $c274;}elseif($n==28){echo $c284;}elseif($n==29){echo $c294;}elseif($n==30){echo $c304;}elseif($n==31){echo $c314;}elseif($n==32){echo $c324;}elseif($n==33){echo $c334;}elseif($n==34){echo $c344;}
						elseif($n==35){echo $c354;}elseif($n==36){echo $c364;}elseif($n==37){echo $c374;}elseif($n==38){echo $c384;}elseif($n==39){echo $c394;}elseif($n==40){echo $c404;}  ?>> <?php echo "<img id=c4 src=question_set/$n/$row[5]></h5>";?>
						<tr>
						<?php
						
						$_SESSION['que_desc']=$row[1];
						$_SESSION['right_ans']=$row[6];
						echo "</table></table>";
						echo "</blockquote>";
						echo "</center>";
						if($_SESSION[qn]>0)
						{
							?>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<div class="row"><div class="col-md-1 "> <!--Coding For Displaying Previous Button -->
							<button class="btn  btn-primary btn-lg" type="submit"name="submit" value="Prev Question" onclick="myFunction()">Previous</button></div><?php	
						}?><div class="col-md-1 col-md-offset-2"> <!--Coding For Displaying Submit Button -->
							<button class="btn  btn-primary btn-lg" type="submit"name="submit" value="Submit" onclick="myFunction()" <?php if($n==1){echo $d1;}if($n==2){echo $d2;}if($n==3){echo $d3;}if($n==4){echo $d4;}if($n==5){echo $d5;}if($n==6){echo $d6;}if($n==7){echo $d7;}if($n==8){echo $d8;}if($n==9){echo $d9;}if($n==10){echo $d10;}
							if($n==11){echo $d11;}if($n==12){echo $d12;}if($n==13){echo $d13;}if($n==14){echo $d14;}if($n==15){echo $d15;}if($n==16){echo $d16;}if($n==17){echo $d17;}if($n==18){echo $d18;}if($n==19){echo $d19;}if($n==20){echo $d20;}if($n==21){echo $d21;}if($n==22){echo $d22;}if($n==23){echo $d23;}if($n==24){echo $d24;}if($n==25){echo $d25;}if($n==26){echo $d26;}
							if($n==27){echo $d27;}if($n==28){echo $d28;}if($n==29){echo $d29;}if($n==30){echo $d30;}if($n==31){echo $d31;}if($n==32){echo $d32;}if($n==33){echo $d33;}if($n==34){echo $d34;}if($n==35){echo $d35;}if($n==36){echo $d36;}if($n==37){echo $d37;}if($n==38){echo $d38;}if($n==39){echo $d39;}if($n==40){echo $d40;} ?>>Submit</button></div><?php echo"</tr>";	
					
						if($_SESSION[qn]<mysql_num_rows($rs)-1)
						{
							?><div class="col-md-1 col-md-offset-2"><!--Coding For Displaying Next Button -->
							<button class="btn  btn-primary btn-lg" type="submit"name="submit" value="Next Question" onclick="myFunction()">Next</button></div><?php echo"</tr>";
						}
						//else
						echo "<br><br><br><br>";
						?><div class="col-md-1 col-md-offset-3"><!--Coding For Displaying End Exam Button -->
						<button class="btn  btn-danger btn-lg" type="submit"name="submit" value="End Exam" onclick="myFunction()">End Exam</button></div></div><?php
						
						echo "</center>";
						/*   CODE TO SET THE NAVIGATION BUTTONS GREEN WHEN A STUDENT HAS ATTEMPTED THE QUESTIONS
			     THIS HELPS THE STUDENTS UNDERSTAND WHICH QUESTION HE/SHE HAS ATTEMPTED             */
			$sql="select * from `" . $Reg_No . "` where que_id=1";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c11="checked  disabled";
						$c12="disabled";
						$c13="disabled";
						$c14="disabled";
						
					}
					else if($row[3]==2)
					{
						$c12="checked  disabled";
						$c11="disabled";
						$c13="disabled";
						$c14="disabled";
					}
					else if($row[3]==3)
					{
						$c13="checked  disabled";$c12="disabled";
						$c11="disabled";
						$c14="disabled";

					}
					else
					{
						$c14="checked  disabled";$c12="disabled";
						$c13="disabled";
						$c11="disabled";
					}
					$s1="green";
					$d1="disabled";
				}

							$sql="select * from `" . $Reg_No . "` where que_id=2";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c21="checked  disabled";
						$c22="disabled";
						$c23="disabled";
						$c24="disabled";
					}
					else if($row[3]==2)
					{
						$c22="checked  disabled";$c21="disabled";
						$c23="disabled";
						$c24="disabled";
					}
					else if($row[3]==3)
					{
						$c23="checked  disabled";$c21="disabled";
						$c22="disabled";
						$c24="disabled";
					}
					else
					{
						$c24="checked  disabled";$c22="disabled";
						$c23="disabled";
						$c21="disabled";
					}
					$s2="green";$d2="disabled";
				}
		
			$sql="select * from `" . $Reg_No . "` where que_id=3";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c31="checked  disabled";$c32="disabled";
						$c33="disabled";
						$c34="disabled";
					}
					else if($row[3]==2)
					{
						$c32="checked  disabled";$c31="disabled";
						$c33="disabled";
						$c34="disabled";
					}
					else if($row[3]==3)
					{
						$c33="checked  disabled";$c32="disabled";
						$c31="disabled";
						$c34="disabled";
					}
					else
					{
						$c34="checked  disabled";$c31="disabled";
						$c32="disabled";
						$c33="disabled";
					}
					$s3="green";$d3="disabled";
				}
		
							$sql="select * from `" . $Reg_No . "` where que_id=4";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c41="checked  disabled";$c42="disabled";
						$c43="disabled";
						$c44="disabled";
					}
					else if($row[3]==2)
					{
						$c42="checked  disabled";$c41="disabled";
						$c43="disabled";
						$c44="disabled";
					}
					else if($row[3]==3)
					{
						$c43="checked  disabled";$c41="disabled";
						$c42="disabled";
						$c44="disabled";
					}
					else
					{
						$c44="checked  disabled";$c41="disabled";
						$c43="disabled";
						$c42="disabled";
					}
					$s4="green";$d4="disabled";
				}

					$sql="select * from `" . $Reg_No . "` where que_id=5";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c51="checked  disabled";$c52="disabled";
						$c53="disabled";
						$c54="disabled";
					}
					else if($row[3]==2)
					{
						$c52="checked  disabled";$c51="disabled";
						$c53="disabled";
						$c54="disabled";
					}
					else if($row[3]==3)
					{
						$c53="checked  disabled";$c52="disabled";
						$c51="disabled";
						$c54="disabled";
					}
					else
					{
						$c54="checked  disabled";$c52="disabled";
						$c53="disabled";
						$c51="disabled";
					}
					$s5="green";$d5="disabled";
				}

							$sql="select * from `" . $Reg_No . "` where que_id=6";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
	
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c61="checked  disabled";$c62="disabled";
						$c63="disabled";
						$c64="disabled";
					}
					else if($row[3]==2)
					{
						$c62="checked  disabled";$c61="disabled";
						$c63="disabled";
						$c64="disabled";
					}
					else if($row[3]==3)
					{
						$c63="checked  disabled";$c62="disabled";
						$c61="disabled";
						$c64="disabled";
					}
					else
					{
						$c64="checked  disabled";$c62="disabled";
						$c61="disabled";
						$c63="disabled";
					}
					$s6="green";$d6="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=7";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c71="checked  disabled";$c72="disabled";
						$c73="disabled";
						$c74="disabled";
					}
					else if($row[3]==2)
					{
						$c72="checked  disabled";$c71="disabled";
						$c73="disabled";
						$c74="disabled";
					}
					else if($row[3]==3)
					{
						$c73="checked  disabled";$c72="disabled";
						$c71="disabled";
						$c74="disabled";
					}
					else
					{
						$c74="checked  disabled";$c72="disabled";
						$c73="disabled";
						$c71="disabled";
					}
					$s7="green";$d7="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=8";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c81="checked  disabled";$c82="disabled";
						$c83="disabled";
						$c84="disabled";
					}
					else if($row[3]==2)
					{
						$c82="checked  disabled";$c81="disabled";
						$c83="disabled";
						$c84="disabled";
					}
					else if($row[3]==3)
					{
						$c83="checked  disabled";$c81="disabled";
						$c82="disabled";
						$c84="disabled";
					}
					else
					{
						$c84="checked  disabled";$c82="disabled";
						$c83="disabled";
						$c81="disabled";
					}
					$s8="green";$d8="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=9";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c91="checked  disabled";$c92="disabled";
						$c93="disabled";
						$c94="disabled";
					}
					else if($row[3]==2)
					{
						$c92="checked  disabled";$c91="disabled";
						$c93="disabled";
						$c94="disabled";
					}
					else if($row[3]==3)
					{
						$c93="checked  disabled";$c91="disabled";
						$c92="disabled";
						$c94="disabled";
					}
					else
					{
						$c94="checked  disabled";$c92="disabled";
						$c93="disabled";
						$c91="disabled";
					}
					$s9="green";$d9="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=10";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c101="checked  disabled";$c102="disabled";
						$c103="disabled";
						$c104="disabled";
					}
					else if($row[3]==2)
					{
						$c102="checked  disabled";$c101="disabled";
						$c103="disabled";
						$c104="disabled";
					}
					else if($row[3]==3)
					{
						$c103="checked  disabled";$c104="disabled";
						$c102="disabled";
						$c101="disabled";
					}
					else
					{
						$c104="checked  disabled";$c103="disabled";
						$c102="disabled";
						$c101="disabled";
					}
					$s10="green";$d10="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=11";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
//echo $affect=mysql_affected_rows();
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c111="checked  disabled";$c112="disabled";
						$c113="disabled";
						$c114="disabled";					}
					else if($row[3]==2)
					{
						$c112="checked  disabled";$c111="disabled";
						$c113="disabled";
						$c114="disabled";
					}
					else if($row[3]==3)
					{
						$c113="checked  disabled";$c111="disabled";
						$c112="disabled";
						$c114="disabled";
					}
					else
					{
						$c114="checked  disabled";$c113="disabled";
						$c112="disabled";
						$c111="disabled";
					}
					$s11="green";$d11="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=12";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
	
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c121="checked  disabled";$c124="disabled";
						$c122="disabled";
						$c123="disabled";
					}
					else if($row[3]==2)
					{
						$c122="checked  disabled";$c124="disabled";
						$c123="disabled";
						$c121="disabled";
					}
					else if($row[3]==3)
					{
						$c123="checked  disabled";$c124="disabled";
						$c122="disabled";
						$c121="disabled";
					}
					else
					{
						$c124="checked  disabled";$c123="disabled";
						$c122="disabled";
						$c121="disabled";
					}
					$s12="green";$d12="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=13";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c131="checked  disabled";$c132="disabled";
						$c133="disabled";
						$c134="disabled";
					}
					else if($row[3]==2)
					{
						$c132="checked  disabled";$c131="disabled";
						$c133="disabled";
						$c134="disabled";
					}
					else if($row[3]==3)
					{
						$c133="checked  disabled";$c132="disabled";
						$c131="disabled";
						$c134="disabled";					}
					else
					{
						$c134="checked  disabled";$c131="disabled";
						$c133="disabled";
						$c132="disabled";
					}
					$s13="green";$d13="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=14";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c141="checked  disabled";$c142="disabled";
						$c143="disabled";
						$c144="disabled";
					}
					else if($row[3]==2)
					{
						$c142="checked  disabled";$c144="disabled";
						$c143="disabled";
						$c141="disabled";
					}
					else if($row[3]==3)
					{
						$c143="checked  disabled";$c144="disabled";
						$c142="disabled";
						$c141="disabled";
					}
					else
					{
						$c144="checked  disabled";$c143="disabled";
						$c142="disabled";
						$c141="disabled";
					}
					$s14="green";$d14="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=15";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c151="checked  disabled";$c152="disabled";
						$c153="disabled";
						$c154="disabled";
					}
					else if($row[3]==2)
					{
						$c152="checked  disabled";$c153="disabled";
						$c154="disabled";
						$c151="disabled";
					}
					else if($row[3]==3)
					{
						$c153="checked  disabled";$c154="disabled";
						$c152="disabled";
						$c151="disabled";
					}
					else
					{
						$c154="checked  disabled";$c153="disabled";
						$c152="disabled";
						$c151="disabled";
					}
					$s15="green";$d15="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=16";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
		
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c161="checked  disabled";$c162="disabled";
						$c163="disabled";
						$c164="disabled";
					}
					else if($row[3]==2)
					{
						$c162="checked  disabled";$c164="disabled";
						$c163="disabled";
						$c161="disabled";
					}
					else if($row[3]==3)
					{
						$c163="checked  disabled";$c164="disabled";
						$c162="disabled";
						$c161="disabled";
					}
					else
					{
						$c164="checked  disabled";$c163="disabled";
						$c162="disabled";
						$c161="disabled";
					}
					$s16="green";$d16="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=17";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c171="checked  disabled";$c172="disabled";
						$c173="disabled";
						$c174="disabled";
					}
					else if($row[3]==2)
					{
						$c172="checked  disabled";$c171="disabled";
						$c173="disabled";
						$c174="disabled";
					}
					else if($row[3]==3)
					{
						$c173="checked  disabled";$c174="disabled";
						$c172="disabled";
						$c171="disabled";
					}
					else
					{
						$c174="checked  disabled";$c173="disabled";
						$c172="disabled";
						$c171="disabled";					}
					$s17="green";$d17="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=18";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c181="checked  disabled";$c182="disabled";
						$c183="disabled";
						$c184="disabled";
					}
					else if($row[3]==2)
					{
						$c182="checked  disabled";$c181="disabled";
						$c183="disabled";
						$c184="disabled";
					}
					else if($row[3]==3)
					{
						$c183="checked  disabled";$c181="disabled";
						$c182="disabled";
						$c183="disabled";
					}
					else
					{
						$c184="checked  disabled";$c181="disabled";
						$c182="disabled";
						$c183="disabled";
					}
					$s18="green";$d18="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=19";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c191="checked  disabled";$c192="disabled";
						$c193="disabled";
						$c194="disabled";
					}
					else if($row[3]==2)
					{
						$c192="checked  disabled";$c191="disabled";
						$c193="disabled";
						$c194="disabled";
					}
					else if($row[3]==3)
					{
						$c193="checked  disabled";$c191="disabled";
						$c192="disabled";
						$c194="disabled";
					}
					else
					{
						$c194="checked  disabled";$c193="disabled";
						$c192="disabled";
						$c191="disabled";
					}
					$s19="green";$d19="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=20";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c201="checked  disabled";$c202="disabled";
						$c203="disabled";
						$c204="disabled";
					}
					else if($row[3]==2)
					{
						$c202="checked  disabled";$c201="disabled";
						$c203="disabled";
						$c204="disabled";
					}
					else if($row[3]==3)
					{
						$c203="checked  disabled";$c204="disabled";
						$c202="disabled";
						$c201="disabled";
					}
					else
					{
						$c204="checked  disabled";$c203="disabled";
						$c202="disabled";
						$c201="disabled";					}
					$s20="green";$d20="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=21";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c211="checked  disabled";$c212="disabled";
						$c213="disabled";
						$c214="disabled";
					}
					else if($row[3]==2)
					{
						$c212="checked  disabled";$c211="disabled";
						$c213="disabled";
						$c214="disabled";
					}
					else if($row[3]==3)
					{
						$c213="checked  disabled";$c211="disabled";
						$c212="disabled";
						$c214="disabled";
					}
					else
					{
						$c214="checked  disabled";$c211="disabled";
						$c212="disabled";
						$c213="disabled";
					}
					$s21="green";$d21="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=22";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c221="checked  disabled";$c222="disabled";
						$c223="disabled";
						$c224="disabled";
					}
					else if($row[3]==2)
					{
						$c222="checked  disabled";$c223="disabled";
						$c224="disabled";
						$c221="disabled";
					}
					else if($row[3]==3)
					{
						$c223="checked  disabled";$c224="disabled";
						$c222="disabled";
						$c221="disabled";
					}
					else
					{
						$c224="checked  disabled";$c223="disabled";
						$c222="disabled";
						$c221="disabled";
					}
					$s22="green";$d22="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=23";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c231="checked  disabled";$c232="disabled";
						$c233="disabled";
						$c234="disabled";
					}
					else if($row[3]==2)
					{
						$c232="checked  disabled";$c231="disabled";
						$c233="disabled";
						$c234="disabled";
					}
					else if($row[3]==3)
					{
						$c233="checked  disabled";$c231="disabled";
						$c232="disabled";
						$c234="disabled";
					}
					else
					{
						$c234="checked  disabled";$c233="disabled";
						$c232="disabled";
						$c231="disabled";
					}
					$s23="green";$d23="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=24";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c241="checked  disabled";$c242="disabled";
						$c243="disabled";
						$c244="disabled";
					}
					else if($row[3]==2)
					{
						$c242="checked  disabled";$c241="disabled";
						$c243="disabled";
						$c244="disabled";
					}
					else if($row[3]==3)
					{
						$c243="checked  disabled";$c241="disabled";
						$c242="disabled";
						$c244="disabled";
					}
					else
					{
						$c244="checked  disabled";$c242="disabled";
						$c243="disabled";
						$c241="disabled";
					}
					$s24="green";$d24="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=25";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c251="checked  disabled";$c252="disabled";
						$c253="disabled";
						$c254="disabled";
					}
					else if($row[3]==2)
					{
						$c252="checked  disabled";$c251="disabled";
						$c253="disabled";
						$c254="disabled";
					}
					else if($row[3]==3)
					{
						$c253="checked  disabled";$c254="disabled";
						$c252="disabled";
						$c251="disabled";
					}
					else
					{
						$c254="checked  disabled";$c253="disabled";
						$c252="disabled";
						$c251="disabled";
					}
					$s25="green";$d25="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=26";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c261="checked  disabled";$c262="disabled";
						$c263="disabled";
						$c264="disabled";
					}
					else if($row[3]==2)
					{
						$c262="checked  disabled";$c263="disabled";
						$c264="disabled";
						$c261="disabled";
					}
					else if($row[3]==3)
					{
						$c263="checked  disabled";$c264="disabled";
						$c262="disabled";
						$c261="disabled";
					}
					else
					{
						$c264="checked  disabled";$c263="disabled";
						$c262="disabled";
						$c261="disabled";					}
					$s26="green";$d26="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=27";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c271="checked  disabled";$c272="disabled";
						$c273="disabled";
						$c274="disabled";
					}
					else if($row[3]==2)
					{
						$c272="checked  disabled";$c271="disabled";
						$c273="disabled";
						$c274="disabled";
					}
					else if($row[3]==3)
					{
						$c273="checked  disabled";$c271="disabled";
						$c272="disabled";
						$c274="disabled";
					}
					else
					{
						$c274="checked  disabled";$c271="disabled";
						$c272="disabled";
						$c273="disabled";
					}
					$s27="green";$d27="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=28";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c281="checked  disabled";$c282="disabled";
						$c283="disabled";
						$c284="disabled";
					}
					else if($row[3]==2)
					{
						$c282="checked  disabled";$c283="disabled";
						$c284="disabled";
						$c281="disabled";
					}
					else if($row[3]==3)
					{
						$c283="checked  disabled";$c284="disabled";
						$c282="disabled";
						$c281="disabled";
					}
					else
					{
						$c284="checked  disabled";$c283="disabled";
						$c282="disabled";
						$c281="disabled";
					}
					$s28="green";$d28="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=29";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c291="checked  disabled";$c292="disabled";
						$c293="disabled";
						$c294="disabled";
					}
					else if($row[3]==2)
					{
						$c292="checked  disabled";$c293="disabled";
						$c291="disabled";
						$c294="disabled";
					}
					else if($row[3]==3)
					{
						$c293="checked  disabled";$c294="disabled";
						$c291="disabled";
						$c292="disabled";
					}
					else
					{
						$c294="checked  disabled";$c291="disabled";
						$c292="disabled";
						$c293="disabled";
					}
					$s29="green";$d29="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=30";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c301="checked  disabled";$c302="disabled";
						$c303="disabled";
						$c304="disabled";
					}
					else if($row[3]==2)
					{
						$c302="checked  disabled";$c301="disabled";
						$c303="disabled";
						$c304="disabled";
					}
					else if($row[3]==3)
					{
						$c303="checked  disabled";$c301="disabled";
						$c302="disabled";
						$c304="disabled";
					}
					else
					{
						$c304="checked  disabled";$c301="disabled";
						$c302="disabled";
						$c303="disabled";
					}
					$s30="green";$d30="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=31";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c311="checked  disabled";$c312="disabled";
						$c313="disabled";
						$c314="disabled";
					}
					else if($row[3]==2)
					{
						$c312="checked  disabled";$c311="disabled";
						$c313="disabled";
						$c314="disabled";
					}
					else if($row[3]==3)
					{
						$c313="checked  disabled";$c314="disabled";
						$c312="disabled";
						$c311="disabled";
					}
					else
					{
						$c314="checked  disabled";$c312="disabled";
						$c313="disabled";
						$c311="disabled";
					}
					$s31="green";$d31="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=32";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c321="checked  disabled";$c322="disabled";
						$c323="disabled";
						$c324="disabled";
					}
					else if($row[3]==2)
					{
						$c322="checked  disabled";$c321="disabled";
						$c323="disabled";
						$c324="disabled";
					}
					else if($row[3]==3)
					{
						$c323="checked  disabled";$c321="disabled";
						$c322="disabled";
						$c324="disabled";
					}
					else
					{
						$c324="checked  disabled";$c321="disabled";
						$c322="disabled";
						$c323="disabled";
					}
					$s32="green";$d32="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=33";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c331="checked  disabled";$c332="disabled";
						$c333="disabled";
						$c334="disabled";
					}
					else if($row[3]==2)
					{
						$c332="checked  disabled";$c331="disabled";
						$c333="disabled";
						$c334="disabled";
					}
					else if($row[3]==3)
					{
						$c333="checked  disabled";$c334="disabled";
						$c332="disabled";
						$c331="disabled";
					}
					else
					{
						$c334="checked  disabled";$c333="disabled";
						$c332="disabled";
						$c331="disabled";
					}
					$s33="green";$d33="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=34";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);

				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c341="checked  disabled";$c342="disabled";
						$c343="disabled";
						$c344="disabled";
					}
					else if($row[3]==2)
					{
						$c342="checked  disabled";$c341="disabled";
						$c343="disabled";
						$c344="disabled";
					}
					else if($row[3]==3)
					{
						$c343="checked  disabled";$c341="disabled";
						$c342="disabled";
						$c344="disabled";
					}
					else
					{
						$c344="checked  disabled";$c343="disabled";
						$c342="disabled";
						$c341="disabled";
					}
					$s34="green";$d34="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=35";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c351="checked  disabled";$c352="disabled";
						$c353="disabled";
						$c354="disabled";
					}
					else if($row[3]==2)
					{
						$c352="checked  disabled";$c351="disabled";
						$c353="disabled";
						$c354="disabled";
					}
					else if($row[3]==3)
					{
						$c353="checked  disabled";$c354="disabled";
						$c352="disabled";
						$c351="disabled";
					}
					else
					{
						$c354="checked  disabled";$c351="disabled";
						$c352="disabled";
						$c353="disabled";
					}
					$s35="green";$d35="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=36";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c361="checked  disabled";$c362="disabled";
						$c363="disabled";
						$c364="disabled";					}
					else if($row[3]==2)
					{
						$c362="checked  disabled";$c362="disabled";
						$c363="disabled";
						$c364="disabled";
					}
					else if($row[3]==3)
					{
						$c363="checked  disabled";$c361="disabled";
						$c362="disabled";
						$c364="disabled";
					}
					else
					{
						$c364="checked  disabled";$c361="disabled";
						$c362="disabled";
						$c363="disabled";
					}
					$s36="green";$d36="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=37";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{if($row[3]==1)
					{
						$c371="checked  disabled";$c372="disabled";
						$c373="disabled";
						$c374="disabled";
					}
					else if($row[3]==2)
					{
						$c372="checked  disabled";$c371="disabled";
						$c373="disabled";
						$c374="disabled";
					}
					else if($row[3]==3)
					{
						$c373="checked  disabled";$c371="disabled";
						$c372="disabled";
						$c374="disabled";
					}
					else
					{
						$c374="checked  disabled";$c373="disabled";
						$c372="disabled";
						$c371="disabled";
					}
					$s37="green";$d37="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=38";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c381="checked  disabled";$c382="disabled";
						$c383="disabled";
						$c384="disabled";
					}
					else if($row[3]==2)
					{
						$c382="checked  disabled";$c384="disabled";
						$c383="disabled";
						$c381="disabled";
					}
					else if($row[3]==3)
					{
						$c383="checked  disabled";$c384="disabled";
						$c382="disabled";
						$c381="disabled";
					}
					else
					{
						$c384="checked  disabled";$c381="disabled";
						$c382="disabled";
						$c383="disabled";
					}
					$s38="green";$d38="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=39";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c391="checked  disabled";$c394="disabled";
						$c392="disabled";
						$c393="disabled";
					}
					else if($row[3]==2)
					{
						$c392="checked  disabled";$c391="disabled";
						$c393="disabled";
						$c394="disabled";
					}
					else if($row[3]==3)
					{
						$c393="checked  disabled";$c391="disabled";
						$c392="disabled";
						$c394="disabled";
					}
					else
					{
						$c394="checked  disabled";$c39="disabled";
						$c392="disabled";
						$c393="disabled";
					}
					$s39="green";$d39="disabled";
				}
							$sql="select * from `" . $Reg_No . "` where que_id=40";
			$rm=mysql_query($sql,$conn);
			
			$row=mysql_fetch_row($rm);
				if(!empty($row[3]))
				{
					if($row[3]==1)
					{
						$c401="checked  disabled";$c402="disabled";
						$c403="disabled";
						$c404="disabled";
					}
					else if($row[3]==2)
					{
						$c402="checked  disabled";$c401="disabled";
						$c403="disabled";
						$c404="disabled";
					}
					else if($row[3]==3)
					{
						$c403="checked  disabled";$c401="disabled";
						$c402="disabled";
						$c404="disabled";
					}
					else
					{
						$c404="checked  disabled";$c401="disabled";
						$c402="disabled";
						$c403="disabled";
					}
					$s40="green";$d40="disabled";
				}


				/*  THE CODE OF TURNING BUTTONS GREEN WHEN USER ATTEMPTS THEM IS OVER HERE */	


						
									if($_SESSION[qns]==1){ $s1="Red"; }if($_SESSION[qns]==2){ $s2="Red"; }if($_SESSION[qns]==3){ $s3="Red"; }if($_SESSION[qns]==4){ $s4="Red"; }if($_SESSION[qns]==5){ $s5="Red"; }if($_SESSION[qns]==6){ $s6="Red"; }if($_SESSION[qns]==7){ $s7="Red"; }if($_SESSION[qns]==8){ $s8="Red"; }if($_SESSION[qns]==9){ $s9="Red"; }if($_SESSION[qns]==10){ $s10="Red"; }
					if($_SESSION[qns]==11){ $s11="Red"; }if($_SESSION[qns]==12){ $s12="Red"; }if($_SESSION[qns]==13){ $s13="Red"; }if($_SESSION[qns]==14){ $s14="Red"; }if($_SESSION[qns]==15){ $s15="Red"; }if($_SESSION[qns]==16){ $s16="Red"; }if($_SESSION[qns]==17){ $s17="Red"; }if($_SESSION[qns]==18){ $s18="Red"; }if($_SESSION[qns]==19){ $s19="Red"; }if($_SESSION[qns]==20){ $s20="Red"; }
					if($_SESSION[qns]==21){ $s21="Red"; }if($_SESSION[qns]==22){ $s22="Red"; }if($_SESSION[qns]==23){ $s23="Red"; }if($_SESSION[qns]==24){ $s24="Red"; }if($_SESSION[qns]==25){ $s25="Red"; }if($_SESSION[qns]==26){ $s26="Red"; }if($_SESSION[qns]==27){ $s27="Red"; }if($_SESSION[qns]==28){ $s28="Red"; }if($_SESSION[qns]==29){ $s29="Red"; }if($_SESSION[qns]==30){ $s30="Red"; }
					if($_SESSION[qns]==31){ $s31="Red"; }if($_SESSION[qns]==32){ $s32="Red"; }if($_SESSION[qns]==33){ $s33="Red"; }if($_SESSION[qns]==34){ $s34="Red"; }if($_SESSION[qns]==35){ $s35="Red"; }if($_SESSION[qns]==36){ $s36="Red"; }if($_SESSION[qns]==37){ $s37="Red"; }if($_SESSION[qns]==38){ $s38="Red"; }if($_SESSION[qns]==39){ $s39="Red"; }if($_SESSION[qns]==40){ $s40="Red"; }
  
					   				
			?>
		</div>			
	
		<!--THE NAVIGATION BUTTONS i.e Indexing buttons-->
		<div class= "col-md-4 "><br><br><div id="xyzs">
				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit" id="s1" style="background-color:<?php echo $s1; ?>" value="01">01</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit" id="s2" style="background-color:<?php echo $s2; ?>" value="02">02</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit" id="s3" style="background-color:<?php echo $s3; ?>" value="03">03</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit" id="s4" style="background-color:<?php echo $s4; ?>" value="04">04</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit" id="s5" style="background-color:<?php echo $s5; ?>" value="05">05</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit" id="s6" style="background-color:<?php echo $s6; ?>" value="06">06</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit" id="s7" style="background-color:<?php echo $s7; ?>" value="07">07</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit" id="s8" style="background-color:<?php echo $s8; ?>"value="08">08</button>
					</div>
					<div class=col-md-1>
						<button class="btn btn-default" type="submit" name="submit" id="s9" style="background-color:<?php echo $s9; ?>"value="09">09</button>
					</div>
					<div class=col-md-1>
						<button class="btn btn-default" type="submit" name="submit"id="s10" style="background-color:<?php echo $s10; ?>" value="10">10</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit"id="s11" style="background-color:<?php echo $s11; ?>" value="11">11</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s12" style="background-color:<?php echo $s12; ?>" value="12">12</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s13" style="background-color:<?php echo $s13; ?>" value="13">13</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s14" style="background-color:<?php echo $s14; ?>" value="14">14</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s15" style="background-color:<?php echo $s15; ?>" value="15">15</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit"id="s16" style="background-color:<?php echo $s16; ?>" value="16">16</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s17" style="background-color:<?php echo $s17; ?>" value="17">17</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s18" style="background-color:<?php echo $s18; ?>" value="18">18</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s19" style="background-color:<?php echo $s19; ?>" value="19">19</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s20" style="background-color:<?php echo $s20; ?>" value="20">20</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit"id="s21" style="background-color:<?php echo $s21; ?>" value="21">21</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s22" style="background-color:<?php echo $s22; ?>" value="22">22</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s23" style="background-color:<?php echo $s23; ?>" value="23">23</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s24" style="background-color:<?php echo $s24; ?>" value="24">24</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s25" style="background-color:<?php echo $s25; ?>" value="25">25</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit"id="s26" style="background-color:<?php echo $s26; ?>" value="26">26</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s27" style="background-color:<?php echo $s27; ?>" value="27">27</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s28" style="background-color:<?php echo $s28; ?>" value="28">28</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s29" style="background-color:<?php echo $s29; ?>" value="29">29</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s30" style="background-color:<?php echo $s30; ?>" value="30">30</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit"id="s31" style="background-color:<?php echo $s31; ?>" value="31">31</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s32" style="background-color:<?php echo $s32; ?>" value="32">32</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s33" style="background-color:<?php echo $s33; ?>" value="33">33</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s34" style="background-color:<?php echo $s34; ?>" value="34">34</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s35" style="background-color:<?php echo $s35; ?>" value="35">35</button>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-md-offset-3">
						<button class="btn btn-default" type="submit" name="submit"id="s36" style="background-color:<?php echo $s36; ?>" value="36">36</button>
					</div>	
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s37" style="background-color:<?php echo $s37; ?>" value="37">37</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s38" style="background-color:<?php echo $s38; ?>" value="38">38</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s39" style="background-color:<?php echo $s39; ?>" value="39">39</button>
					</div>
					<div class="col-md-1">
						<button class="btn btn-default" type="submit" name="submit"id="s40" style="background-color:<?php echo $s40; ?>" value="40">40</button>
					</div>

				</div>	

				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<button class="btn btn-danger btn-lg"></button>Current question
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<button class="btn btn-success btn-lg"></button>Attempted question
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<button class="btn btn-default btn-lg"></button>Non attempted question
					</div>
				</div>
				</div><!-- DIV TAG OF BORDER CONTAINER CHANGES-->

				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<br><a href="allquestions.php"target="_blank"><h3>Click here to view<br> all the questions</h3></a>
					</div>
				</form>
				

				<br><br><br><br><br><br>
		</div>	<!--DIV TAG OF NAVIGATION BUTTON CHANGS-->
	</div><!--DIV TAG OF THE ROW OF QUESTIONS AND NAVIGATION BUTTON ENDS -->
				
			<!--BOOTSTRAP FILES IMPORTED-->	
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="js/bootstrap.min.js"></script>

					<!--FOOTER HEREEEEEE-->
			<footer class="row">		
				 <?php
		          	include("footer.php");
		           ?>
		    </footer>
	</body>
</html>