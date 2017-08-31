<?php
session_start(); 
include('check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
	<?php include('link.php'); ?>
	<script type="text/javascript" src="crud_students.js"></script>
</head>
<script type="text/javascript">
function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
}
</script>
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
							$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
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
                    <li>
                        <a href="teacher.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li class="active selected a">
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
                            <li class="active selected a">
                                <a href="#"><i class="fa fa-circle fa-fw"></i>High School<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="selected a">
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
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Grade 7</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <a href="add_grade7.php">
                <button class="btn btn-info" type="button" id="btn-add"> <span class="fa fa-plus-circle"></span> &nbsp; Add Student</button>
            </a>
            <button class="btn btn-info" type="button" name="btn_upselc" disabled="disabled"> <span class="fa fa-pencil"></span> &nbsp; Update Section</button>
			<button class="btn btn-info" type="button" name="btn_delselc" disabled="disabled"> <span class="fa fa-trash-o"></span> &nbsp; Delete</button>
			<a href="pdf list/view_list5.php">
				<button class="btn btn-success">Print Master List</button>
			</a>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Student Table
                        </div>
        <div class="content-loader">
		<form method="post">
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Full Name</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'connection.php';
        $stmt = $db_con->prepare("SELECT DISTINCT a.sgid,a.section_id,a.last_name,a.first_name FROM stud_grade_tbl AS a INNER JOIN grade_tbl AS b LEFT JOIN faculty_tbl AS c ON c.section_id=b.section_id WHERE b.grade_id=a.grade_id && a.section_id = '009'");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            ?>
            <tr>
            <td><?php echo $row['last_name'].", ".$row['first_name']; ?></td>
            <td align="center"> 
            <a id="<?php echo $row['sgid']; ?>" class="edit-link" href="#" title="Edit">
            <i class="fa fa-pencil"></i>
            </a></td>
            <td align="center">
            <a id="<?php echo $row['sgid']; ?>" class="delete-link" href="#" title="Delete">
            <i class="fa fa-trash-o"></i>
            </a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
		</form>
        </div>
        </div>
        </div>
        </div>
        </div>
</body>
</html>