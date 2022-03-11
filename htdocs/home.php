<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html>
<body>
	<h1> Welcome, <?php echo $_SESSION['name'] ?></h1>
</body>
</html>

<?php
}else{
	header("Location: index.php");
	exit();
}
?>