<?php
session_start();

if (!isset($_SESSION['c_username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: customer_login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: customer_login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="header">
		<h2>Booking Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php if (isset($_SESSION['c_username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['c_username']; ?></strong></p>
			<p> <a href="customer_login.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

</body>

</html>