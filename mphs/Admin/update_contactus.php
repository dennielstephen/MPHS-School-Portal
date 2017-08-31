<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$Address = $_POST['Address'];
		$Contact = $_POST['Contact'];
		
		$stmt = $db_con->prepare("UPDATE contactus SET Address=:add, Contact=:cont WHERE cont_id=:id");
		$stmt->bindParam(":add", $Address);
		$stmt->bindParam(":cont", $Contact);
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