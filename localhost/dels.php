<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php
//error_reporting(0);
require 'db.php';
if($_POST){
		$id 	= $_POST['id'];
$db->exec("DELETE FROM users WHERE id = '$id'");
}
header("Location: show.php");
 ?>