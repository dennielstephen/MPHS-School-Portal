<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$pic_desc = $_POST['pic_desc'];
		
		$stmt = $db_con->prepare("UPDATE achievers SET pic_desc=:pd WHERE ach_id=:id");
		$stmt->bindParam(":pd", $pic_desc);
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