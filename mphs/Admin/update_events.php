<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$Announcement = $_POST['Announcement'];
		
		$stmt = $db_con->prepare("UPDATE announcements SET Announcement=:ann WHERE ann_id=:id");
		$stmt->bindParam(":ann", $Announcement);
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