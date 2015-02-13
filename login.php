<?php
$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');

if ($openShiftVar === null || $openShiftVar == "") {
	$dbHost = "localhost";
}
else {
     $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
}

//form data
$gender = $_GET['gender'];
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$major = $_GET['major'];
$apartment = $_GET['apartment'];
$semester = $_GET['semester'];

$username = $_GET['username'];
$password = $_GET['password'];


try
{
   $hostuser = "php";
   $hostpassword = "php-pass";
   $db = new PDO("mysql:host=$dbHost;dbname=directory", $hostuser, $hostpassword);
}
catch (PDOException $ex) {
	echo "Error!: " . $ex->getMessage();
	die();	
}

$sql = "INSERT INTO users (username, password, major, apartment, semester, gender, firstName, lastName) VALUES ('$username', '$password', '$major', '$apartment', '$semester', '$gender', '$firstName', '$lastName');";

if ($db->query($sql) === TRUE) {
	echo "New record created";	
} else {
	echo "faiiiil!";
}
?>