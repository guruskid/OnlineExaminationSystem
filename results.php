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
//if(empty($_SESSION['Programme']) || empty($_SESSION['Year']) || empty($_SESSION['Term']) || empty($_SESSION['Course_Code']) || empty($_SESSION['Course_Name']) || empty($_SESSION['Question_Sets'])  )
//{
//	header("location:admin_login.php");
//}
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
	
	<table name="result">
	<tr><center><b><i><font size=5 color="Purple">Results</font></i></b></center></tr>
	<tr>
	<th>Roll No</th>
	<th>Student Name</th>
	<th>Programme</th>
	<th>Course Code</th>
	<th>Course Name</th>
	<th>Correct Answers</th>
	<th>Obtained Marks</th>
	</tr>

	<?php
	include("database.php");

	//$rs=mysql_query($q,$cn33) or die(mysql_error());
error_reporting(E_ERROR | E_PARSE);
	$log3=fopen("prog.txt", "r");
	$rl=fread($log3, filesize("prog.txt"));
	$log4=fopen("cn.txt", "r");
	$cnn=fread($log4, filesize("cn.txt"));	
	$rs=mysql_query("select Reg_No,S_Name,Programme,Course_Code,Course_Name,Right_Ans,Obt_Marks from $rl where Course_Name='$cnn'",$cn33)or die(mysql_error());
		
	//for($i=1;$i<=10;$i++)
	//{
//mysql_data_seek($rs);
	 while($row=mysql_fetch_row($rs))
	 {
	 	
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "</tr>";
	}

	/*$result = mysql_query('SHOW TABLES',$cn33) or die('cannot show tables');
	$result1=mysql_query('select * from $_SESSION[Programme] ',$cn33) or die('cannot show Rows ');
while($tableName = mysql_fetch_row($result)) {

	$table = $tableName[0];
	
	echo '<h3>',$table,'</h3>';
	$result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
	if(mysql_num_rows($result2)) {
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Roll No</th><th>Student Name</th><th>Course Name</th><th>Attempted Que</th><th>Right Ans</th><th>Wrong Ans</th><th>Obtained Marks</th></tr>';
		while($row2 = mysql_fetch_row($result1)) {
			echo '<tr>';
			foreach($row2 as $Reg_No=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br />';
	}
}*/
	?>
	</table>
