<?php
session_start();
require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Achievers</title>
    <?php include('link.php'); ?>
	<script type="text/javascript">
	$(window).load(function() {
		$(".preloader").fadeOut("slow");
	})
	</script>
</head>
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
                    <li class="active"><a href="achievers.php"><i class="fa fa-trophy"></i> <b>Achievements</b></a></li>
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
    <div class="container">
    <div class="row">
    <br>
    <section id="meet-the-team" class="row">
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=1";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=1";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=2";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=2";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=3";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=3";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=4";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=4";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=5";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=5";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                       <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=6";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=6";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                       <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=7";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=7";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=8";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=8";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                       <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=9";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=9";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                       <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=10";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=10";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                       <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=11";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=11";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
            <div class="col-xs-4">
                <div class="center">
                    <div class="portfolio-item">
                        <div class="item-inner">
						<?php 
						$sql = "SELECT ach_pic FROM achievers WHERE ach_id=12";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc())
						{
						?>
							<img class="img-responsive" src="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" alt="">
						<?php
						}
						?>
                            <div class="overlay">
								<?php 
									$sql = "SELECT ach_pic,pic_desc FROM achievers WHERE ach_id=12";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
										?>
										<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'];?>" href="images/portfolio/achievers/<?php echo $row['ach_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
										<?php
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--col-xs-4-->
        </div><!--/col-md-9-->
    </section>
    </div>
    </section>

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