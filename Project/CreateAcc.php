<?php
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
       $db = new PDO("mysql:host=localhost;dbname=scriptures", $hostuser, $hostpassword);
    }
    catch (PDOException $ex) {
        echo "Error!: " . $ex->getMessage();
        die();	
	}
    $sql = "INSERT INTO users ('username', 'password', 'firstName', 'lastName', 'major', 'apartment') VALUES ('$username', '$password', '$firstName', '$lastName', '$major', '$apartment');";
	$temp = $db->query($sql);
	$sql = "";
}
?>