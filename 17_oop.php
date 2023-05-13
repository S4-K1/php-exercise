<?php
class User
{
	// Properties: Attributes that belong to a class

	// Public - Accessed from anywhere
	// Private - Accessed inside the class
	// Protected - Accessed from inside the class and inheriting classes
	public $name;
	public $email;
	public $password;

	public function __construct($name, $email, $password)
	{
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
	}

	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return $this->name;
	}

	function setEmail($email)
	{
		$this->email = $email;
	}

	function getEmail()
	{
		return $this->email;
	}

	function setPassword($password)
	{
		$this->password = $password;
	}

	function getPassword()
	{
		return $this->password;
	}
}

// Instantiate user object
$user1 = new User('Riley', 'hardcastle.riley@gmail.com', 'password');

echo ($user1->name);

// Inheritence

class Employee extends User
{
	public $title;
	public function __construct($name, $email, $password, $title)
	{
		parent::__construct($name, $email, $password);
		$this->title = $title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}
}

echo '<br />';

$employee1 = new Employee('Riley', 'hardcastle.riley@gmail.com', 'password123', 'Developer');

echo $employee1->getTitle();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>17_oop</title>
</head>

<body>
	<br />
	<a href="./index.php">Go back</a>
</body>

</html>