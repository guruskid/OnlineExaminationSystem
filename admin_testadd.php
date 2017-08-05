<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

 <?php
      session_start();
       
      if (!isset($_SESSION[login]))
      {
        echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
        echo "<a href=adminlog.php><h3 align=center>Click Here for Login</h3></a>";
        exit();
      }
      ?>
    <!--BOOTSTRAP FILES THAT WE HAVE INCLUDED-->  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/respond.js"></script>
    <!--BOOTSTRAP INCLUDED FILES ARE ONLY THE ABOVE 2 LINKS-->
<header class="row">
          <img src="images/Logo1.jpg"height="15%"width="17%"align="left">
          <img src="images/Logo2.jpg"height="15%"width="53%"align="left"class="visible-lg">
          <img src="images/Logo3.jpg"height="15%"width="30%"align="left">
        </header>
    <title>Add Test</title>

     

      <?php
      require("database.php");

include("head.php");


      echo "<br><center><u><h2>Add Test</h2></u></center>";
      if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
      {
      extract($_POST);
      mysql_query("insert into stud_test(test_name,test_id,total_quest) values ('$testname','$testid','$totquest')",$cn) or die(mysql_error());
      echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
      unset($_POST);
      }
      ?>
      <SCRIPT LANGUAGE="JavaScript">
      function check() {
      mt=document.form1.testname.value;
      if (mt.length<1) {
      alert("Please Enter Test Name");
      document.form1.testname.focus();
      return false;
      }
      tt=document.form1.totque.value;
      if(tt.length<1) {
      alert("Please Enter Total Question");
      document.form1.totque.value;
      return false;
      }
      return true;
      }
      </script>
      <form name="form1" method="post" onSubmit="return check();">

      <!--TABLE BEGINS HERE-->
        <table class="table table-hover" width="58%"  border="0" align="center">
          <tr>
            <td width="49%" height="32"><div align="left"><strong>Enter Test Name </strong></div></td>
            <td width="3%" height="5">  
            <td width="48%" height="32"><select name="subid">

      <?php
      $rs=mysql_query("Select * from subjects order by  sub_name",$cn);
      	  while($row=mysql_fetch_array($rs))
      {
      if($row[0]==$subid)
      {
      echo "<option value='$row[0]' selected>$row[1]</option>";
      }
      else
      {
      echo "<option value='$row[0]'>$row[1]</option>";
      }
      }
      ?>
            </select>
              
          <tr>
              <td height="26"><div align="left"><strong> Enter Test Id </strong></div></td>
              <td>&nbsp;</td>
      	  <td><input name="testname" type="text" id="testname"></td>
          </tr>
          <tr>
            <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
            <td>&nbsp;</td>
            <td><input name="totque" type="text" id="totque"></td>
          </tr>
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

