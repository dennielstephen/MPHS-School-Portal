<?php 
session_start(); 
require('conn.php');

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

    $sql = "SELECT * FROM faculty_tbl where user_email='".$_SESSION["user_email"]."'";
    $result = $conn->query($sql);


?>
<?php
	$val = $_POST['ubio'];
	
	$sql = "UPDATE faculty_tbl SET user_bio='$val' WHERE user_email='".$_SESSION["user_email"]."'";
	$res = mysqli_query($conn,$sql);
	header ('location:user_settings.php')
?>