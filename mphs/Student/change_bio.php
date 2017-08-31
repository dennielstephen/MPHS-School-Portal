<?php
session_start(); 
include('check.php');
require('conn.php');
if(!isset($_SESSION['user_email'])){ //if login in session is not set
    header("Location: ../login.php");
}
?>
<?php
	$val = $_POST['ubio'];
	
	$sql = "UPDATE stud_grade_tbl SET user_bio='$val' WHERE user_email='".$_SESSION["user_email"]."'";
	$res = mysqli_query($conn,$sql);
	header ('location:user_settings.php');
?>