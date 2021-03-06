<?php
session_start(); 
include('check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grades - ADMIN</title>
    <br>
	<?php include('link.php'); ?>
	<script type="text/javascript" src="crud_grades.js"></script>
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
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
						<li class="divider"></li>
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
                    <li>
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
                    <li class="active selected a">
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Grades<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
                            <li class="selected a">
                                <a href="3_admin_grades.php">Grade 3</a>
                            </li>
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
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Grade 3</h1>
                </div>
                 <!-- end  page header -->
            </div>
			<form action="import_files/import_grades.php" method="post" name="upload_excel" enctype="multipart/form-data">
                <input type="file" name="file" id="file">
                <button style="outline: none;" class="btn btn-success" type="submit" name="Import" id="submit"> <span class="fa fa-refresh"></span> &nbsp; Import</button>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Student Table
                        </div>
		<div class="content-loader">
		<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
		<th>ID</th>
        <th>Name</th>
		<th>Subjects</th>
        <th>1st Quarter</th>
        <th>2nd Quarter</th>
        <th>3rd Quarter</th>
        <th>4th Quarter</th>
		<th>Final Grade</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'connection.php';
        $stmt = $db_con->prepare("SELECT DISTINCT b.gid,b.subject_id,a.last_name,a.first_name,d.subject,b.1stQA,b.2ndQA,b.3rdQA,b.4thQA FROM stud_grade_tbl AS a INNER JOIN grade_tbl AS b LEFT JOIN faculty_tbl AS c ON c.subject_id=b.subject_id LEFT JOIN subject_tbl AS d ON d.subject_id=b.subject_id WHERE b.grade_id=a.grade_id && a.section_id = '005'");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
            <td><?php echo $row['gid']; ?></td>
			<td><?php echo $row['last_name'].", ".$row['first_name']; ?></td>
			<td><?php echo $row['subject']; ?></td>
			<td><?php echo $row['1stQA']; ?></td>
            <td><?php echo $row['2ndQA']; ?></td>
            <td><?php echo $row['3rdQA']; ?></td>
            <td><?php echo $row['4thQA']; ?></td>
			<td><?php
			$avg = ($row['1stQA']+$row['2ndQA']+$row['3rdQA']+$row['4thQA'])/4;
			$english_format_number = number_format($avg, 2, '.', '');
			echo $english_format_number; 
			?></td>
			<td align="center">	
			<a id="<?php echo $row['gid']; ?>" class="edit-link" href="#" title="Edit">
			<i class="fa fa-pencil"></i>
			</a></td>
			<td align="center">
			<a id="<?php echo $row['gid']; ?>" class="delete-link" href="#" title="Delete">
			<i class="fa fa-trash-o"></i>
            </a></td>
			</tr>
			<?php
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