<?php
	$x=$_POST['adminN'];
	$y=$_POST['passwordN'];
	#echo $x." ".$y;
	$handle=fopen('Admin.txt','w');
	fwrite($handle,$x." ".$y);
	#fwrite($handle,$y);
	fclose($handle);
	echo "<h1>The Username And The Password has been modified.</h1>";
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">						<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
	</head>
	<body style="text-align:center;">
		<form name="Go Back" method="POST" action="Admin Page.php"><input type="submit" value="Go Back"/></form>
	</body>
</html>
