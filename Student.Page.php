<?php
	session_start();
	$_SESSION["userid"]=$x;
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">						<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
		<title></title>
	</head>
	<body>
		<?php 
		//echo "Welcome ".$x;
		echo '<h1 style="text-align:center;font-weight:bold;">Welcome User '.$x.'</h1>';
		?>
		<h1 style="text-align:center;text-decoration:underline;">DATA-FORM</h1>
	<form name="myform" action="Form.php" method="POST">
		<table style="border:none;width:150%;">
			<tr>
				<td><b>DEPARTMENT NAME:<b></td>
				<td><input type="radio" name="DName" value="Computer Science" checked/>Computer Science
				<input type="radio" name="DName" value="Electrical" />Electrical
				<input type="radio" name="DName" value="Electronics" />Electronics
				<input type="radio" name="DName" value="Mechanical" />Mechanical
				</td>
			<tr>
				<td><b>NAME:</b></td>
				<td><input type="text" name="name" pattern="[A-Za-z' ']{1,}" title="Letters Only With one space between First name and last name AND CASE INSENSITIVE" required/></td>
			</tr>
			<tr>
				<td><b>GENDER:</b></td>
				<td><input type="radio" name="gender" value="male" checked/>Male
				<input type="radio" name="gender" value="female" />Female
				<input type="radio" name="gender" value="other" />Other
				</td>
			</tr>
			<tr>
				<td><b>HOBBIES:</b></td>
				<td>
				<input type="checkbox" name="check[]" value="Reading" />Reading
				<input type="checkbox" name="check[]" value="Playing" />Playing
				<input type="checkbox" name="check[]" value="Debating" />Debating
				<input type="checkbox" name="check[]" value="Table Tennis" />Table Tennis
				<input type="checkbox" name="check[]" value="Cycling" />Cycling
				</td>
			</tr>
			<tr>
				<td><b>PHONE NO.:</b>
				</td>
				<td><input type="text" name="phone" pattern="[0-9]{10}" title="Exactly 10 Digits Number required WITHOUT the COUNTRY CODE AND 0 should NOT be ADDED" required/>
				</td>
			</tr>
		</table>
		<p style="text-align:center;"><input type="submit" name="submit" value="Submit"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" /></p>
	</form>
		<ul style="text-align:center;font-size:25px;list-style-type:none;font-family:Georgia;">
			<li><form name="logout" method="POST" action="First.html"><input type="submit" value="Logout"/></form></li>
		</ul>
	</body>
</html>