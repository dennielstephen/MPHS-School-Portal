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
		$sql = "INSERT INTO faculty_tbl values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]')";
		$conn->query($sql);
		$sql2 = "UPDATE faculty_tbl SET id5='$emapData[1]', teacher_id='$emapData[2]', last_name='$emapData[3]', first_name='$emapData[4]', id4='$emapData[5]', subject_id='$emapData[6]', id3='$emapData[7]', section_id='$emapData[8]', user_name='$emapData[9]', user_email='$emapData[10]', user_pass='$emapData[11]', dec_pass='$emapData[12]', user_pic='$emapData[13]', user_bio='$emapData[14]', date='$emapData[15]', time='$emapData[16]', hr='$emapData[17]', date2='$emapData[18]', time2='$emapData[19]', hr2='$emapData[20]' WHERE fid = '$emapData[0]'";
		$conn->query($sql2);
	}
	fclose($file);
	echo "<script type=\"text/javascript\">
	alert(\"CSV File has been successfully Imported.\");
	window.location = \"../faculty.php\"
	</script>";
	}
else{
	echo "<script type=\"text/javascript\">
	alert(\"Invalid File: Please Upload CSV File.\");
	window.location = \"../faculty.php\"
	</script>";
}
} 
?> 
