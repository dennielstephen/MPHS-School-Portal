<?php
session_start(); 
require('conn.php');
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
                <a class="navbar-brand" href="teacher.php"><img src="../images/ico/android-icon-48x48.png" alt="logo"><img src="../images/logo.png" alt="logo"></a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="../index.php"><i class="fa fa-home fa-fw"></i>Home</a>
						<li><a href="user_settings.php"><i class="fa fa-gear fa-fw"></i>Settings</a>
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
						$sql = "SELECT * FROM faculty_tbl where user_email='".$_SESSION["user_email"]."'";
						$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc())
									{
										?>
										<img src="../uploads/<?php echo $row['user_pic'];?>" alt="" width=250 height=250 style="border-radius: 100%;"/>
										<?php
									}
								}
							?>
                            <div class="user-info">
                            <div><?php
								$sql = "SELECT * FROM faculty_tbl where user_email='".$_SESSION["user_email"]."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc())
									{	
									echo $row['first_name'];
									echo " ";
									echo "<strong>".$row['last_name']."</strong>";
									echo "<br>";
									echo "<font size=3>";
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
                        <a href="teacher.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>Students<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>Pre-School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <!--<li>
                                        <a href="k1_teacher_students.php">Kinder 1</a>
                                    </li>-->
                                    <!--<li>
                                        <a href="k2_teacher_students.php">Kinder 2</a>
                                    </li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>Elementary<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <!--<li>
                                        <a href="1_teacher_students.php">Grade 1</a>
                                    </li>-->
                                    <!--<li>
                                        <a href="2_teacher_students.php">Grade 2</a>
                                    </li>-->
                                    <!--<li>
                                        <a href="3_teacher_students.php">Grade 3</a>
                                    </li>-->
                                    <li>
                                        <a href="4_teacher_students.php">Grade 4</a>
                                    </li>
                                    <li>
                                        <a href="5_teacher_students.php">Grade 5</a>
                                    </li>
                                    <li>
                                        <a href="6_teacher_students.php">Grade 6</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>High School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="7_teacher_students.php">Grade 7</a>
                                    </li>
                                    <li>
                                        <a href="8_teacher_students.php">Grade 8</a>
                                    </li>
                                    <li>
                                        <a href="9_teacher_students.php">Grade 9</a>
                                    </li>
                                    <li>
                                        <a href="10_teacher_students.php">Grade 10</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>Senior High School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="11_teacher_students.php">Grade 11</a>
                                    </li>
                                    <!--<li>
                                        <a href="12_teacher_students.php">Grade 12</a>
                                    </li>-->
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Grades<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>Pre-School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <!--<li>
                                        <a href="k1_teacher_grades.php">Kinder 1</a>
                                    </li>-->
                                    <!--<li>
                                        <a href="k2_teacher_grades.php">Kinder 2</a>
                                    </li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>Elementary<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <!--<li>
                                        <a href="1_teacher_grades.php">Grade 1</a>
                                    </li>-->
                                    <!--<li>
                                        <a href="2_teacher_grades.php">Grade 2</a>
                                    </li>-->
                                    <!--<li>
                                        <a href="3_teacher_grades.php">Grade 3</a>
                                    </li>-->
                                    <li>
                                        <a href="4_teacher_grades.php">Grade 4</a>
                                    </li>
                                    <li>
                                        <a href="5_teacher_grades.php">Grade 5</a>
                                    </li>
                                    <li>
                                        <a href="6_teacher_grades.php">Grade 6</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>High School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="7_teacher_grades.php">Grade 7</a>
                                    </li>
                                    <li>
                                        <a href="8_teacher_grades.php">Grade 8</a>
                                    </li>
                                    <li>
                                        <a href="9_teacher_grades.php">Grade 9</a>
                                    </li>
                                    <li>
                                        <a href="10_teacher_grades.php">Grade 10</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o fa-fw"></i>Senior High School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="11_teacher_grades.php">Grade 11</a>
                                    </li>
                                    <!--<li>
                                        <a href="12_teacher_grades.php">Grade 12</a>
                                    </li>-->
                                </ul>
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
                <form method="POST">
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
if(isset($_POST['posts']))
{
    

    $sql2 = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
    $result = $conn->query($sql2);
    $row = $result->fetch_assoc();

    $txtpost = $_POST['txtpost'];
    $d=strtotime("+8 Hours");
    $time = date("g:i:s",$d);
    $hr = date("A",$d);
        
    $sql = "INSERT INTO post_tbl(post_id,user_email,user_pic,ufname,ulname,post_msg,post_time) VALUES('','".$row['user_email']."','".$row['user_pic']."','".$row['first_name']."','".$row['last_name']."','$txtpost','".time()."')";
    if($conn->query($sql)){
        header('refresh:0; teacher.php');
    }
}
?>
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