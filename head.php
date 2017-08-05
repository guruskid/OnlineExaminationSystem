<table width="100%">
  <tr>
    <td aling=right>
	<?php
	if(isset($_SESSION[login]))
	{
	 echo "<div align=\"right\"><strong><a href=\"admin_login.php\">Admin Home</a>|<a href=\"signout2.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>