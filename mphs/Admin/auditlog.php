<?php 
session_start();
include('check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Audit Log - ADMIN</title>
    <br>
	<?php include('link.php'); ?>
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:rgb(138,138,242)">-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php"><img src="../images/ico/android-icon-48x48.png" alt="logo"><img src="../images/logo.png" alt="logo"></a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="../index.php"><i class="fa fa-home fa-fw"></i>Home</a>
						
                        <li><a href="logout.php?logout=true"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
						<center>
                            <div class="user-info">
							<font face="Verdana" size="5">
                                <div>ADMINISTRATOR</div>
							</font>
                            </div>
						</center>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li class="selected a">
                        <a href="auditlog.php"><i class="fa fa-inbox fa-fw"></i>Audit Log</a>
                    </li>
                    <li>
                        <a href="feedback.php"><i class="fa fa-rss fa-fw"></i>Feedback</a>
                    </li>
                     <li>
                        <a href="faculty.php"><i class="fa fa-table fa-fw"></i>Faculty</a>
                    </li>
                    <li>
                        <a href="subjects.php"><i class="fa fa-tasks fa-fw"></i>Subjects</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Students<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
							<!--<li>
                                <a href="3_admin_students.php">Grade 3</a>
                            </li>-->
							<li>
                                <a href="4_admin_students.php">Grade 4</a>
                            </li>
							<li>
                                <a href="5_admin_students.php">Grade 5</a>
                            </li>
							<li>
                                <a href="6_admin_students.php">Grade 6</a>
                            </li>
                            <li>
                                <a href="7_admin_students.php">Grade 7</a>
                            </li>
                            <li>
                                <a href="8_admin_students.php">Grade 8</a>
                            </li>
                            <li>
                                <a href="9_admin_students.php">Grade 9</a>
                            </li>
                            <li>
                                <a href="10_admin_students.php">Grade 10</a>
                            </li>
							<li>
                                <a href="11_admin_students.php">Grade 11</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Grades<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
                            <!--<li>
                                <a href="3_admin_grades.php">Grade 3</a>
                            </li>-->
							<li>
                                <a href="4_admin_grades.php">Grade 4</a>
                            </li>
							<li>
                                <a href="5_admin_grades.php">Grade 5</a>
                            </li>
							<li>
                                <a href="6_admin_grades.php">Grade 6</a>
                            </li>
                            <li>
                                <a href="7_admin_grades.php">Grade 7</a>
                            </li>
                            <li>
                                <a href="8_admin_grades.php">Grade 8</a>
                            </li>
                            <li>
                                <a href="9_admin_grades.php">Grade 9</a>
                            </li>
                            <li>
                                <a href="10_admin_grades.php">Grade 10</a>
                            </li>
							<li>
                                <a href="11_admin_grades.php">Grade 11</a>
                            </li>
                        </ul>
                    </li>
					<li>
					<a href="#"><i class="fa fa-edit fa-fw"></i>Updates<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="home_update.php"><i class="fa fa-home fa-fw"></i> Update Home</a>
							</li>
							<li>
								<a href="aboutus_update.php"><i class="fa fa-book fa-fw"></i> Update About Us</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-bullhorn fa-fw"></i> Update Announcements<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="events_update.php">Update Events</a>
									</li>
									<li>
										<a href="gallery_update.php">Update Gallery</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="achievers_update.php"><i class="fa fa-trophy fa-fw"></i> Update Achievers</a>
							</li>
							<li>
								<a href="contactus_update.php"><i class="fa fa-phone fa-fw"></i> Update Contact Us</a>
							</li>
						</ul>
					</li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Audit Log</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">
					Audit Log History
                </div>
				<div class="content-loader">
		<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
		<th>ID</th>
        <th>User Type</th>
        <th>Action</th>
		<th>Time</th>
        <th>Date</th>
        </tr>
        </thead>
        <tbody>
		<?php
		$sql = "SELECT * FROM audit_tbl";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
		?>
			<tr>
			<td><?php echo $row['aid']; ?></td>
            <td><?php echo $row['usertype']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo $row['time']." ".$row['hr']; ?></td>
            <td><?php echo $row['date']; ?></td>
            </tr>
		<?php
			}
		}
		?>
        </tbody>
		</table>
        </div>
		</div>
		</div>
        </div>
        </div>
</body>

</html>
