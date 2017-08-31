<link href="../css/scroll.css" rel="stylesheet" type="text/css" />
<?php 
require('conn.php');
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$d=strtotime("+8 Hours");
				$date = date("Y-m-d",$d);
				$time = date("g:i:s",$d);
				$hr = date("A",$d);
				$log="UPDATE stud_grade_tbl SET date='$date',time='$time',hr='$hr' WHERE user_email='".$_SESSION["user_email"]."'";
				$result2 = $conn->query($log);
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
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM admin_table WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: ../Admin/admin.php');
			}
		}
	}
?>
<?php
if(!isset($_SESSION['user_email'])){ //if login in session is not set
    header("Location: ../login.php");
}
?>