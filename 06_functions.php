<?php
function registerUser($email)
{
	echo $email . ' registered';
}

// registerUser('hardcastle.riley@gmail.com');

function sum($num1, $num2)
{
	return $num1 + $num2;
}

echo sum(5, 5) . '<br>';

$subtract = function ($num1, $num2) {
	return $num1 - $num2;
};

echo $subtract(10, 5) . '<br>';

$multiply = fn ($num1, $num2) => $num1 * $num2;

echo $multiply(9, 9);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>06_functions</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>