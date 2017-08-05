
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/respond.js"></script>

        <!-- Include JS File Here -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="select_jquery.js"></script>
		 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

		 <style>
		 	b{font-size: 20px;}

		 	select{width:27%;box-sizing:border-box;}
		 </style>

		 <script language="javascript">
		 /*var e = document.getElementById('cccc');
		var strUser = e.options[e.selectedIndex].value;
		//document.getElementById("adway").innerHTML=String(strUser);
		if(strUser=="1105")
		{
			​document.getElementById('ccnn').innerHTML= 'Physics';​​​​​​​​​​
		}
		else if(strUser=="1106")
		{
			document.getElementById('ccnn').innerHTML = 'Chemistry';​​​​​​​​​​
		}*/

			function test()
    {   
        if (document.getElementById('cccc').value=='1105')
        {
            document.getElementById("ccnn").selectedIndex = 1;
        }
        else if(document.getElementById('cccc').value=='1106')
        {
            document.getElementById("ccnn").selectedIndex = 2;
        }
        else if(document.getElementById('cccc').value=='1107')
        {
            document.getElementById("ccnn").selectedIndex = 3;
        }
    }

		</script>
	</head>

	<body>
	<?php
	error_reporting(E_ALL & ~E_NOTICE);
	echo "<center>";
	echo "<form method=POST action=a.php>";
		echo "<b>Programme &nbsp&nbsp&nbsp&nbsp&nbsp :</b>&nbsp&nbsp&nbsp&nbsp&nbsp;<select name=Programme required>";
			echo "<option value=></option>";
			echo "<option value=civil_1>Civil Engg-First Shift</option>";
			echo "<option value=civil_2>Civil Engg-2nd Shift</option>";
			echo "<option value=mechanical_1>Mechanical Engg-First Shift</option>";
			echo "<option value=mechanical_2>Mechanical Engg-Second Shift</option>";
			echo "<option value=e&tc_1>ENTC-First Shift</option>";
			echo "<option value=e&tc_2>ENTC-Second Shift</option>";
			echo "<option value=automobile>Automobile Engg</option>";
			echo "<option value=Computer_Tech>Computer Technology</option>";
			echo "<option value=Information_Tech>Infornmation Technology</option>";
			echo "<option value=Electrical_Engg>Electrical Engg</option>";
			echo "<option value=plastic>Plastic Engg</option>";

		echo "</select>";
		echo "<br>";

		echo "<b>Year
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp 
		: </b>&nbsp&nbsp&nbsp&nbsp;<select name=Year required>";
			echo "<option value=></option>";
			echo "<option value=First>First Year</option>";
			echo "<option value=Second>Second Year</option>";
			echo "<option value=Third>Third Year</option>";
		echo "</select>";
		echo "<br>";

		echo "<b>Term&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp :</b>&nbsp&nbsp&nbsp&nbsp&nbsp;<select name=Term required>";
			echo "<option value=></option>";
			echo "<option value=odd>Odd Term</option>";
			echo "<option value=even>Even Term</option>";
		echo "</select>";
		echo "<br>";
		?>

		 <b>Course Code  &nbsp&nbsp&nbsp:</b>&nbsp&nbsp&nbsp&nbsp&nbsp;<select name="Course_Code" id="cccc" onchange="test();" required>
		 	<option value=></option>
		 	<option value="1105">1105</option>
		 	<option value="1106">1106</option>
		 	<option value="1107">1107</option>

		 </select>
		 <br>
		 <b>Course Name&nbsp&nbsp&nbsp:</b>&nbsp&nbsp&nbsp&nbsp&nbsp;<select name="Course_Name" id="ccnn" required>
		 	<option value=></option>
		 	<option value="Physics">Physics</option>
		 	<option value="Chemistry">Chemistry</option>
		 	<option value="Math">Math</option>

		 </select>
		 <br>
		
		<?php
		 echo "<b>Question Sets&nbsp&nbsp:</b>&nbsp&nbsp&nbsp&nbsp&nbsp;<select name=Question_Sets required>";
		 	echo "<option value=></option>";
		 	echo "<option value=physics_a>physics_a</option>";
		 	echo "<option value=physics_b>physics_b</option>";
		 	echo "<option value=physics_c>physics_c</option>";
		 	echo "<option value=physics_d>physics_d</option>";
		 	echo "<option value=physics_e>physics_e</option>";
		 	echo "<option value=physics_f>physics_f</option>";
		 	echo "<option value=physics_g>physics_g</option>";
		 	echo "<option value=chemistry_a>chemistry_a</option>";
		 	echo "<option value=chemistry_b>chemistry_b</option>";
		 	echo "<option value=chemistry_c>chemistry_c</option>";
		 	echo "<option value=chemistry_d>chemistry_d</option>";
		 	echo "<option value=chemistry_e>chemistry_e</option>";
		 		echo "<option value=math>math</option>";

		 echo "</select>";
		 echo "<br>";

		 echo "</center>";
		//echo "<input type=submit name=submit2 value=submit>";
		 ?>
		

		 	<br>
		 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		 	<center><button class="btn btn-success btn-lg" type="submit"name="submit">Start</button></center>
		 <?php
		echo "</form>";
		
		 	$_SESSION['Programme']=$_POST['Programme'];
		 	$_SESSION['Year']=$_POST['Year'];
		 	$_SESSION['Term']=$_POST['Term'];
		 	$_SESSION['Course_Code']=$_POST['Course_Code'];
		 	$_SESSION['Course_Name']=$_POST['Course_Name'];
		 	$_SESSION['Question_Sets']=$_POST['Question_Sets'];

		?>

		<!--javascript-->

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>