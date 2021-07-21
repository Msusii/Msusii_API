<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
session_start();
include "../config.php";
include "../function.php";
$data = file_get_contents("php://input");
if (isset($data)) {
	$arr = [];
	$_response = [];
	$con = connect_to_database($myServer, $myUser, $myPass, $myDB);
	$json_array = json_decode($data, true);
	$service = _real_escape_string($json_array['service']);
	if ($service == "GET_SALON") {
		$msuko = _real_escape_string($json_array['msuko']);
		$sql = "SELECT A.* FROM $table_salons A, $table_services B WHERE A.id=B.salon_id AND B.name LIKE '$msuko%'";
		$rows = get_from_table_sql($con, $sql);
		foreach ($rows as $row) {
			$salon_id = $row['id'];
			$salon_name = $row['name'];
			$phone_no = $row['phone_no'];
			$location = $row['location'];
			if (!in_array($salon_name, $arr)) {
				$arr[] = array(
					"name" => $salon_name,
					"phone_no" => $phone_no,
					"location" => $location
				);
			}
		}
		$_response = array(
			"code" => 200,
			"status" => "Success",
			"salons" => $arr
		);
	} else {
		$_response = array(
			"code" => 404,
			"status" => "Failed",
			"error" => "No service Available"
		);
	}
	close_connections($con);
	$response = json_encode($_response);
	echo $response;
}