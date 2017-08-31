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
		$sql = "INSERT INTO grade_tbl values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]')";
		$conn->query($sql);
		$sql2 = "UPDATE grade_tbl SET id='$emapData[1]', grade_id='$emapData[2]', id3='$emapData[3]', section_id='$emapData[4]', id4='$emapData[5]', subject_id='$emapData[6]', 1stQA='$emapData[7]', 2ndQA='$emapData[8]', 3rdQA='$emapData[9]', 4thQA='$emapData[10]' WHERE gid = '$emapData[0]'";
		$conn->query($sql2);
	}
	fclose($file);
	echo "<script type=\"text/javascript\">
	alert(\"CSV File has been successfully Imported.\");
	window.location = \"../admin.php\"
	</script>";
	}
else{
	echo "<script type=\"text/javascript\">
	alert(\"Invalid File: Please Upload CSV File.\");
	window.location = \"../admin.php\"
	</script>";
}
} 
?> 
