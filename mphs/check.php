<?php 
require('conn.php');
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "Student/index.php";
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "Faculty/teacher.php";
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM admin_table WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "Admin/admin.php";
			}
		}
	}
?>