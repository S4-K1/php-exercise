<?php
if (isset($_POST['submit'])) {
	$allowedExt =  array('png', 'jpg', 'jpeg', 'gif');
	if (!empty($_FILES['upload']['name'])) {
		$fileName = $_FILES['upload']['name'];
		$fileS = $_FILES['upload']['size'];
		$fileTmp = $_FILES['upload']['tmp_name'];
		$targetDir = "uploads/$fileName";

		// Get file extension
		$fileExt = explode('.', $fileName);
		$fileExt = strtolower(end($fileExt));

		// Validate
		if (in_array($fileExt, $allowedExt)) {
			move_uploaded_file($fileTmp, $targetDir);

			echo '<p style="color: green;">File uploaded!</p>';
		} else {
			$message = '<p style="color: red;">Invalid file type!</p>';
		}
	} else {
		$message = '<p style="color: red;">Please choose a file</p>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>15_file_upload</title>
</head>

<body>
	<?php echo $message ?? null; ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="upload">
		<input type="submit" value="Submit" name="submit">
	</form>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>