<?php
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
	$sql = "SELECT * FROM users;";
	
	$users = $db->query($sql);
	foreach($users AS $user){
		echo "Username: ".$user['username']."<br />";
		echo "First Name: ".$user['firstName']."<br />";
		echo "Last Name: ".$user['lastName']."<br />";
		echo "Apartment Complex: ".$user['apartment']."<br />";
		echo "Major: ".$user['major']."<br />";
		echo "Semester: ".$user['semester']."<br /><br />";
	}
?>