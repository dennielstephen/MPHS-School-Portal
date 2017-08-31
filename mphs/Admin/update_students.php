<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$stud_id = $_POST['stud_id'];
		$last_name = $_POST['last_name'];
		$first_name = $_POST['first_name'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET stud_id=:sid, last_name=:ln, first_name=:fn WHERE sgid=:id");
		$stmt->bindParam(":sid", $stud_id);
		$stmt->bindParam(":ln", $last_name);
		$stmt->bindParam(":fn", $first_name);
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
		$section_id = $_POST['section_id'];
		$user_email = $_POST['user_email'];
		$user_pass = $_POST['user_pass'];

		$new_Password = md5($user_pass);
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET section_id=:secid, user_email=:ue, user_pass=:pass WHERE sgid=:id");
		$stmt->bindParam(":secid", $section_id);
		$stmt->bindParam(":ue", $user_email);
		$stmt->bindParam(":pass", $new_Password);
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
		$user_pass = $_POST['user_pass'];
		
		$stmt = $db_con->prepare("UPDATE stud_grade_tbl SET dec_pass=:pass WHERE sgid=:id");
		$stmt->bindParam(":pass", $user_pass);
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