<?php
setcookie('name', 'Riley', time() + 60 * 60 * 24);
setcookie('age', '22', time() + 60 * 60 * 24);
// Expires after one day

if (isset($_COOKIE['name']) and isset($_COOKIE['age'])) {
	echo ($_COOKIE['name'] . ' ' . $_COOKIE['age']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>12_cookies</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>