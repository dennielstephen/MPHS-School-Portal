<?php
include_once 'connection.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM faculty_tbl WHERE fid=:id");
	$stmt->execute(array(':id'=>$id));
}
?>