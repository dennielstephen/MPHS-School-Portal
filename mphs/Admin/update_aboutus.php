<?php
require_once 'connection.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$Mission = $_POST['Mission'];
		$Vision = $_POST['Vision'];
		
		$stmt = $db_con->prepare("UPDATE aboutus SET Mission=:ms, Vision=:vs WHERE about_id=:id");
		$stmt->bindParam(":ms", $Mission);
		$stmt->bindParam(":vs", $Vision);
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
		$History = $_POST['History'];
		$Objectives = $_POST['Objectives'];
		
		$stmt = $db_con->prepare("UPDATE aboutus SET History=:ht, Objectives=:oj WHERE about_id=:id");
		$stmt->bindParam(":ht", $History);
		$stmt->bindParam(":oj", $Objectives);
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