<?php
session_start();
require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <?php include('link.php'); ?>
	<?php include('gallery_link.php'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link href="css/slider.css" rel="stylesheet" type="text/css" />-->
	<link rel="stylesheet" type="text/css" href="ach.css" />
	<link href="samsli.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	$(window).load(function() {
		$(".preloader").fadeOut("slow");
	});
	
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
                    <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn fa-fw"></i> <b>Announcements</b>&nbsp;<span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="announcements.php"><i class="fa fa-calendar"></i> Events</a>
                        </li>
                        <li class="selected a">
                            <a href="gallery.php"><i class="fa fa-picture-o"></i> <b>Gallery</b></a>
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

	<!--<div class="w3-content" style="max-width:545px;position:relative;height:450px;">
	<div class="w3-display-container mySlides">
		<img id="1" src="pictures/recent/<?php 
		
		$sql = "SELECT * FROM gallery_tbl WHERE galid=1";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_pic'];
		}
		?>" alt="" width=545 height=400/>
		<div class="w3-display-center w3-large w3-container w3-padding-16 w3-black">
		<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=1";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_desc'];
		}
		?>
		</div>
	</div>
	<div class="w3-display-container mySlides">
		<img id="2" src="pictures/recent/<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=2";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_pic'];
		}
		?>" alt="" width=545 height=400/>
		<div class="w3-display-center w3-large w3-container w3-padding-16 w3-black">
		<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=2";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_desc'];
		}
		?>
		</div>
	</div>
	<div class="w3-display-container mySlides">
		<img id="2" src="pictures/recent/<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=3";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_pic'];
		}
		?>" alt="" width=545 height=400/>
		<div class="w3-display-center w3-large w3-container w3-padding-16 w3-black">
		<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=3";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_desc'];
		}
		?>
		</div>
	</div>
	<div class="w3-display-container mySlides">
		<img id="2" src="pictures/recent/<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=4";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_pic'];
		}
		?>" alt="" width=545 height=400/>
		<div class="w3-display-center w3-large w3-container w3-padding-16 w3-black">
		<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=4";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_desc'];
		}
		?>
		</div>
	</div>
	<div class="w3-display-container mySlides">
		<img id="2" src="pictures/recent/<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=5";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_pic'];
		}
		?>" alt="" width=545 height=400/>
		<div class="w3-display-center w3-large w3-container w3-padding-16 w3-black">
		<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=5";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_desc'];
		}
		?>
		</div>
	</div>
	<div class="w3-display-container mySlides">
		<img id="2" src="pictures/recent/<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=6";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_pic'];
		}
		?>" alt="" width=545 height=400/>
		<div class="w3-display-center w3-large w3-container w3-padding-16 w3-black">
		<?php 
		$sql = "SELECT * FROM gallery_tbl WHERE galid=6";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		echo $row['gallery_desc'];
		}
		?>
		</div>
	</div>-->
		<!-- Carousel nav -->
		<!--<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
		<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>	
	</div>
	<?php include('slider.php'); ?>-->
	<div id="sample_slider">
		<figure>
			<img src="uploads/user.jpg" width=250 height=400 />
			<img src="uploads/user.jpg" width=250 height=400 />
			<img src="uploads/user.jpg" width=250 height=400 />
			<img src="uploads/user.jpg" width=250 height=400 />
			<img src="uploads/user.jpg" width=250 height=400 />
		</figure>
	</div>
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

    </body>
</html>