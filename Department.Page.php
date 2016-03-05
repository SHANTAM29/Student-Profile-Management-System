<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">						<!-- meta tag means data about data that is data about the HTML document used By search engine to Know about our document-->
		<title>Department Page</title>
	</head>
	<body>
		<?php 
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		if(isset($_POST['approve']))    
		{
			echo '<h1 style="text-align:center;font-weight:bold;">The Selected options have been approved and  not selected option are still pending!!!!!</h1>'; 
			echo '<form name="logout" method="POST" action="First.html" style="text-align:center;"><input type="submit" value="Logout"/></form>';
			if($_SESSION['counting']>0)
			{	
				$check = $_POST['select'];
				foreach($check as $ch)
				{
					$save = $ch."\n";
					$handle3=fopen('Student Info.txt','r+');
					$line2=1;
					while(!feof($handle3))
					{
						$readin=fgets($handle3);
						if($line2%8===2&&$readin===$save)
						{
							fwrite($handle3,'Approve');
						}
						$line2++;
					}
					fclose($handle3);
				}
			}
		} 
		else
		{	
			echo '<form name="approveform" method="POST" action="Department Page.php">';
			echo '<h1 style="text-align:center;font-weight:bold;">Welcome!!!!!! You Are In '.$arr[$count-1].'Department Being The Head You Can Approve Or Reject the info filled by the students.</h1>';
			$handle2=fopen('Student Info.txt','r');
			$line=1;
			$qwerty=0;
			$_SESSION['counting']=0;
			echo '<h1 style="text-align:center;font-weight:bold;">The Student\'s Id who has filled their form But their status is pending :<br /></h1>';
			echo '<table style="text-align:center;">
				<td><b>STUDENT ID:</b></td>
			';
																$newarray=array();
																$newcount=0;
			while(!feof($handle2))
			{
				$readin=fgets($handle2);
				if($line%8===1&&$readin===$arr[$count-1])
				{
					$qwerty++;
					$userid=fgets($handle2);
																$newarray[$newcount]=$userid;
																$newcount++;
					$readin=fgets($handle2);
					if($readin==="Pending\n")
					{
						$_SESSION['counting']++;
						echo '<td><input type="checkbox" name="select[]" value='.$userid.' />'.$userid.'</td>';
					}
					$line++;$line++;
				}
				$line++;
			}
			fclose($handle2);
			echo '</table>';
			echo '<ul style="text-align:center;font-size:25px;list-style-type:none;font-family:Georgia;"><li><input type="submit" value="Approve" name="approve" /></li>
			</ul></form>';
			echo '<h1 style="text-align:center;text-decoration:underline;">REPORT</h1>';
			echo '<h1 style="text-align:center;font-weight:bold;">The total no. of students who have filled their form in your department are '.$qwerty.'</h1>';
			if($qwerty){
			echo '<h1 style="text-align:center;font-weight:bold;">The UserId Of all the students of your Department is given below.</h1>';
																foreach($newarray as $p => $p_value){
																	echo '<h1 style="text-align:center;font-weight:bold;">'.$p_value.'</h1>';
																}}
			echo '<h1 style="text-align:center;font-weight:bold;">The total no. of Pending Requests Are '.$_SESSION['counting'].'</h1>';
			
			echo '<ul style="text-align:center;font-size:25px;list-style-type:none;font-family:Georgia;">
			<li><form name="logout" method="POST" action="First.html"><input type="submit" value="Logout"/></form></li>
			</ul> ';
		} ?>
	</body>
</html>