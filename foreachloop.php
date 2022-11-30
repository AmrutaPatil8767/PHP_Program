<?php
$Student = array(
"Name"=> "Amruta",
"Email"=>"amruta234@gmail.com",
"Age"=> 21,
"Gender"=>"Female"
);
foreach($Student as $key=> $element)
{
	echo $key." ".$element;
	echo "<br>";
}
?>