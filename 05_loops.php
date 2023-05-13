<?php
for ($i = 0; $i <= 10; $i++) {
	echo 'Number: ' . $i . '<br>';
}

$x = 0;

while ($x <= 15) {
	echo 'While loop: ' . $x . '<br>';
	$x++;
}

$y = false;

do {
	echo 'Do commands execute and then check' . '<br>';
} while ($y);

$array = ['first', 'second', 'third'];

foreach ($array as $index => $item) {
	echo "$index: $item<br>";
}

$person = [
	'first_name' => 'Riley',
	'last_name' => 'Hardcastle',
	'email' => 'hardcastle.riley@gmail.com'
];

foreach ($person as $key => $value) {
	echo "$key - $value<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>05_loops</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>