<?php 
	if(isset($_POST['IdS'])){
		//echo "Hello Shantam!!!";
		$handle=fopen('Student.txt','a');
		//$x=$_POST['NameS'];
		$y=$_POST['IdS'];
		$z=$_POST['PasswordS'];
		fwrite($handle,$y."\n".$z."\n");
		fwrite($handle,"\n");
		fclose($handle);
	}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">						<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
		<title>Admin Student</title>
	</head>
	<body style="text-align:center;">
	<form method="POST" action="Admin S.php" name="FormS" style="text-align:center;font-weight:bold;">
		<!--Student Name:<input name="NameS" type="text" pattern="[A-Za-z' ']{1,}" title="Only Letters And Spaces Allowed" required/><br /><br />-->
		Student ID:<input name="IdS" type="text" pattern="[A-Za-z0-9]{1,}" title="Only Letters And Numbers Allowed" required/><br /><br />
		Student Password:<input name="PasswordS" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/><br /><br />
		<input type="submit" value="Submit" /><br /><br />
	</form>
	<form name="Go Back" method="POST" action="Admin Page.php"><input type="submit" value="Go Back"/></form>
	</body>
</html>



<!-- http://www.w3schools.com/tags/att_input_pattern.asp -->