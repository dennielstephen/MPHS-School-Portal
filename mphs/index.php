<?php
session_start();
require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php require('link.php'); ?>	
	<link href="css/main.css" rel="stylesheet">
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
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i> <b>Home</b></a></li>
                    <li><a href="aboutus.php"><i class="fa fa-book"></i> About Us</a></li>
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
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
			<?php 
				
				$sql = "SELECT index_pic FROM index_tbl WHERE iid=7";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc())
				{
					?>
					<div class="item active" style="background-image: url(images/<?php echo $row['index_pic']; ?>)">
					<?php
				}
			?>
			
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1"><?php 
									$sql = "SELECT text FROM index_tbl WHERE iid=1";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
									echo $row['text'];
									}
									?></h2>
                                    <br>
                                    <p class="boxed animation animated-item-2">
									<?php 
									$sql = "SELECT text FROM index_tbl WHERE iid=7";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
									echo $row['text'];
									}
									?>
									</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <?php 
					$sql = "SELECT index_pic FROM index_tbl WHERE iid=7";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
						?>
						<div class="item" style="background-image: url(images/<?php echo $row['index_pic']; ?>)">
						<?php
					}
				?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered" style="margin-top: 189.5px;">
                                    <h2 class="boxed animation animated-item-1">
									<?php 
									echo "Mission";
									?>
									</h2>
                                    <p class="boxed animation animated-item-2">
									<?php 
									$sql = "SELECT Mission FROM aboutus WHERE about_id=1";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
									echo $row['Mission'];
									}
									?>
									<?php 
									$sql = "SELECT Mission FROM aboutus WHERE about_id=2";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
									echo $row['Mission'];
									}
									?>
									</p>
									<p class="boxed animation animated-item-2">
									<?php 
									$sql = "SELECT Mission FROM aboutus WHERE about_id=3";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
									echo $row['Mission'];
									}
									?>
									</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <?php
					$sql = "SELECT index_pic FROM index_tbl WHERE iid=7";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
						?>
					<div class="item" style="background-image: url(images/<?php echo $row['index_pic']; ?>)">
						<?php
					}
				?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered" style="margin-top: 189.5px;">
                                    <h2 class="boxed animation animated-item-1">
									<?php 
									echo "Vision";
									?>
									</h2>
									<br>
                                    <p class="boxed animation animated-item-2">
									<?php 
									$sql = "SELECT Vision FROM aboutus WHERE about_id=1";
									$result = $conn->query($sql);
									while($row = $result->fetch_assoc())
									{
									echo $row['Vision'];
									}
									?>
									</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
		<a>
		</a>
    </section><!--/#main-slider-->
	
    <section id="recent-works">
	<center><h2>SCHOOL FACILITIES</h2></center>
	<br />
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
												<?php 
													$sql = "SELECT index_pic FROM index_tbl WHERE iid=1";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
													?>
														<img class="img-responsive" src="images/portfolio/recent/<?php echo $row['index_pic'];?>" alt="">
													<?php
													}
												?>
                                                <div class="overlay">
												<?php 
													$sql = "SELECT index_pic,pic_desc,desc_pic FROM index_tbl WHERE iid=1";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
														?>
														<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'].'<br>'.$row['desc_pic'];?>" href="images/portfolio/full/<?php echo $row['index_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
														<?php
													}
												?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
												<?php 
													$sql = "SELECT index_pic FROM index_tbl WHERE iid=2";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
													?>
														<img class="img-responsive" src="images/portfolio/recent/<?php echo $row['index_pic'];?>" alt="">
													<?php
													}
												?>
                                                <div class="overlay">
												<?php 
													$sql = "SELECT index_pic,pic_desc,desc_pic FROM index_tbl WHERE iid=2";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
														?>
														<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'].'<br>'.$row['desc_pic'];?>" href="images/portfolio/full/<?php echo $row['index_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
														<?php
													}
												?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
												<?php 
													$sql = "SELECT index_pic FROM index_tbl WHERE iid=3";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
													?>
														<img class="img-responsive" src="images/portfolio/recent/<?php echo $row['index_pic'];?>" alt="">
													<?php
													}
												?>
                                                <div class="overlay">
												<?php 
													$sql = "SELECT index_pic,pic_desc,desc_pic FROM index_tbl WHERE iid=3";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
														?>
														<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'].'<br>'.$row['desc_pic'];?>" href="images/portfolio/full/<?php echo $row['index_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
														<?php
													}
												?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
												<?php 
													$sql = "SELECT index_pic FROM index_tbl WHERE iid=4";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
													?>
														<img class="img-responsive" src="images/portfolio/recent/<?php echo $row['index_pic'];?>" alt="">
													<?php
													}
												?>
                                                <div class="overlay">
												<?php 
													$sql = "SELECT index_pic,pic_desc,desc_pic FROM index_tbl WHERE iid=4";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
														?>
														<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'].'<br>'.$row['desc_pic'];?>" href="images/portfolio/full/<?php echo $row['index_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
														<?php
													}
												?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
												<?php 
													$sql = "SELECT index_pic FROM index_tbl WHERE iid=5";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
													?>
														<img class="img-responsive" src="images/portfolio/recent/<?php echo $row['index_pic'];?>" alt="">
													<?php
													}
												?>
                                                <div class="overlay">
												<?php 
													$sql = "SELECT index_pic,pic_desc,desc_pic FROM index_tbl WHERE iid=5";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
														?>
														<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'].'<br>'.$row['desc_pic'];?>" href="images/portfolio/full/<?php echo $row['index_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
														<?php
													}
												?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
												<?php 
													$sql = "SELECT index_pic FROM index_tbl WHERE iid=6";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
													?>
														<img class="img-responsive" src="images/portfolio/recent/<?php echo $row['index_pic'];?>" alt="">
													<?php
													}
												?>
                                                <div class="overlay">
												<?php 
													$sql = "SELECT index_pic,pic_desc,desc_pic FROM index_tbl WHERE iid=6";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc())
													{
														?>
														<a class="preview btn btn-danger" title="<?php echo $row['pic_desc'].'<br>'.$row['desc_pic'];?>" href="images/portfolio/full/<?php echo $row['index_pic'];?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
														<?php
													}
												?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
					<button class="button button1" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></button>
					<button class="button button1" href="#scroller" data-slide="next" style="float: right"><i class="icon-angle-right"></i></button>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <footer id="footer" class="abcdefg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © 1990 Mother of Perpetual Help School, Inc. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	<div>
		<a id="gototop" class="gototop" href="#"><i class="fa fa-angle-up fa-3x"></i></a>
	</div>

</body></html>