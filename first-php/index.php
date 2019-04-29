<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
    body{
    	background: gray;
    	color: blue;
    }
    h1{
    	color: blue;
    }
    
</style>
<link rel="stylesheet" href="style.css"/>
  </head>
  <body>
  	<h1> PHP Intro </h1>
  	<h2>
  	<?php
  	//echo is used for outputting text or values
  	echo "Hello <br>";
    //key words are not case sensitive but variable names are case sensitive
    #single line comments
    /* multi line comments 
    goes here
    */
  	$greetings= "Hello from PHP variable";
  	$Greetings ="I am with uppercase";

  	// . is used for concatenation
  	 echo $Greetings. "<br>";
  	 //print is also used for output
  	 print $greetings. "<br>";

  	 /* difference between single quotes and double quotes
	singel quote produces the text as it is and not produce the values 
	but double quotes produces the value of the variable or escape sequence
	*/
	echo '$greetings.....using \t single quote <br>';
	echo "$greetings .....using \t double quotes<br>";
	echo (30+25) . "<br>" ;
	var_dump ("30+25");
	echo "<br>";
	
	var_dump("This is from var_dump "); // produces the values and data types
	echo ("<br>");
	var_dump($greetings);
	echo ("<br> $greetings is of type ");
	echo gettype($greetings)."<br>"; // to get the type of data
	$n=11;
	var_dump($n);
	echo "<br>";
	echo 'is_int($n) produces ';
	echo is_int($n);
	echo ' because $n is an integer';

	settype($n, "string"); // to change the data type use settype
	echo "<br> Now the data type of n is " . gettype($n)."<br>";
	echo is_float($n);
	// condition statement is the same as JS
		if ($n=="10") {
			echo "yes, it is equivalent to 10 <br>";
		} else {
			echo "No it is not";
		}
	// Arrays are used with different wording from JS
		//var names=["David", "Jones"]; this is the JS syntax
		$names= array("David","Jones");

	//loops are similar to JS
		for ($i = 0; $i < 5 ; $i++){

		}

		foreach($names as $name){
			echo "<br>". $name."<br>";
		}


  	?>
  </h2>
<!-- <script>
document.write("HEllo from Javascript");
</script> -->
  <script src="script.js"> </script>
  </body>
</html>