<?php
ob_start();
session_start();
require('conn.php');
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: Student/index.php');
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: Faculty/teacher.php');
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM admin_table WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: Admin/admin.php');
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php require('link.php'); ?>
    <link href="css/login.css" rel="stylesheet">
	<script type="text/javascript">
	$(window).load(function() {
		$(".preloader").fadeOut("slow");
	})
	</script>
</head><!--/head-->
<body class="concrete">
	<div class="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top abcdefg" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/ico/android-icon-48x48.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="aboutus.php"><i class="icon-book"></i> About Us</a></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn fa-fw"></i> Announcements&nbsp;<span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="announcements.php"><i class="fa fa-calendar"></i> Events</a>
                        </li>
                        <li>
                            <a href="gallery.php"><i class="fa fa-picture-o"></i> Gallery</a>
                        </li>
                    </ul>
                    </li>
                    <li><a href="achievers.php"><i class="fa fa-trophy"></i> Achievements</a></li>
                    <li><a href="contactus.php"><i class="fa fa-phone"></i> Contact Us</a></li>
                    <li class="active"><a href="login.php"><i class="fa fa-sign-in"></i> <b>Log-in</b></a></li> 
                </ul>
            </div>
        </div>
    </header><!--/header-->
<br>
<link rel="stylesheet" type="text/css" href="login.css" />
    <div class="container">
		<center><img src="pictures/head.png"></center>
        <form class="form-signin" id="login-form" method="post">
	<form method="POST">
		<label for="right-label" class="right inline">E-Mail</label>
        <input type="text" id="email" class="form-control" name="txt_uname_email" placeholder="E-mail" required autofocus/>
        <span id="check-e"></span>
		
		<label for="right-label" class="right inline">Password</label>
        <input type="password" id="password" class="form-control" name="txt_password" placeholder="Your Password" required />
		
			<select name="slc">
			<option value="FSO" selected="selected">---</option>
			<option value="std">Student</option>
			<option value="tch">Teacher</option>
			<option value="admin">Administrator</option>
			</select>
			
		<br>
		<br>
		<center>
        <button type="submit" name="btn-login" class="btn btn-info" style="border-radius: 50px;">
            <i class="glyphicon glyphicon-log-in"></i> &nbsp; LOG IN
        </button>
        <button type="reset" name="btn-reset" class="btn btn-danger" style="border-radius: 50px;">
        	<i class="fa fa-repeat"></i> &nbsp; RESET
        </button>
        </center>
	</div>
	</form>
	</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['btn-login']))
{
	
	$slc = $_POST['slc'];
	$user_email = strip_tags($_POST['txt_uname_email']);
	$user_password = strip_tags($_POST['txt_password']);

	if(($slc) == 'admin'){
		$sql="SELECT * FROM admin_table WHERE (user_email='$user_email' AND dec_pass='$user_password')";
		$res = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($res);
		$id=$row[0];
		$user_email=$row[4];
		if($row[0] > 0){
			$_SESSION["user_email"]=$user_email;
			$_SESSION["aid"]=$id;
			header('location: Admin/admin.php');
		}
		else{
			echo "<script>alert('Your email or password is incorrect.');window.location.href='login.php'</script>";
		}
	}
//------------------------------------------------------------------------
	if(($slc) == 'tch'){
		$sql="SELECT * FROM faculty_tbl WHERE (user_email='$user_email' AND dec_pass='$user_password')";
		$res = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($res);
		$id=$row[0];
		$user_email=$row[10];
		if($row[0] > 0){
			$_SESSION["user_email"]=$user_email;
			$_SESSION["fid"]=$id;
			header('location: Faculty/teacher.php');
		}
		else{
			echo "<script>alert('Your email or password is incorrect.');window.location.href='login.php'</script>";
		}
	}
//------------------------------------------------------------------------
	if(($slc) == 'std') {
		$sql="SELECT * FROM stud_grade_tbl WHERE (user_email='$user_email' AND dec_pass='$user_password')";
		$res = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($res);
		$id=$row[0];
		$user_email=$row[10];
		if($row[0] > 0){
			$_SESSION["user_email"]=$user_email;
			$_SESSION["sgid"]=$id;
			header('location: Student/index.php');
		}
		else{
			echo "<script>alert('Your username or password is incorrect.');window.location.href='login.php'</script>";
		}
	}
}
?>