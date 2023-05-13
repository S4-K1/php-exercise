<?php
$string = 'Hello World';
echo strlen($string) . '<br>';

// First occurance
echo strpos($string, 'o') . '<br>';

// Last occurance
echo strrpos($string, 'o') . '<br>';

echo strrev($string) . '<br>';

echo strtolower($string) . '<br>';

echo strtoupper($string) . '<br>';

echo ucwords($string) . '<br>';

echo str_replace('World', 'Everyone', $string) . '<br>';

echo substr($string, 0, 5) . '<br>';

echo substr($string, 5) . '<br>';

if (str_starts_with($string, 'Hello')) {
	echo 'YES' . '<br>';
}

if (str_ends_with($string, 'ld')) {
	echo 'YES' . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>08_string_functions</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>