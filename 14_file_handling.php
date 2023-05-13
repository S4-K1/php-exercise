<?php
$file = 'extras/users.txt';

if (file_exists($file)) {
	// echo readfile($file);
	$handle = fopen($file, 'r');
	$contents = fread($handle, filesize($file));
	fclose($handle);
	echo $contents;
} else {
	$handle = fopen($file, 'w');
	$contents =
		'Riley' . PHP_EOL .
		'Steve' . PHP_EOL .
		'Rich';
	fwrite($handle, $contents);
	fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>14_file_handling</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>