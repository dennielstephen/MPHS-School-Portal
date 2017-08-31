<?php
include_once 'connection.php';
$id = $_POST['chk'];
$stmt=$db_con->prepare("DELETE FROM stud_grade_tbl WHERE sgid=:id");
$stmt->execute(array(':id'=>$id));
?>