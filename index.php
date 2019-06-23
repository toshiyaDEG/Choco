<?php 
	session_start();

	require 'database.php';

	if (isset($_SESSION['user_id'])){
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE ');
		$records->bindParam(':id',$_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$user = null;

		if (count($results) > 0){
			$users = $results;
		}
	}
?>
		


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome to Chocological</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet"  href="assets/css/style.css">
	</head>
	<body>
		<?php require 'partials/header.php'?>

		<?php if(!empty($user)): ?>
		<br>Welcome. <?= $user['email']?>
		<br>You are Succesfully Logged Inn
		<a href="logout.php"></a>
		<?php else: ?>

		<h1>Please Login or SignUp</h1>
		<a href="login.php">Login</a> or
		<a href="signup.php">Signup</a>
	<?php endif; ?>
	</body>
</html>