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
                <li class="dropdown" style="background-color: #2980b9;">
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
                    <li>
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
                    <h1 class="page-header">New Message</h1>
                </div>
                <!--End Page Header -->
            <?php
            //We check if the user is logged
            if(isset($_SESSION['user_email']))
            {
            $form = true;
            $otitle = '';
            $orecip = '';
            $omessage = '';
            //We check if the form has been sent
            if(isset($_POST['sendmsg']))
            {
                $otitle = $_POST['title'];
                $orecip = $_POST['recip'];
                $omessage = $_POST['message'];
                //We check if all the fields are filled
                if($_POST['title']!='' and $_POST['recip']!='' and $_POST['message']!='')
                {
                    //We protect the variables
                    $title = mysqli_real_escape_string($conn, $otitle);
                    $recip = mysqli_real_escape_string($conn, $orecip);
                    $message = mysqli_real_escape_string($conn, nl2br(htmlentities($omessage, ENT_QUOTES, 'UTF-8')));
                    //We check if the recipient exists
                    $sql_query = "SELECT count(d.usersid) AS recip, d.uemail AS recipid, (SELECT count(a.id) FROM message_tbl AS a) AS npm FROM (select b.sgid AS usersid,b.user_email AS uemail,b.user_name AS uname,b.first_name AS ufname,b.last_name AS ulname FROM stud_grade_tbl AS b UNION SELECT c.fid AS usersid,c.user_email AS uemail,c.user_name AS uname,c.first_name AS ufname,c.last_name AS ulname FROM faculty_tbl AS c) AS d where uemail='".$orecip."'";
                    $resultsss = $conn->query($sql_query);
                    $dn1 = $resultsss->fetch_assoc();
                    if($dn1['recip']>0)
                    {
                        //We check if the recipient is not the actual user
                        if($dn1['recipid']!=$_SESSION['user_email'])
                        {
                            $id = $dn1['npm']+1;
                            //We send the message
                            if(mysqli_query($conn, 'INSERT INTO message_tbl (id, id2, title, user1, user2, message, timestamp, user1read, user2read)values("'.$id.'", "1", "'.$title.'", "'.$_SESSION['user_email'].'", "'.$dn1['recipid'].'", "'.$message.'", "'.time().'", "yes", "no")'))
                            {
            ?>
            <div class="message">The message has successfully been sent.<br />
            <a href="msgs.php">List of my personnal messages</a></div>
            <?php
                                $form = false;
                            }
                            else
                            {
                                //Otherwise, we say that an error occured
                                $error = 'An error occurred while sending the message';
                            }
                        }
                        else
                        {
                            //Otherwise, we say the user cannot send a message to himself
                            $error = 'You cannot send a message to yourself.';
                        }
                    }
                    else
                    {
                        //Otherwise, we say the recipient does not exists
                        $error = 'The recipient does not exists.';
                    }
                }
                else
                {
                    //Otherwise, we say a field is empty
                    $error = 'A field is empty. Please fill of the fields.';
                }
            }
            elseif(isset($_GET['recip']))
            {
                //We get the username for the recipient if available
                $orecip = $_GET['recip'];
            }
            if($form)
            {
            //We display a message if necessary
            if(isset($error))
            {
                echo '<div class="message">'.$error.'</div>';
            }
            //We display the form
            ?>
            <div class="content">
                <h1>New Personnal Message</h1>
                <form action="new_msgs.php" method="post">
                    Please fill the following form to send a personnal message.<br />
                    <label for="title">Title</label><input type="text" value="<?php echo htmlentities($otitle, ENT_QUOTES, 'UTF-8'); ?>" id="title" name="title" /><br />
                    <label for="recip">Recipient<span class="small">(User email)</span></label><input type="text" value="<?php echo htmlentities($orecip, ENT_QUOTES, 'UTF-8'); ?>" id="recip" name="recip" /><br />
                    <label for="message">Message</label><textarea cols="40" rows="5" id="message" name="message"><?php echo htmlentities($omessage, ENT_QUOTES, 'UTF-8'); ?></textarea><br />
                    <input type="submit" value="Send" name="sendmsg"/>
                </form>
            </div>
            <?php
            }
            }
            else
            {
                echo '<div class="message">You must be logged to access this page.</div>';
            }
            ?>
            <div>
                <a id="gototop" class="gototop" href="#"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>
        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->
</body>
</html>