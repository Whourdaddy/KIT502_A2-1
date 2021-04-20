<?php
session_start();
include "../../db_conn.php";
$c_username = "";
$c_first_name = "";
$c_last_name = "";
$c_email = "";
$c_mobile = "";
$c_address = "";
$c_country = "";
$errors = array();

if (isset($_GET['id'])) {
    // include "../../db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM users_customer WHERE id=$id";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: ../sys_dashboard.php");
    }
} else if (isset($_POST['update_cust_ad'])) {
    include "../../db_conn.php";
    $c_username = mysqli_real_escape_string($db, $_POST['c_username']);
    $c_first_name = mysqli_real_escape_string($db, $_POST['c_first_name']);
    $c_last_name = mysqli_real_escape_string($db, $_POST['c_last_name']);
    $c_email = mysqli_real_escape_string($db, $_POST['c_email']);
    $c_mobile = mysqli_real_escape_string($db, $_POST['c_mobile']);
    // $password_c1 = mysqli_real_escape_string($db, $_POST['password_c1']);
    // $password_c2 = mysqli_real_escape_string($db, $_POST['password_c2']);
    $c_address = mysqli_real_escape_string($db, $_POST['c_address']);
    $c_country = mysqli_real_escape_string($db, $_POST['c_country']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($c_username)) {
        array_push($errors, "Username is required");
    }
    if (empty($c_first_name)) {
        array_push($errors, "First name is required");
    }
    if (empty($c_last_name)) {
        array_push($errors, "Last name is required");
    }
    if (empty($c_email)) {
        array_push($errors, "Email is required");
    }
    if (empty($c_mobile)) {
        array_push($errors, "Mobile is required");
    }
    // if (empty($password_c1)) {
    //     array_push($errors, "Password is required");
    // }
    // if ($password_c1 != $password_c2) {
    //     array_push($errors, "The two passwords do not match");
    // }
    if (empty($c_address)) {
        array_push($errors, "Address is required");
    }
    if (empty($c_country)) {
        array_push($errors, "Country is required");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users_customer WHERE c_username='$c_username' OR c_email='$c_email' OR c_mobile='$c_mobile' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['c_username'] === $c_username) {
            array_push($errors, "Username already exists");
        }

        if ($user['c_email'] === $c_email) {
            array_push($errors, "Email already exists");
        }
        if ($user['c_mobile'] === $c_mobile) {
            array_push($errors, "Mobile already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        // $c_password = md5($password_c1); //encrypt the password before saving in the database

        $query = "UPDATE users_customer SET c_username = '$c_username', c_first_name = '$c_first_name',
            c_last_name = '$c_last_name', c_email = '$c_email', c_mobile = '$c_mobile',
            c_address = '$c_address', c_country = '$c_country' WHERE id = $id";
        $result = mysqli_query($db, $query);
        // mysqli_query($db, $query);
        // $_SESSION['c_username'] = $c_username;
        // $_SESSION['success'] = "You are now logged in";
        if ($result) {
			header("Location: ../sys_dashboard.php?success=successfully created");
		} else {
			header("Location: ../sys_dashboard.php?error=unknown error occurred&$user_data");
		}
        // header('location: ../sys_dashboard.php');
    }

} else {
    header("Location: ../sys_dashboard.php");
}
