<?php
session_start();
require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
	<?php include('link.php'); ?>
	<script type="text/javascript">
	$(window).load(function() {
		$(".preloader").fadeOut("slow");
	})
	</script>
</head><!--/head-->
<body>
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
                    <li class="active"><a href="contactus.php"><i class="fa fa-phone"></i> <b>Contact Us</b></a></li>
                    <!--Log-in/Log-out-->
                    <?php if(!isset($_SESSION['user_email'])){?>
                    <li><a href="login.php"><i class="fa fa-sign-in"></i> Log-in</a></li>
                    <?php } else { ?>
                    <li><a href="login.php"><?php include('check2.php'); ?></a></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php?logout=true"><i class="fa fa-sign-out"></i> Log-out</a></li>
                    </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header><!--/header-->

	<link rel="stylesheet" type="text/css" href="ach.css" />
    <section id="title" class="green-sea">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contact Us</h1>
                    <li><?php
					include_once 'connection.php';
					$getUsers = $db_con->prepare("SELECT Address FROM contactus");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Address'];
					}
					?></li>
					<li><?php
					$getUsers = $db_con->prepare("SELECT Contact FROM contactus");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Contact'];
					}
					?></li>
                </div>
            </div>
        </div>
    </section><!--/#title-->
	
    <section id="about-us" class="container">
	<center>
        <div class="row">
		<p><iframe width="800" height="360" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
        <iframe src="https://www.google.com.ph/maps/d/embed?mid=1pLvVmWuHW8tAjXgTJ8HLgnu42t8" width="640" height="480"></iframe><br /><small> <a href="https://www.google.com.ph/maps/d/embed?mid=1pLvVmWuHW8tAjXgTJ8HLgnu42t8" style="color:#0000FF;text-align:left"></small></iframe></p></a>
    </center>
    </section><!--/#about-us-->

    <footer id="footer" class="abcdefg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © 1990 Mother of Perpetual Help School, Inc. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
	<a id="gototop" class="gototop" href="#"><i class="fa fa-angle-up fa-3x"></i></a>

</body></html>
<?php
if(isset($_POST['sendfeedback'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $feedback = $_POST['feedback'];

    

    $sql = "INSERT INTO feedback_tbl VALUES('','$fname','$lname','$feedback')";
    if($conn->query($sql)){
        ?>
        <script type="text/javascript">
            alert("Your feedback has been sent!")
        </script>
        <?php
    }
}
?>