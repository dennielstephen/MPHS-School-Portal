<?php
	require('conn.php');
	require_once('session.php');
	require_once('class.user.php');
	$user_logout = new USER();
	
	if($user_logout->is_loggedin()!="")
	{
		$user_logout->redirect('teacher.php');
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		if(isset($_SESSION['user_email'])){
		
		$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
		
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$d=strtotime("+8 Hours");
					$date = date("Y-m-d",$d);
					$time = date("g:i:s",$d);
					$hr = date("A",$d);
					$log="UPDATE faculty_tbl SET date2='$date',time2='$time',hr2='$hr' WHERE user_email='".$_SESSION["user_email"]."'";
					$result2 = $conn->query($log);
					$user_logout->doLogout();
					$user_logout->redirect('../login.php');
				}
			}
		}
	}
?>