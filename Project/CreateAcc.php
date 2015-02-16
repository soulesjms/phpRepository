<?php
$openShiftVar = getenv('OPENSHIFT_MYSQL_DB_HOST');

if ($openShiftVar === null || $openShiftVar == "") {
	$dbHost = "localhost";
}
else {
     $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
}

$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbName = "directory";

echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br />\n";

if(isset($_POST['username'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
	$major = $_POST['major'];
	$apartment = $_POST['apartment'];
    
    try
    {
       $hostuser = "php";
       $hostpassword = "php-pass";
       $db = new PDO("mysql:host=localhost;dbname=directory", $hostuser, $hostpassword);
    }
    catch (PDOException $ex) {
        echo "Error!: " . $ex->getMessage();
        die();	
	}
    $sql = "INSERT INTO users (username, password, firstName, lastName, major, apartment) VALUES ('$username', '$password', '$firstName', '$lastName', '$major', '$apartment');";
	$temp = $db->query($sql);
	$sql = "";
}
?>