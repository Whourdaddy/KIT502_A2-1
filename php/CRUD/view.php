<?php  

include "db_conn.php";

$sql = "SELECT * FROM users_customer ORDER BY id ASC";
$result = mysqli_query($conn, $sql);