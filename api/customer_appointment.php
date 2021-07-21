<?php
session_start();
include "../config.php";
include "../function.php";
if (!isset($_SESSION['id'])) {
	header("Location: $root_system_url");
	exit();
}
$id = $_SESSION['id'];
$con = connect_to_database($myServer, $myUser, $myPass, $myDB);
$sql = "SELECT count(id) as 'appointment' FROM $table_appointments WHERE customer_id='$id'";
$row = get_from_table_sql_one($con, $sql);
$appointment = $row['appointment'];
$display = "";
echo $display;
close_connections($con);