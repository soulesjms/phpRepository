<?php
	$keys = array_keys($_GET);  # returns a array of the key values of $_GET array

	$male = $_GET['male'];
	$female = $_GET['female'];
	$CS = $_GET['CS'];
	$web = $_GET['web'];
	$CIT = $_GET['CIT'];
	$CE = $_GET['CE'];
	$gpa1 = $_GET['gpa1'];
	$gpa2 = $_GET['gpa2'];
	$gpa3 = $_GET['gpa3'];
	$gpa4 = $_GET['gpa4'];
	$some1 = $_GET['some1'];
	$some2 = $_GET['some2'];
	$some3 = $_GET['some3'];
	$some4 = $_GET['some4'];
	

$myfile = fopen("survey.txt", "w") or die ("Unable to open file!");
$txt = "$male,$female,$CS,$web,$CIT,$CE,$gpa1,$gpa2,$gpa3,$gpa4,$some1,$some2,$some3,$some4"; 

print "$txt";
fwrite($myfile, $txt);
fclose($myfile);
?>