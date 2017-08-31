<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_portal";
$conn = new mysqli($host,$user,$pass,$database);

if(isset($_POST["Import"])){

echo $filename=$_FILES["file"]["tmp_name"];

if($_FILES["file"]["size"] > 0)
{
	$file = fopen($filename, "r");
	while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	{
		$sql = "INSERT INTO subject_tbl values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]')";
		$conn->query($sql);
		$sql2 = "UPDATE subject_tbl SET id4='$emapData[1]', subject_id='$emapData[2]', subject='$emapData[3]', id5='$emapData[4]', teacher_id='$emapData[5]' WHERE subid = '$emapData[0]'";
		$conn->query($sql2);
	}
	fclose($file);
	echo "<script type=\"text/javascript\">
	alert(\"CSV File has been successfully Imported.\");
	window.location = \"../subjects.php\"
	</script>";
	}
else{
	echo "<script type=\"text/javascript\">
	alert(\"Invalid File: Please Upload CSV File.\");
	window.location = \"../subjects.php\"
	</script>";
}
} 
?> 
