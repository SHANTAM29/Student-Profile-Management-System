<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">		<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
		<title>Checking Page</title>
	</head>
	<body>
<?php
//session_start();
$x=$_POST['username'];
$y=$_POST['password'];
$z=$x." ".$y;
$readin=file('Admin.txt');						#This statement creates a 2D array readin.
	if(!strcmp($z,$readin[0]))						#This part is for checking the username and password of the admin
		header('Location: Admin Page.php');
	else
	{
		$x=$x."\n";
		$y=$y."\n";
		$arr=array();
		$handle=fopen('Department.txt','r');
		$count=1;
		$z=0;
		while(!feof($handle)){
		$readin=fgets($handle);
		if($count%4===1)
			$arr[$count]=$readin;
		if($count%4===2&&$readin===$x)					#This part is for checking the username and password of the Department
		{
			$readin=fgets($handle);
			if($readin===$y)
			{
				//header('Location: Department Page.php');
				//echo"Its An important move";
				session_start();
				include('Department Page.php');
				$z=1;
			}
			break;
		}
		$count++;
		}
		fclose($handle);
		if($z===0)
		{
			$handle=fopen('Student.txt','r');
			$count=1;
			$z=0;
			while(!feof($handle))
			{
				$readin=fgets($handle);
				if($count%3===1&&$readin===$x)
				{
					$readin=fgets($handle);
					if($readin===$y)						#This part is for checking the username and password of the Student
					{
						$handle2=fopen('Student Info.txt','r');
						$count2=1;
						$z2=0;
						while(!feof($handle2))
						{
							$readin2=fgets($handle2);
							if($count2%8==2&&$readin2===$x)
							{
								$count2++;
								$readin2=fgets($handle2);
								if($readin2==="Pending\n")
								{
									echo '<h1 style="text-align:center;font-weight:bold;">You Have Successfully Logged In And You Have Already Filled Form But Admin approval is pending.</h1>';
								}
								else
								{
									echo '<h1 style="text-align:center;font-weight:bold;">Your form has been approved by the Admin.</h1>';
								}
								echo '<ul style="text-align:center;"><form name="logout" method="POST" action="First.html"><input type="submit" value="Go Back To Login Page"/></form></ul>';
								$z2=1;
							}
							$count2++;
						}
						fclose($handle2);
						if($z2===0)
						{
							include('Student Page.php');
						}
						$z=1;
					}
					break;
				}
				$count++;
			}
			fclose($handle);
			if($z===0)							#This will be displayed if the username and password entered by the user is incorrect
			{
				echo '<h1 style="text-align:center;font-weight:bold;">Username or password is incorrect.</h1>';			
				echo '<ul style="text-align:center;"><form name="logout" method="POST" action="First.html"><input type="submit" value="Go Back To Login Page"/></form></ul>';
			}
		}
	}
?>
	</body>
</html>