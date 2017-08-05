<table width="100%">
  <tr>
    <td aling=right>
	<?php
	if(isset($_SESSION))
	{
	 echo "<div align=\"right\"><strong><a href=\"FHP4.php\">Student login</a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>