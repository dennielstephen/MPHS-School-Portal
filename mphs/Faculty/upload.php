<?php 
session_start(); 
require('conn.php');

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

    $sql = "SELECT * FROM faculty_tbl where user_email='".$_SESSION["user_email"]."'";
    $result = $conn->query($sql);


?>
<?php

if($_FILES['file']['size']>0){
	
	$imageName = mysqli_real_escape_string($conn,$_FILES["file"]["name"]);
	
	if($_FILES['file']['size']<=1048576){
		if(move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$_FILES['file']["name"])){
		//files uploaded
		$sql = "UPDATE faculty_tbl SET user_pic='$imageName' WHERE user_email='".$_SESSION["user_email"]."'";
		$res = mysqli_query($conn,$sql);
		header ('location:user_settings.php')
		?>
		<script type="text/javascript">
		parent.document.getElementById("message").innerHTML="<font color='#ff0000'>Success!!</font>";
		parent.document.getElementById("file").value="";
		window.parent.updatepicture("<?php echo '../uploads/'.$_FILES['file']["name"];?>");
		</script>
		<?php
		
	}else{
		//upload failed
		
		?>
		<script type="text/javascript">
		parent.document.getElementById("message").innerHTML="<font color='#ff0000'>there was an error uploading your image. please try agan later.</font>";
		</script>
		<?php
	}
	}else{
		//the file is too big
		
		
		?>
		<script type="text/javascript">
		parent.document.getElementById("message").innerHTML="<font color='#ff0000'>your file is larger than 1mb. please try agan later.</font>";
		</script>
		<?php
	}
}


?>