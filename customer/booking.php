<?php include('booking_server.php');
// session_start();

if (!isset($_SESSION['c_username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: customer_login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['c_username']);
	header("location: customer_login.php");
}
?>


<!-- KIT 502 Group 3 last edit 26/03/2021 -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">

	<title>KIT_502_web_dev</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/popup_window.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/popup_window.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/booking.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
	<!---------------part 1-------------------->
	<div class="covid_div">
		<aside class="covid_notice">
			<a class="covid_news" href="https://www.australia.gov.au/">
				<span class="covid_words">Get the latest on our COVID-19 response</span>
			</a>
		</aside>
	</div>

	<div class="log_msg">
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
			<div class="user_log_suc">
				<p>Welcome <strong><?php echo $_SESSION['c_username']; ?></strong></p>
				<p> <a href="customer_login.php?logout='1'">logout</a> </p>
			</div>

		<?php endif ?>
	</div>
	<nav class="nav_bar">
		<div class="logo">
			<p>UTas</p>
			<p>Accommodation</p>
		</div>
		<a href="#" class="toggle_btn">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>
		<div class="nav_links">
			<ul class="list_nav">
				<li><a class="active_nav" href="../home.php">Home</a></li>
				<li><a class="active_nav" href="./booking.php">Book</a></li>
				<li><a class="active_nav" href="#">Customer</a>
					<div class="sub_user">
						<ul>
							<li><a href="./customer_login.php">Login</a></li>
							<!-- <li><a onclick="do_logout()" href="../html/login_reg.html">Logout</a></li> -->
							<li><a href="./review.php">Review</a></li>
						</ul>
					</div>
				</li>
				<li><a href="../html/login_admin.html"><button id="do_admin_login" type="button" class="btn btn-dark" onclick="do_admin_login()">Admin</button></a></li>
			</ul>
		</div>
		<script src="../js/toggle_bar.js" defer></script>
	</nav>

	<div class="Booking_form">
		<form class="Bk_form_tab" method="post" action="booking.php">
			<?php include('../errors.php'); ?>
			<div class="Bk_op_tab">
				<label for="Location">Location:</label>
				<select id="Location" name="Location" value="<?php echo $Location; ?>"><br>
					<option value="Melbourne">Melbourne</option>
					<option value="Hobart">Hoart</option>
					<option value="Sydney">Sydney</option>
					<option value=“Adelaide”>Adelaide</option>
				</select>
			</div>
			<div class="Bk_tab">
				<label for="checkin">Check In:</label>
				<input type="text" id="checkin" name="checkin" value="<?php echo $checkin; ?>">
			</div>
			<div class="Bk_tab">
				<label for="checkout">Check Out:</label>
				<input type="text" id="checkout" name="checkout" value="<?php echo $checkout; ?>">
			</div>
			<div class="Bk_tab">
				<label for="guest">Number of Guests</label>
				<input type="number" min="1" value="1" id="guest" name="guest" value="<?php echo $guest; ?>">
			</div>
			<div class="Bk_tab">
				<input type="submit" class="Search_btn" value="Search" name="search_client">
			</div>
		</form>
	</div>

	<div class="Room_type" id="Room_type">
		<div class="container_room">
			<table class="Room_bk">
				<td>
					<div class="img_room">
						<img src="../img/Room/img1.jpg" alt="img_room">
					</div>
				</td>
				<td>
					<div class="info_room">
						<h3>Single Bed</h3>
						<p>Single Dlux room make you feel like Home</p>
						<i class="las la-joint"></i>
						<i class="las la-parking"></i>
						<i class="las la-dog"></i>
						<i class="las la-wifi"></i>
						<p>Location: 410 Sandy Bay Rd, Sandy Bay TAS 7005</p>
						<p>Rate of house: 3.5</p>
						<p>Rate of host: 5</p>
					</div>
				</td>
				<td>
					<strong id="strong">$99.99/Per Night</strong>
					<button type="button" class="Book_btn">book now</button>
				</td>
			</table>
		</div>
		<div class="container_room">
			<!-- single room -->
			<table class="Room_bk">
				<td>
					<div class="img_room">
						<img src="..//img/Room/img2.jpg" alt="img_room">
					</div>
				</td>
				<td>
					<div class="info_room">
						<h3>Queen Bed</h3>
						<p>Queen Bedroom make you like a queen</p>
						<i class="las la-joint"></i>
						<i class="las la-parking"></i>
						<i class="las la-wifi"></i>
						<p>Location: Shop 101/70 Murray St, Hobart TAS 7000</p>
						<p>Rate of house: 4.9</p>
						<p>Rate of host: 4.6</p>
					</div>
				</td>
				<td>
					<strong id="strong">$199.99/Per Night</strong>
					<button type="button" class="Book_btn">book now</button>
				</td>
			</table>
		</div>
		<div class="container_room">
			<!-- single room -->
			<table class="Room_bk">
				<td>
					<div class="img_room">
						<img src="../img/Room/img3.jpg" alt="img_room">
					</div>
				</td>
				<td>
					<div class="info_room">
						<h3>King Bed</h3>
						<p>King bedroom make you feel like King</p>
						<i class="las la-joint"></i>
						<i class="las la-dog"></i>
						<i class="las la-wifi"></i>
						<p>Location: 50B King St, Sandy Bay TAS 7005</p>
						<p>Rate of house: 4.0</p>
						<p>Rate of host: 4.8</p>
					</div>
				</td>
				<td>
					<strong>$299.99/Per Night</strong>
					<li><a><button id="open" type="button" class="btn btn-info">Book Now</button></a></li>
					<!-- <button type="button" class="Book_btn">Book Now</button> -->
				</td>
			</table>
		</div>
		<!-- seperate line part -->
		<div class="seperate_line"></div>
		<!--------------footer_part------------------->
		<div class="footer_container">
			<div class="about_us">
				<h2>About us</h2>
				<p>Our goal is to engage our guests and provide them with the best experience through harmonious, zealous and personable service in the most convenient, comfortable, intimate and welcoming setting.</p>
			</div>

			<div class="social_main">
				<div class="social_container">
					<li>
						<a href=""><img src="../img/footer_social/fb.png" alt=""></a>
					</li>
				</div>
				<div class="social_container">
					<li>
						<a href=""><img src="../img/footer_social/ins.png" alt=""></a>
					</li>
				</div>
				<div class="social_container">
					<li>
						<a href=""><img src="../img/footer_social/twitter.webp" alt=""></a>
					</li>
				</div>
				<div class="social_container">
					<li>
						<a href=""><img src="../img/footer_social/youtube.jpeg" alt=""></a>
					</li>
				</div>
			</div>
		</div>

		<!-- popup_window -->
		<div class="search_container" id="search_container">
			<div class="Booking_form">
				<form method="post" action="booking.php">

					<div class="input-group">
						<label>First Name</label>
						<input type="text" name="b_first_name" value="<?php echo $b_first_name; ?>">
					</div>

					<div class="input-group">
						<label>Last Name</label>
						<input type="text" name="b_last_name" value="<?php echo $b_last_name; ?>">
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type="email" name="b_email" value="<?php echo $b_email; ?>">
					</div>

					<div class="input-group">
						<label>Mobile</label>
						<input type="text" name="b_mobile" value="<?php echo $b_mobile; ?>">
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="book_client">Book</button>
					</div>
					<p>
						<!-- Already a member? <a href="customer_login.php">Sign in</a> -->
						<button class="btn btn-danger" id="close">Close Me</button>
					</p>
				</form>
			</div>
		</div>




		<!-- js files -->
		<script src="../js/home.js"></script>
		<script src="../js/admin_pop.js"></script>
		<script src="../js/booking2.js"></script>
		<script src="../js/popup_window.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="../js/booking.js"></script>

	</div>
	<footer>
		<p>Copyright &copy; , KIT_502 Assignment_1</p>
	</footer>
</body>

</html>