<html>
	<head>
		<title>End Exam</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
    	<script src="js/respond.js"></script>
    </head>

    <body>

<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>
<div class="alert alert-danger" role="alert"><h4>Exam has been stopped by Admin.</h4></div>
<?php
session_unset();
session_destroy();


		// Store Programme in file
			$fd=fopen("prog.txt", "w+");
		fwrite($fd,"");
		fclose($fd);

		// Store Course name in file
		$fd1=fopen("cn.txt", "w+");
		fwrite($fd1,"");
		fclose($fd1);

		// Store Programme in file
		$fd2=fopen("cc.txt", "w+");
		fwrite($fd2,"");
		fclose($fd2);

		// Store Programme in file
		$fd3=fopen("year.txt", "w+");
		fwrite($fd3,"");
		fclose($fd3);

		// Store Programme in file
		$fd4=fopen("term.txt", "w+");
		fwrite($fd4,"");
		fclose($fd4);

		// Store Programme in file
		$fd5=fopen("qsets.txt", "w+");
		fwrite($fd5,"");
		fclose($fd5);
	

?>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>