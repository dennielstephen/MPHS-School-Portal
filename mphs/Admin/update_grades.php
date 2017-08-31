<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$stud_id = $_POST['stud_id'];
		$section_id = $_POST['section_id'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET stud_id=:sid, section_id=:secid WHERE sgid=:id");
		$stmt->bindParam(":sid", $stud_id);
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
	if($_POST)
	{
		$id = $_POST['id'];
		$QA1 = $_POST['1stQA'];
		$QA2 = $_POST['2ndQA'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET 1stQA=:QA1, 2ndQA=:QA2 WHERE sgid=:id");
		$stmt->bindParam(":QA1", $QA1);
		$stmt->bindParam(":QA2", $QA2);
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
		$QA3 = $_POST['3rdQA'];
		$QA4 = $_POST['4thQA'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET 3rdQA=:QA3, 4thQA=:QA4 WHERE sgid=:id");
		$stmt->bindParam(":QA3", $QA3);
		$stmt->bindParam(":QA4", $QA4);
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