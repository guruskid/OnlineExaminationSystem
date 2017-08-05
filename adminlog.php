<?php
session_start()
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Administrative Area</title>

    <link rel="stylesheet" href="css/style2.css" media="screen" type="text/css" />

    <script src="js/modernizr.js"></script>

</head>

<body>

  <h1>Admin Login</h1>

<div class="stand">
  <div class="outer-screen">
    <div class="inner-screen">
      <div class="form" >
      <form method="POST" action="admin_login.php">
        <input type="text" class="zocial-dribbble" name="Username" placeholder="Username" />
        <input type="Password" class="zocial-dribbble" name="Password" placeholder="Password" />
         <input type="submit" name="submit" value="Login" />
         </form>
      </div> 
    </div> 
  </div> 
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>


