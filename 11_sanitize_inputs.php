<?php
	if(isset($_POST['submit'])) {
		$name = filter_input(INPUT_POST, 'name',
		FILTER_SANITIZE_SPECIAL_CHARS);

		$age = filter_input(INPUT_POST, 'age',
		FILTER_SANITIZE_SPECIAL_CHARS);

		// $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS)
		// This also works ^^

		echo($name . ' ' . $age);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>11_sanitize_inputs</title>
</head>
<body>	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<div>
			<label for="name"> Name: </label>
			<input type="text" name="name" />
		</div>
		<div>
			<label for="name"> Age: </label>
			<input type="text" name="age" />
		</div>
		<input type="submit" value="Submit" name="submit" />
	</form>
	<br />
	<a href="./index.php">Go back</a>
</body>
</html>