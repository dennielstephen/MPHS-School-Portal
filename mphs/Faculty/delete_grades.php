<?php
include_once 'connection.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM stud_grade_tbl WHERE sgid=:id");
	$stmt->execute(array(':id'=>$id));
}
?>