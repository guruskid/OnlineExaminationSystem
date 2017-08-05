<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["user_name"]) {

?>
Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
<tr>
<hr>
<div id="topnav">
      <ul>
        <li class="active"><a href="user_dashboard.php">Home</a></li>
        
        <li><a href="trackit1.php?page=sport.php">sports</a></li>
        <li><a href="business.php">Business</a></li>
        <li><a href="politics.php">Politics</a></li>
        <li><a href="entertain.php">Entertainment</a></li>
        <li><a href="trackit2.php?page=tech.php">Technology</a></li>
        
        
        
      </ul>
    </div>
    <hr>
</tr>

</body></html>