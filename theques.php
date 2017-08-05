<?php
session_start();
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
?>
<html>
	<head>
	<title>
	</title>
	</head>

	<body>
		
			<?php
				//echo"Hi";

				$counter_id=1;
		 
	
		/*date_default_timezone_set('Asia/kolkata');
		 $date= date('m/d/Y h:i:s a', time()); */
		$query="select * from questions";


		$rs=mysql_query("select * from questions where test_id=$tid",$cn) or die(mysql_error());


		if(!isset($_SESSION[qn]))
		{
			$_SESSION[qn]=0;
			mysql_query("delete from answer_sheet where sess_id='" . session_id() ."'") or die(mysql_error());
			$_SESSION[trueans]=0;
			
		}
		else
		{	
				if($submit=='Next Question' && isset($ans))
				{
						mysql_data_seek($rs,$_SESSION[qn]);
						$row= mysql_fetch_row($rs);	
						mysql_query("insert into answer_sheet(sess_id, test_id, que_desc, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
						/*if($ans==$row[7])
						{
									$_SESSION[trueans]=$_SESSION[trueans]+1;
						}
						$_SESSION[qn]=$_SESSION[qn]+1;*/
				}
				else if($submit=='Get Result' && isset($ans))
				{
						mysql_data_seek($rs,$_SESSION[qn]);
						$row= mysql_fetch_row($rs);	
						mysql_query("insert into answer_sheet(sess_id, test_id, que_desc, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
						if($ans==$row[7])
						{
									$_SESSION[trueans]=$_SESSION[trueans]+1;
						}
						echo "<h1 class=head1><center> Result</center></h1>";
						$_SESSION[qn]=$_SESSION[qn]+1;
						echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
						echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
						$w=$_SESSION[qn]-$_SESSION[trueans];
						echo "<tr class=fans><td>Wrong Answer<td> ". $w;
						echo "</table>";

						mysql_query("select * from stud_login",$cn) or die(mysql_error());
						mysql_query("insert into stud_result(Roll_No,test_id,test_date,score) values('$Roll_No',$tid,$date,$_SESSION[trueans])") or die(mysql_error());
						echo "<h1><a href=signout.php><center>Finish</center></a></h1>";
						echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
						unset($_SESSION[qn]);
						unset($_SESSION[sid]);
						unset($_SESSION[tid]);
						unset($_SESSION[trueans]);
						exit;
				}
		}
		$rs=mysql_query("select * from questions  where test_id=$tid Order By Rand() Limit 0,40",$cn) or die(mysql_error());

		if($_SESSION[qn]>mysql_num_rows($rs)-1)
		{
		unset($_SESSION[qn]);
		echo "<h1 class=head1>Some Error  Occured</h1>";
		session_destroy();
		echo "Please <a href=FHP4.php> Start Again</a>";

		exit;
		}

?>
<?php

			echo "<center>";
			mysql_data_seek($rs,$_SESSION[qn]);

				while($row=mysql_fetch_row($rs))
				{
			
				//if(startTimer())
				
				echo"<div id=$counter_id>";
				echo "<center>";	
				
				echo "<form id=myfm method=get action=quiz.php>";
				
				echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
				$n=$_SESSION[qn]+1;
				
				echo "<tr><td><span class=style2 p id=1><h4>Que ".$n .": $row[2]</h4></span>";
				echo "<tr><td class=style8><h5><input type=radio name=ans value=1>$row[3]</h5>";
				echo "<tr><td class=style8><h5><input type=radio name=ans value=2>$row[4]</h5>";
				echo "<tr><td class=style8><h5><input type=radio name=ans value=3>$row[5]</h5>";
				echo "<tr><td class=style8><h5><input type=radio name=ans value=4>$row[6]</h5>";
				if($_SESSION[qn]<mysql_num_rows($rs)-1)
				echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
				else
				echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
				echo "</table></table>";
				echo "</center>";
			
			
				$counter_id++;
				//}
				echo "</center>";

			}
				?>
			
	</body>
</html>