<?php
	function inverse($x) {
		if(!$x) {
			throw new Exception('Division by zero');
		}
		return 1/$x;
	}
	
	try {
		echo inverse(10), '<br />';
		echo inverse(0);
	} catch(Exception $e) {
		echo 'Caught Exception ', $e->getMessage(), '<br />';
	} finally {
		echo 'Finally';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>16_exceptions</title>
</head>
<body>
	<br />
	<a href="./index.php">Go back</a>
</body>
</html>