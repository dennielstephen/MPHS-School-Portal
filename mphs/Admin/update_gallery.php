<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$gallery_desc = $_POST['gallery_desc'];
		
		$stmt = $db_con->prepare("UPDATE gallery_tbl SET gallery_desc=:gd WHERE galid=:id");
		$stmt->bindParam(":gd", $gallery_desc);
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