<?php 
require('conn.php');
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				?>
				<img src="uploads/<?php echo $row['user_pic'];?>" alt="" width=25 height=25 style="border-radius: 50%;"/>
				<?php
				echo $row['last_name'].", ".$row['first_name']; 
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				?>
				<img src="uploads/<?php echo $row['user_pic'];?>" alt="" width=25 height=25 style="border-radius: 50%;"/>
				<?php
				echo $row['first_name']." ".$row['last_name']; 
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM admin_table WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				echo "ADMIN";
			}
		}
	}
?>