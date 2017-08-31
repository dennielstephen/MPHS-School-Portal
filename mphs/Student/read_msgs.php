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
                    <h1 class="page-header">Messages</h1>
                </div>
                <!--End Page Header -->
            <?php
            //We check if the user is logged
            if(isset($_SESSION['user_email']))
            {
            //We check if the ID of the discussion is defined
            if(isset($_GET['id']))
            {
            $id = intval($_GET['id']);
            //We get the title and the narators of the discussion
            $req1 = 'select title, user1, user2 from message_tbl where id="'.$id.'" and id2="1"';
            $dn1 = $conn->query($req1);
            //We check if the discussion exists
            if(mysqli_num_rows($dn1)==1)
            {
            while($dn1_res = $dn1->fetch_assoc()){
            //We check if the user have the right to read this discussion
            if($dn1_res['user1']==$_SESSION['user_email'] or $dn1_res['user2']==$_SESSION['user_email'])
            {
            //The discussion will be placed in read messages
            if($dn1_res['user1']==$_SESSION['user_email'])
            {
                mysqli_query($conn, 'update message_tbl set user1read="yes" where id="'.$id.'" and id2="1"');
                $user_partic = 2;
            }
            else
            {
                mysqli_query($conn, 'update message_tbl set user2read="yes" where id="'.$id.'" and id2="1"');
                $user_partic = 1;
            }
            //We get the list of the messages
            $req2 = 'SELECT message_tbl.timestamp, message_tbl.message, users.usersid as userid, users.user_email from message_tbl, (select sgid as usersid,user_email,user_name,first_name,last_name from stud_grade_tbl UNION select fid as usersid,user_email,user_name,first_name,last_name from faculty_tbl) as users where message_tbl.id="'.$id.'" and users.user_email=message_tbl.user1 order by message_tbl.id2';
            $dn2 = $conn->query($req2);
            //We check if the form has been sent
            if(isset($_POST['message']) and $_POST['message']!='')
            {
                $message = $_POST['message'];
                //We remove slashes depending on the configuration
                if(get_magic_quotes_gpc())
                {
                    $message = stripslashes($message);
                }
                //We protect the variables
                $message = mysqli_real_escape_string($conn, nl2br(htmlentities($message, ENT_QUOTES, 'UTF-8')));
                //We send the message and we change the status of the discussion to unread for the recipient
                if(mysqli_query($conn, 'insert into message_tbl (id, id2, title, user1, user2, message, timestamp, user1read, user2read)values("'.$id.'", "'.(intval(mysqli_num_rows($dn2))+1).'", "", "'.$_SESSION['user_email'].'", "", "'.$message.'", "'.time().'", "", "")') and mysqli_query($conn, 'update message_tbl set user'.$user_partic.'read="no" where id="'.$id.'" and id2="1"'))
                {
            ?>
            <div class="message">Your message has successfully been sent.<br />
            <a href="read_msgs.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
            <?php
                }
                else
                {
            ?>
            <div class="message">An error occurred while sending the message.<br />
            <a href="read_msgs.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
            <?php
                }
            }
            else
            {
            //We display the messages
            ?>
            <div class="content">
            <h1><?php echo $dn1_res['title']; ?></h1>
            <table class="messages_table">
                <tr>
                    <th class="author">User</th>
                    <th class="center">Message</th>
                </tr>
            <?php
            while($dn2_res = $dn2->fetch_array())
            {
            ?>
                <tr>
                    <td class="author center"><br /><?php echo $dn2_res['user_email']; ?></td>
                    <td class="left"><div class="date">Sent: <?php echo date('m/d/Y h:i:s A' ,$dn2_res['timestamp']); ?></div>
                    <?php echo $dn2_res['message']; ?></td>
                </tr>
            <?php
            }
            //We display the reply form
            ?>
            </table><br />
            <h2>Reply</h2>
            <div class="center">
                <form action="read_msgs.php?id=<?php echo $id; ?>" method="post">
                    <label for="message" class="center">Message</label><br />
                    <textarea cols="40" rows="5" name="message" id="message"></textarea><br />
                    <input type="submit" value="Send" />
                </form>
            </div>
            </div>
            <?php
            }
            }
            else
            {
                echo '<div class="message">You dont have the rights to access this page.</div>';
            }
            }
            }
            else
            {
                echo '<div class="message">This discussion does not exists.</div>';
            }
            }
            else
            {
                echo '<div class="message">The discussion ID is not defined.</div>';
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