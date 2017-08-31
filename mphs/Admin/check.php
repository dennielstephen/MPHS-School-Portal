<link href="../css/scroll.css" rel="stylesheet" type="text/css" />
<?php 
require('conn.php');

	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: ../Student/index.php');
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: ../Faculty/teacher.php');
			}
		}
	}
?>
<?php
if(!isset($_SESSION['user_email'])){ //if login in session is not set
    header("Location: ../login.php");
}
?>