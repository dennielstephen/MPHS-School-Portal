<?php
session_start();
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET first_name=:fn, last_name=:ln WHERE sgid=:id");
		$stmt->bindParam(":fn", $first_name);
		$stmt->bindParam(":ln", $last_name);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}
	if($_POST)
	{
		$id = $_POST['id'];
		$QA1 = $_POST['1stQA'];
		
		$stmt = $db_con->prepare("UPDATE grade_tbl SET 1stQA=:qa1 WHERE grade_id=:id && subject_id=(SELECT subject_id FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."')");
		$stmt->bindParam(":qa1", $QA1);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "";
		}
		else{
			echo "Query Problem";
		}
	}
	if($_POST)
	{
		$id = $_POST['id'];
		$QA2 = $_POST['2ndQA'];
		$QA3 = $_POST['3rdQA'];
		$QA4 = $_POST['4thQA'];
		
		$stmt = $db_con->prepare("UPDATE grade_tbl SET 2ndQA=:qa2, 3rdQA=:qa3, 4thQA=:qa4 WHERE grade_id=:id && subject_id=(SELECT subject_id FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."')");
		$stmt->bindParam(":qa2", $QA2);
		$stmt->bindParam(":qa3", $QA3);
		$stmt->bindParam(":qa4", $QA4);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "";
		}
		else{
			echo "Query Problem";
		}
	}
?>