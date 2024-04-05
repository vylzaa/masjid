<?php
$server = 'localhost';
$username = 'root';
$password = 'password';
$db_name = 'ponpes';
$con;

try{
	$con = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_connect_errno());
	
}catch(Exception $e){
	echo $e->getMessage();
}

?>