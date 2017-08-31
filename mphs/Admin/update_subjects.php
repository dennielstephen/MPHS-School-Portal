<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$subject_id = $_POST['subject_id'];
		$subject = $_POST['subject'];
		
		$stmt = $db_con->prepare("UPDATE subject_tbl SET subject_id=:subid, subject=:subj WHERE subject_id=:subid");
		$stmt->bindParam(":subid", $subject_id);
		$stmt->bindParam(":subj", $subject);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}
?>