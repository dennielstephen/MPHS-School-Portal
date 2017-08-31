<?php
session_start(); 
include('check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	<?php include('link.php'); ?>
</head>
<body onload="onLoadPage()">
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
                <a class="navbar-brand" href="index.php"><img src="../images/ico/android-icon-48x48.png" alt="logo"><img src="../images/logo.png" alt="logo"></a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a href="msgs.php">
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
						$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
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
                    <li class="selected a">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
					<li>
                        <a href="subjects.php"><i class="fa fa-tasks fa-fw"></i>Subjects</a>
                    </li>
                    <li>
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div> <!-- POST -->
                <div class="sidepost panel-body sp1-1">
                    <div class="sp1-2">
                        <center><b>ANNOUNCEMENTS</b></center>
                    </div>
                    <div class="sp1-3">
                        <?php
                        $query=mysqli_query($conn,"SELECT Announcement FROM announcements");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['Announcement'];
                        }
                        ?>
                    </div>
                </div>
                <div class="sidepost2 panel-body sp1-1">
                    <div class="sp1-2">
                        <center><b>EVENTS</b></center>
                    </div>
                    <div class="sp1-3">
                        <?php
                        $query=mysqli_query($conn,"SELECT Events FROM announcements");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['Events'];
                        }
                        ?>
                    </div>
                </div>
                <div class="sidepost3 panel-body sp1-1">
                    <form method="post">
                    <div class="sp1-2">
                        <center><b>FEEDBACK</b></center>
                    </div>
                    <div class="sp1-3">
                        <textarea class="txtfeedback" name="feedback" id="feedback" onkeyup="textFeedbackAdjust(this)"></textarea>
                        <br>
                        <center><button name="sendfeedback">SUBMIT</button></center>
                    </div>
                    </form>
                </div>
            <div class="posts">
            <div class="row">
                <div class="col-lg-8">
                <form action="insert_post.php" method="POST">
                    <textarea class="txtpost" name="txtpost" id="txtpost" onfocus="myFocus(this)" onblur="myBlur(this)" onkeyup="textAreaAdjust(this)" placeholder="What's on your mind?"></textarea>
                    <center><input type="submit" class="sendpost" name="posts" id="sendpost" class="btn btn-default"></center>
                </form>
                </div>
            </div>
            </div>
            <!-- END POST -->
            <!-- Status -->
            <div>
                <?php
                $query=mysqli_query($conn,"SELECT * FROM post_tbl ORDER BY post_id DESC");
                while($row=mysqli_fetch_array($query)){
                    if ($row['user_email'] == $_SESSION['user_email']) {
                ?>
                <div class="panel-body post">
                <p class="text-right"><a href="delete_post.php?deleted=1&id=<?php echo $row['post_id']; ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="fa fa-times"></span></a></p>
                <div class="postname">
                        <img src="../uploads/<?php echo $row['user_pic'];?>" width="60" height="60">  &nbsp; 
                        <b><?php echo $row['ufname']." ".$row['ulname'];?> </b>
                        <?php
                        echo "(";
                        include("timestamp.php");
                        echo ")";
                        ?></div>
                <div class="posttxt">
                        <p>&nbsp;&nbsp;<?php echo $row['post_msg']; ?></p>
                    </div>
                        <button name="like"><i class="fa fa-thumbs-up"> <b>Like</b></i></button>
                        <button name="comm"><i class="fa fa-comments"> <b>Comment</b></i></button>
                        <p><?php echo $row['likes']; ?> people like this</p>
                    </div>
                <?php
                    } else {
                ?>
                    <div class="panel-body post">
                    <div class="postname">
                    <img src="../uploads/<?php echo $row['user_pic'];?>" width="60" height="60">  &nbsp; 
                        <b><?php echo $row['ufname']." ".$row['ulname'];?> </b>
                        <?php
                        echo "("; include("timestamp.php"); echo ")";
                        ?></div>
                    <div class="posttxt">
                        <p>&nbsp;&nbsp;<?php echo $row['post_msg']; ?></p>
                    </div>
                        <button name="like"><i class="fa fa-thumbs-up"> <b>Like</b></i></button>
                        <button name="comm"><i class="fa fa-comments"> <b>Comment</b></i></button>
                        <p><?php echo $row['likes']; ?> people like this</p>
                    </div>
                <?php   
                }
                }
                ?>
            </div><!-- end status -->
            <div>
                <a id="gototop" class="gototop" href="#"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>
        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->
</body>
</html>
<?php
if(isset($_POST['sendfeedback'])){
    $feedback = $_POST['feedback'];
    $sql2 = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
    $result = $conn->query($sql2);
    $row = $result->fetch_assoc();

    

    $sql = "INSERT INTO feedback_tbl VALUES('','".$row['first_name']."','".$row['last_name']."','$feedback')";
    if($conn->query($sql)){
        ?>
        <script type="text/javascript">
            alert("Your feedback has been sent!")
        </script>
        <?php
    }
}
?>