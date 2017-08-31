<?php
require('conn.php');
require_once 'connection.php';
	
	if($_POST)
	{
		if($_FILES['file']['size']>0){
			$imgFile = $_FILES['file']['name'];
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			
			$imageName = mysqli_real_escape_string($conn,$_FILES["file"]["name"]);

			if(in_array($imgExt, $valid_extensions)){
				if($_FILES['file']['size']<=5000000){
					if(move_uploaded_file($_FILES['file']['tmp_name'],"../images/portfolio/recent/".$_FILES['file']["name"])){
						$sql = "UPDATE index_tbl SET index_pic='$imageName' WHERE iid=:id";
						$res = mysqli_query($conn,$sql);
					}
				}
			}
		}
		$id = $_POST['id'];
		$pic_desc = $_POST['pic_desc'];
		$text = $_POST['text'];
		$desc_pic = $_POST['desc_pic'];
		
		$stmt = $db_con->prepare("UPDATE index_tbl SET pic_desc=:pd, text=:txt, desc_pic=:dp WHERE iid=:id");
		$stmt->bindParam(":pd", $pic_desc);
		$stmt->bindParam(":txt", $text);
		$stmt->bindParam(":dp", $desc_pic);
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