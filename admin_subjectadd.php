<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<?php
session_start();
require("database.php");
 

?>

    <!--BOOTSTRAP FILES THAT WE HAVE INCLUDED-->  
    <link href="../quiz.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/respond.js"></script>
    <!--BOOTSTRAP INCLUDED FILES ARE ONLY THE ABOVE 2 LINKS-->
<header class="row">
          <img src="images/logoo.jpg"height="15%"width="17%"align="left">
          <img src="images/Logo2.jpg"height="15%"width="53%"align="left"class="visible-lg">
          <img src="images/Logo3.jpg"height="15%"width="30%"align="left">
        </header>
    <title>Add Subject</title>


    <?php
    
    extract($_POST);

include("head.php");
    echo "<BR>";
    if (!isset($_SESSION[login]))
    {
    	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
    	echo "<a href=Homepage.php><h3 align=center>Click Here for Login</h3></a>";
    	exit();
    }
    echo "<center><u><h2>Add Subject </h2></u></center>";

    echo "<table width=100%>";
    echo "<tr><td align=center></table>";
    if($submit=='submit' || strlen($subname)>0 )
    {
    $rs=mysql_query("select * from subjects where sub_name='$subname'");
    if (mysql_num_rows($rs)>0)
    {
    	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
    	exit;
    }
    mysql_query("insert into subjects(sub_name) values ('$subname')",$cn) or die(mysql_error());
    echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
    $submit="";
    }
    ?>
    <SCRIPT LANGUAGE="JavaScript">
    function check() {
    mt=document.form1.subname.value;
    if (mt.length<1) {
    alert("Please Enter Subject Name");
    document.form1.subname.focus();
    return false;
    }
    return true;
    }
    </script>


    <form name="form1" method="post" onSubmit="return check();">

      <!--TABLE BEGINS HERE-->
      <table class="table table-hover"width="41%"  border="0" align="center">
        <tr>
          <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
          <td width="2%" height="5">  
          <td width="53%" height="32">
            <input name="subname" type="text" id="subname">
        
        <tr>
          <td height="26"></td>
          <td>&nbsp;</td>
          <td><button class="btn btn-default btn-lg btn-info"type="submit" name="submit" value="Add" >Add</button></td>
        </tr>
      </table>
    </form>
    <p>&nbsp; </p>

      <!--javascript-->

      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

 <?php
           include("footer.php");
           ?>