<?php
error_reporting(0);
@ini_set('display_errors', 0);
session_start();


$date_time = date("Y-m-d H:i:s");
$date = date("Y-m-d");
$ip_address = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?:
	getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');

$server_name = $_SERVER['SERVER_NAME'];
$server_port = $_SERVER['SERVER_PORT'];
$root_system_url = "http://localhost:80/msusii/";
// $root_system_url = "https://msusii.herokuapp.com/";

$system_name = "Mdausoft - Msusi v.1.0.0";
$system_name_short_name = "Msusi";
$root_path = "C://xampp/htdocs/msusii/";

$_SESSION['database_inuse'] = "MYSQL";
$myServer = "localhost";
$myUser = "root";
$myPass = "";
$myDB = "msusi";

// $myServer = "remotemysql.com";
// $myUser = "Z3WytuvIoU";
// $myPass = "K485wv3Y9w";
// $myDB = "Z3WytuvIoU";

//all tables
$table_users = "tb_users";
$table_customers = "tb_customers";
$table_activity = "activity_logs";
$table_braiders = "tb_braiders";
$table_salons = "tb_salons";
$table_services = "tb_services";
$table_appointments = "tb_appointments";
$table_contacts = "tb_contacts";

// Constants
$code_owner = "OWNER";
$code_employee = "EMPLOYEE";
$currency = "TSH";
$cash_payment = "CASH";
$paypal_payment = "PAYPAL";
$MNO_payment = "MNO";
$MPESA_payment = "M_PESA";

//Urls
$order_no = "https://requset.test/";

//APIs
$mpesaAPI_key = "cwXcERt3nsdNPV6YhPeQKxlmpPAxrR4c";
$mpesaPublic_key = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEArv9yxA69XQKBo24BaF/D+fvlqmGdYjqLQ5WtNBb5tquqGvAvG3WMFETVUSow/LizQalxj2ElMVrUmzu5mGGkxK08bWEXF7a1DEvtVJs6nppIlFJc2SnrU14AOrIrB28ogm58JjAl5BOQawOXD5dfSk7MaAA82pVHoIqEu0FxA8BOKU+RGTihRU+ptw1j4bsAJYiPbSX6i71gfPvwHPYamM0bfI4CmlsUUR3KvCG24rB6FNPcRBhM3jDuv8ae2kC33w9hEq8qNB55uw51vK7hyXoAa+U7IqP1y6nBdlN25gkxEA8yrsl1678cspeXr+3ciRyqoRgj9RD/ONbJhhxFvt1cLBh+qwK2eqISfBb06eRnNeC71oBokDm3zyCnkOtMDGl7IvnMfZfEPFCfg5QgJVk1msPpRvQxmEsrX9MQRyFVzgy2CWNIb7c+jPapyrNwoUbANlN8adU1m6yOuoX7F49x+OjiG2se0EJ6nafeKUXw/+hiJZvELUYgzKUtMAZVTNZfT8jjb58j8GVtuS+6TM2AutbejaCV84ZK58E2CRJqhmjQibEUO6KPdD7oTlEkFy52Y1uOOBXgYpqMzufNPmfdqqqSM4dU70PO8ogyKGiLAIxCetMjjm6FCMEA3Kc8K0Ig7/XtFm9By6VxTJK1Mg36TlHaZKP6VzVLXMtesJECAwEAAQ==";
$appointment_code = "MS101";