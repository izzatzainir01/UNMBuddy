<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'unm_buddy';

$conn = mysqli_connect($host,$user,$password,$db);

//If database is not found, print out Connection Failed!
if(!$conn){
	echo "Connection Failed!";
}

?>