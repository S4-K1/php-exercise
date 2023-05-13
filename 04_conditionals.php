<?php
$age = 21;

if ($age >= 18) {
	echo 'Old enough to drink';
} else {
	echo "Sorry, you're not old enough to drink";
};

echo '<br>';

$time = date('H');

if ($time < 12) {
	echo 'Good morning';
} elseif ($time < 17) {
	echo 'Good afternoon';
} else {
	echo 'Good evening';
};

echo '<br>';

$posts = ['First'];

// if (!empty($posts)) {
// 	echo $posts[0];
// }  else {
// 	echo 'No posts';
// }

echo !empty($posts) ? $posts[0] : 'No posts';

echo '<br>';

$firstPost = $posts[0] ?? null;

$favColour = 'red';

switch ($favColour) {
	case 'red':
		echo 'Your favourite colour is red';
		break;
	case 'blue':
		echo 'Your favourite colour is blue';
		break;
	case 'green':
		echo 'Your favourite colour is green';
		break;
	default:
		echo 'Your favourite colour is not any of the main three';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>04_conditionals</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>