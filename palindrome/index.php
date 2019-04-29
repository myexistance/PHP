<!DOCTYPE html>
<html>
<head>
	<title>Palindrom</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<h1> Palindrome </h1>
	<h3>
	<?php
	$string="Madam";
	$revstring=strrev($string);
	echo "String is " . $string . "<br>";
	echo "Reversed String is " . $revstring . "<br>";
	if ($string==$revstring) {
		echo "string is palindrome <br>";
	} else {
		echo "string is not palindrome <br>";
	}


	
	$grades=array(50,30,70,20);
	foreach($grades as $grade){
	if ($grade >= 50){
	echo $grade . " is a pass grade <br>";
	} else {
	echo $grade . " is a fail grade<br>";	
 	}
}
?>
</h3>
</body>
</html>