<?php
$Marks = (int)ReadLine("Enter Marks :");
$Marks = 66;
if ($Marks<35)
	echo"Fail";
else if ($Marks<50)
	echo"Pass";
else if ($Marks<60)
	echo"Second Class";
else if ($Marks<75)
	echo"Frist Class";
else 
	echo"Distinction";
?>