<?php
session_start(); 
include('check.php');
?>
<?php
require_once('cs/class_students3.php');
$user = new USER();

if(isset($_POST['btn-signup']))
{
	$sid = strip_tags($_POST['stud_id']);
	$LN = strip_tags($_POST['last_name']);
	$FN = strip_tags($_POST['first_name']);
/*----------------------STUDENT    ID-------------------------------------*/
	if($sid=="")	{
		$error[] = "provide Student ID !";	
	}
	else if(strlen($sid) > 3){
		$error[] = "ID should be less than 3 digits !";
	}
/*----------------------FULL     NAME-------------------------------------*/
	else if($LN=="")	{
		$error[] = "provide Last Name !";	
	}
	else if($FN=="")	{
		$error[] = "provide First Name !";	
	}

	else
	{
		try
		{
			$sql = "SELECT grade_id,stud_id,last_name,first_name,section_id,user_email,user_pass,dec_pass FROM stud_grade_tbl WHERE stud_id=:sid OR grade_id=:gid OR user_email=:ue";
			$stmt = $user->runQuery($sql);
			$stmt->execute(array(':sid'=>$sid));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($row['stud_id']==$sid) {
				$error[] = "Student ID already used";
			}
			else if($row['grade_id']==$gid) {
				$error[] = "Grade ID already used";
			}
			else if($row['user_email']==$UMail) {
				$error[] = "E-Mail already used";
			}
			else{
				if($user->register($sid,$LN,$FN)){	
					$user->redirect('add_grade3.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<!DOCTYPE html">
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/portalLogo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<br>
<br>
<link rel="stylesheet" type="text/css" href="../login.css" />
    <div class="container">
		<center><img src="../pictures/head.png"></center>
		<?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully added data <a href='3_teacher_students.php'>go back</a> here
                 </div>
                 <?php
			}
			?>
        <form class="form-signin" role="form" method="post">
		Student ID: <input type="text" class="form-control" name="stud_id" placeholder="Enter Student ID (00*)" value="<?php if(isset($error)){echo $sid;}?>" />
		First Name: <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="<?php if(isset($error)){echo $FN;}?>" />
        Last Name: <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="<?php if(isset($error)){echo $LN;}?>" />
        <button type="submit" class="btn btn-primary" name="btn-signup">		
           	<i class="glyphicon glyphicon-open-file"></i>&nbsp;ADD
        </button>
	</div>

</body>
</html>