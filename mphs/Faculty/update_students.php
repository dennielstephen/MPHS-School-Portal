<?php
session_start();
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
		$section_id = $_POST['section_id'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET last_name=:ln, first_name=:fn, section_id=:secid WHERE sgid=:id");
		$stmt->bindParam(":ln", $last_name);
		$stmt->bindParam(":fn", $first_name);
		$stmt->bindParam(":secid", $section_id);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}
	/*
	$stmt = $db_con->prepare("SELECT id5 FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'");
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
		$conn = new mysqli("localhost","root","","db_portal");
		
		$d=strtotime("+8 Hours");
		$date = date("Y-m-d",$d);
		$time = date("g:i:s",$d);
		$hr = date("A",$d);
	
		$sql="INSERT INTO audit_tbl VALUES('',"+ $row['id5'] + ",'Updated Student','$date','$time','$hr')";
		$conn->query($sql);
	}*/
?>