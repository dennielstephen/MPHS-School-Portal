<?php
session_start();
require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <?php include('link.php'); ?>
</head><!--/head-->
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$("mtt").hide("fast");
    $("button").click(function(){
        $("mtt").toggle("slow");
    });
});
$(window).load(function() {
	$(".preloader").fadeOut("slow");
});
</script>
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
                    <li class="active"><a href="aboutus.php"><i class="icon-book"></i> <b>About Us</b></a></li>
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
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->
		
    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6.2">
                <h2>Mission</h2>
                <ul><li><?php
                include_once('connection.php');
					$getUsers = $db_con->prepare("SELECT Mission FROM aboutus WHERE about_id=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Mission'];
					}
					$getUsers = $db_con->prepare("SELECT Mission FROM aboutus WHERE about_id=2");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Mission'];
					}
				?></li><br />

				<li><?php
					$getUsers = $db_con->prepare("SELECT Mission FROM aboutus WHERE about_id=3");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Mission'];
					}
				?></li>
            </div><!--/.col-sm-6.2-->
            <div class="col-sm-6.2">
                <h2>Vision</h2>
                <ul><li><?php
					$getUsers = $db_con->prepare("SELECT Vision FROM aboutus");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Vision'];
					}
				?></li>
            </div><!--/.col-sm-6.2-->
            <div class="col-sm-6.3">
                <h2>History</h2>
                <p><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br>
 				<br>
				<?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=2");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=3");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=4");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=5");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=6");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=7");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=8");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=9");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=10");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=11");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=12");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=13");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=14");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
				<br><br><?php
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=15");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
					$getUsers = $db_con->prepare("SELECT History FROM aboutus WHERE about_id=16");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['History'];
					}
				?>
            </div><!--/.col-sm-6.3-->
            <div class="col-sm-6.4">
                <h2>Objectives</h2>
                <p><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li><br /><br />

				<b><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=2");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></b>

				<ul><li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=3");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=4");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=5");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=6");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=7");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=8");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=9");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=10");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=11");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=12");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=13");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=14");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=15");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT Objectives FROM aboutus WHERE about_id=16");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['Objectives'];
					}
				?></li>
            </div><!--/.col-sm-6.4-->
            <div class="col-sm-6.2">
                <h2>Requirements / Process of Enrollment</h2>
                <ul><li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<ul><li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=2");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=3");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=4");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=5");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=6");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				</ul>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=7");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<ul><li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=8");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=9");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=10");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=11");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=12");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				<li><?php
					$getUsers = $db_con->prepare("SELECT PoE FROM aboutus WHERE about_id=13");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['PoE'];
					}
				?></li>
				</ul>
            </div><!--/.col-sm-6.2-->
        </div><!--/.row-->

        <div class="gap"></div>
		<div class="center">
        <button id="SS">School Staff</button>
		</div>
        <br>
		
		<mtt>
        <div id="meet-the-team" class="row">
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=1";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=2";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=2");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=1");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=3";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=3");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=3");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=4";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=4");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=4");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=5";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=5");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=5");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=6";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=6");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=6");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=7";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=7");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=7");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=8";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=8");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=8");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=9";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=9");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=9");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=10";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=10");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=10");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=11";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=11");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=11");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=12";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=12");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=12");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=13";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=13");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=13");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=14";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=14");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=14");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=15";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=15");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=15");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=16";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=16");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=16");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=17";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=17");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=17");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=18";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=18");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=18");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
			<div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><?php 
						$sql = "SELECT staff_pic FROM staff_table WHERE stfid=19";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive img-thumbnail img-circle" src="images/<?php echo $row['staff_pic'];?>" alt=""/>
						<?php
						}
						?>
					</p>
                    <h5><?php
					$getUsers = $db_con->prepare("SELECT full_name FROM staff_table WHERE stfid=19");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['full_name'];
					}
					?>
					<br>
					<small class="sml" style="color: black; font-weight: bold;"><?php
					$getUsers = $db_con->prepare("SELECT position FROM staff_table WHERE stfid=19");
					$getUsers->execute();
					$users = $getUsers->fetchAll();
					foreach ($users as $user) {
						echo $user['position'];
					}
					?>
					</small></h5>
                </div>
            </div>
        </div><!--/#meet-the-team-->
		</mtt>
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