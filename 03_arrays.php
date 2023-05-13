<?php
	$numbers = [1, 2, 3, 4, 5];
	print_r($numbers);
	echo '<br>';
	echo $numbers[1];

	$numbers = [
		1 => 42
	];

	echo '<br>';
	echo $numbers[1];

	$hex = [
		'red' => '#f00',
		'blue' => '#0f0',
		'green' => '#00f',
	];

	$person = [
		'first_name' => 'Riley',
		'last_name' => 'Hardcastle',
		'email_addres' => 'hardcastle.riley@gmail.com'
	];

	$sith_grand_plan = [
		[
			'first_name' => 'Sheev',
			'last_name' => 'Palpatine',
			'email_address' => 'darthsidious@coruscant.gov',
		],
		[
			'first_name' => 'Hego',
			'last_name' => 'Damask',
			'email_address' => 'darhtplagueis@damaskholdings.com',
		],
		[
			'first_name' => 'Sifo',
			'last_name' => 'Dyas',
			'email_address' => 'sifodyas@coruscant.gov',
		]
		];

	echo '<br>';
	echo $sith_grand_plan[1]['email_address'];
	echo '<br>';
	var_dump(json_encode($sith_grand_plan));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>03_arrays</title>
</head>
<body>
	<br />
	<a href="./index.php">Go back</a>
</body>
</html>