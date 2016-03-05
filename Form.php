<?php
session_start();
$handle = fopen('Student Info.txt','a');
$DName=$_POST['DName'];
$userid=$_SESSION["userid"];
$name = $_POST['name'];
$gender = $_POST['gender'];
fwrite($handle,$DName."\n".$userid."Pending\n".$name."\n".$gender."\n");
if($_POST['submit']){
			$check = $_POST['check'];
			foreach($check as $ch){
				$save = $ch.",";
				fwrite($handle, $save);
			}
		
		}
$phone=$_POST['phone'];
fwrite($handle,"\n".$phone."\n"."\n");
fclose($handle);
echo '<h1 style="text-align:center;font-weight:bold;">You have Submitted Your Form Successfully.</h1>';			
echo '<ul style="text-align:center;"><form name="logout" method="POST" action="First.html"><input type="submit" value="LogOut"/></form></ul>';
?>