session_start();

if (!isset($_SESSION['c_username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: customer_login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['c_username']);
	header("location: customer_login.php");
}


