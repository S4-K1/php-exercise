<?php
	if(isset($_POST['submit'])) {
		echo($_POST['name'] . ' ' . $_POST['age']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>10_get_post</title>
</head>
<body>	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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