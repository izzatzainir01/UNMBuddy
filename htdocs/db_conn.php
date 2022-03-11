<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'UNMBUDDYTEST';

$conn = mysqli_connect($host,$user,$password,$db);

//If database is not found, print uot Connection Failed!
if(!$conn){
	echo "Connection Failed!";
}

?>