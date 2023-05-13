<?php
	$fruits = ['apple', 'orange', 'pear'];

	print_r($fruits);
	echo '<br>';
	$fruits[] = 'grape';
	print_r($fruits);
	echo '<br>';

	array_push($fruits, 'blueberry', 'strawberry');
	array_unshift($fruits, 'mango');
	print_r($fruits);
	echo '<br>';
	
	array_pop($fruits);
	array_shift($fruits);
	unset($fruits[2]);
	print_r($fruits);
	echo '<br>';

	$chunked_array = array_chunk($fruits, 2);
	print_r($chunked_array);
	echo '<br>';

	$arr1 = [1, 2, 3];
	$arr2 = [4, 5, 6];

	$arr3 = array_merge($arr1, $arr2);
	$arr4 = [...$arr1, ...$arr2];
	print_r($arr3);
	echo '<br>';

	$a = ['green', 'red', 'blue'];
	$b = ['lettuce', 'apple', 'blueberry'];

	$c = array_combine($a, $b);
	print_r($c);
	echo '<br>';

	$keys = array_keys($c);
	print_r($keys);
	echo '<br>';

	$flipped = array_flip($c);
	print_r($flipped);
	echo '<br>';

	$numbers = range(1, 20);
	$newNumbers = array_map(function($number) {
		return "Number: $number";
	}, $numbers);

	print_r($newNumbers);
	echo '<br>';

	$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

	print_r($lessThan10);
	echo '<br>';

	$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
	var_dump($sum);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>07_array_functions</title>
</head>
<body>
	<br />
	<a href="./index.php">Go back</a>
</body>
</html>