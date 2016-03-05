<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">						<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
		<title>Admin Page</title>
	</head>
	<body >
	<h1 style="text-align:center;font-weight:bold;">Welcome Admin</h1>
	<ul style="text-align:center;font-size:25px;list-style-type:none;font-family:Georgia;"> 
		<li>Change the Admin Username Or Password.<form name="changeadmin" method="POST" action="ChangeA.html"><input type="submit" value="Click Here"/></form></li>
		<li>Enter new student's data.<form name="student" method="POST" action="Admin S.php"><input type="submit" value="Click Here"/></form></li>
		<li>Enter new department.<form name="department" method="POST" action="Admin D.php"><input type="submit" value="Click Here"/></form></li>
	<!--	<li>Approve or Reject information.<form name="approve" method="POST" action=""><input type="submit" value="Click Here"/></form></li>	-->
		<br />
		<form name="logout" method="POST" action="First.html"><input type="submit" value="Logout"/></form>
	</ul>
	</body>
</html>
