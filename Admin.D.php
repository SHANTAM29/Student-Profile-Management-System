<?php 
	if(isset($_POST['NameD'])){
		//echo "Hello Shantam!!!";
		$handle=fopen('Department.txt','a');
		$x=$_POST['NameD'];
		$y=$_POST['IdD'];
		$z=$_POST['PasswordD'];
		fwrite($handle,$x."\n".$y."\n".$z."\n");
		fwrite($handle,"\n");
		fclose($handle);
	}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">						<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
		<title>Admin Department</title>
	</head>
	<body style="text-align:center;">
	<form method="POST" action="Admin D.php" name="FormD" style="text-align:center;font-weight:bold;">
		Department Name:<input name="NameD" type="text" pattern="[A-Za-z' ']{1,}" title="Only Letters And Spaces Allowed" required/><br /><br />
		Department ID:<input name="IdD" type="text" pattern="[A-Za-z0-9]{1,}" title="Only Letters And Numbers Allowed" required/><br /><br />
		Department Password:<input name="PasswordD" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/><br /><br />
		<input type="submit" value="Submit" /><br /><br />
	</form>
	<form name="Go Back" method="POST" action="Admin Page.php"><input type="submit" value="Go Back"/></form>
	</body>
</html>



<!-- http://www.w3schools.com/tags/att_input_pattern.asp -->