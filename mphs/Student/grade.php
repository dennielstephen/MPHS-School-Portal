<?php
session_start(); 
include('check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grades</title>
	<?php include('link.php'); ?>
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
                <a class="navbar-brand" href="index2.php"><img src="../images/ico/android-icon-48x48.png" alt="logo"><img src="../images/logo.png" alt="logo"></a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php
                    $msg = 0;
                    $sql_ses = "SELECT * FROM message_tbl";
                    $sql_ses_res = $conn->query($sql_ses);
                    if($sql_ses_res->num_rows > 0){
                        while($sql_ses_res1 = $sql_ses_res->fetch_assoc()){
                            if($sql_ses_res1['user1read']=='no'){
                                $sql = 'SELECT m1.id, m1.title, m1.timestamp, count(m2.id) as reps, users.first_name, users.last_name, users.usersid,users.user_email from message_tbl as m1, message_tbl as m2, (select sgid as usersid,user_email,user_name,first_name,last_name from stud_grade_tbl UNION select fid as usersid,user_email,user_name,first_name,last_name from faculty_tbl) as users WHERE ((m1.user1="'.$_SESSION['user_email'].'" and m1.user1read="no" and users.user_email=m1.user2) or (m1.user2="'.$_SESSION['user_email'].'" and m1.user2read="no" and users.user_email=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc';
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $msg = intval(mysqli_num_rows($result));
                                    }
                                }
                            }
                            else {
                                $sql = 'SELECT m1.id, m1.title, m1.timestamp, count(m2.id) as reps, users.first_name, users.last_name, users.usersid,users.user_email from message_tbl as m1, message_tbl as m2, (select sgid as usersid,user_email,user_name,first_name,last_name from stud_grade_tbl UNION select fid as usersid,user_email,user_name,first_name,last_name from faculty_tbl) as users WHERE ((m1.user1="'.$_SESSION['user_email'].'" and m1.user1read="no" and users.user_email=m1.user2) or (m1.user2="'.$_SESSION['user_email'].'" and m1.user2read="no" and users.user_email=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc';
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $msg = intval(mysqli_num_rows($result));
                                    }
                                }
                            }
                        }
                    }
                    if($msg >= 1){
                    ?>
                        <span class="top-label label label-danger"><?php echo $msg; ?></span><i class="fa fa-envelope fa-2x"></i>
                    <?php
                    } else {
                    ?>
                        <span class="top-label label label-danger"><?php echo $msg; ?></span><i class="fa fa-envelope-o fa-2x"></i>
                    <?php
                    }
                    ?>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php
                    $notif = 0;
                    if($notif >= 1){
                    ?>
                        <span class="top-label label label-warning"><?php echo $notif; ?></span>  <i class="fa fa-bell fa-2x"></i>
                    <?php
                    } else {
                    ?>
                        <span class="top-label label label-warning"><?php echo $notif; ?></span>  <i class="fa fa-bell-o fa-2x"></i>
                    <?php
                    }
                    ?>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="../index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                        <li><a href="user_settings.php"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
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
						<?php
						$sql = "SELECT * FROM stud_grade_tbl where user_email='".$_SESSION["user_email"]."'";
						$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc())
									{
										?>
										<img src="../uploads/<?php echo $row['user_pic'];?>" alt="" width=250 height=250 style="border-radius: 50%;"/>
										<?php
									}
								}
							?>
                            <div class="user-info">
							<div><?php
								$sql = "SELECT a.last_name,a.first_name,a.user_bio,b.section FROM stud_grade_tbl AS a INNER JOIN section_tbl AS b WHERE b.section_id=a.section_id && a.user_email='".$_SESSION["user_email"]."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc())
									{	
									echo $row['first_name'];
									echo " ";
									echo "<strong>".$row['last_name']."</strong>";
									echo "<br>";
									echo "<font size=3>";
									echo $row['section'];
									echo "<br>";
									echo $row['user_bio'];
									?>
									<a href="user_settings.php">
									<font color=black>
										<i class="fa fa-pencil"></i>
									</font>
									</a>
									<?php
									echo "</font>";
									}
								}
							?></div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
					<li>
                        <a href="subjects.php"><i class="fa fa-tasks fa-fw"></i>Subjects</a>
                    </li>
                    <li class="selected a">
                        <a href="grade.php"><i class="fa fa-flask fa-fw"></i>Grades</a>
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
                    <h1 class="page-header">Grades</h1>
                </div>
                <!--End Page Header -->
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
		<div class="content-loader">
		<table cellspacing="0" width="100%" class="table table-striped table-hover table-responsive">
        <thead class="thead">
        <tr>
		<th>Subjects</th>
        <th>1st Quarter</th>
        <th>2nd Quarter</th>
        <th>3rd Quarter</th>
		<th>4th Quarter</th>
		<th>Final Grade</th>
        </tr>
        </thead>
        <tbody>
		<?php
		$sql = "SELECT b.gid,a.user_email,a.last_name,a.first_name,c.subject,b.1stQA,b.2ndQA,b.3rdQA,b.4thQA FROM stud_grade_tbl AS a INNER JOIN grade_tbl AS b LEFT JOIN subject_tbl AS c ON b.subject_id=c.subject_id WHERE b.grade_id=a.grade_id && a.user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
		?>
			<tr id="<?php echo $row['gid']; ?>">
			<td><?php echo $row['subject']; ?></td>
            <td><?php
			if($row['1stQA']==0){
				echo "N/A";
			} else {
			echo $row['1stQA']; 
			}?></td>
			<td><?php
			if($row['2ndQA']==0){
				echo "N/A";
			} else {
			echo $row['2ndQA']; 
			}?></td>
			<td><?php
			if($row['3rdQA']==0){
				echo "N/A";
			} else {
			echo $row['3rdQA']; 
			}?></td>
			<td><?php
			if($row['4thQA']==0){
				echo "N/A";
			} else {
			echo $row['4thQA']; 
			}?></td>
			<td><?php 
			$avg = ($row['1stQA'] + $row['2ndQA'] + $row['3rdQA'] + $row['4thQA'])/4;
			if($avg==0){
				echo "N/A";
			} else {
			echo $avg; 
			}?></td>
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
		<a href="view_grade.php">
			<button class="btn btn-success">Print Grades</button>
		</a>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
	});
	</script>
</body>

</html>
