<!DOCTYPE html>
<html>
<head>
	<title>BeginPHP</title>
</head>
<body>
	<?php 
	$a="Hello to u all!";
	$x=1;
	$y=1.5;
	echo "$a<br>";
	define("Oi","Hello again");
	echo constant("Oi");echo " is a constant here.<br>";
	define("c","5");
	echo c;echo " is a constant here.<br>";
echo date("l h:i:s A ");
/*Comments multiline*/
#comment singleline
//comment singleline
$t = date("h");

if ($t < "10") {
    echo "<br>Have a good morning!";
} elseif ($t < "20") {
    echo "<br>Have a good day!";
} else {
    echo "<br>Have a good night!";

}
}
	?>
</body>
</html>
