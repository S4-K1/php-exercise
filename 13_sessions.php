<?php
session_start();

if (isset($_POST['submit'])) {
	$username = filter_input(
		INPUT_POST,
		'username',
		FILTER_SANITIZE_SPECIAL_CHARS
	);

	$password = $_POST['password'];

	if ($username == 'Riley' && $password == 'password') {
		$_SESSION['username'] = $username;
		header('Location: /extras/dashboard.php');
	} else {
		echo 'Incorrect Login';
	}

	// $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS)
	// This also works ^^

	echo ($name . ' ' . $age);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>13_sessions</title>
</head>

<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<div>
			<label for="username"> Username: </label>
			<input type="text" name="username" />
		</div>
		<div>
			<label for="password"> Password: </label>
			<input type="password" name="password" />
		</div>
		<input type="submit" value="Submit" name="submit" />
	</form>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>