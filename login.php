<?php
$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');

if ($openShiftVar === null || $openShiftVar == "") {
	$dbHost = "localhost";
}
else {
     $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
}


$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbName = "directory";

echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br />\n";

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//form data
$gender = $_GET['gender'];
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$major = $_GET['major'];
$apartment = $_GET['apartment'];
$semester = $_GET['semester'];

$username = $_GET['username'];
$password = $_GET['password'];

/*
try
{
   $hostuser = "adminlytYGba";
   $hostpassword = "php-pass";
   $db = new PDO("mysql:host=$dbHost;dbname=directory", $hostuser, $hostpassword);
}
catch (PDOException $ex) {
	echo "Error!: " . $ex->getMessage();
	die();	
}*/

$sql = "INSERT INTO users (username, password, major, apartment, semester, gender, firstName, lastName) VALUES ('$username', '$password', '$major', '$apartment', '$semester', '$gender', '$firstName', '$lastName');";

if ($db->query($sql) === TRUE) {
	echo "New record created";	
} else {
	echo "faiiiil!";
}
?>