<?php
session_start(); 
include('check.php');
?>
<?php
require_once('class_subjects.php');
$user = new USER();

if(isset($_POST['btn-signup']))
{
	$subid = strip_tags($_POST['subject_id']);
	$subject = strip_tags($_POST['subject']);
/*----------------------SUBJECT    ID-------------------------------------*/
	if($subid=="")	{
		$error[] = "provide Subject ID !";
	}
	else if(strlen($subid) > 3){
		$error[] = "ID should be less than 3 digits !";
	}
/*----------------------SUBJECT    ID-------------------------------------*/
	else if($subject=="")	{
		$error[] = "provide Subject !";	
	}


	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT subject_id,subject,teacher_id FROM subject_tbl WHERE subject_id=:subid OR subject=:subj");
			$stmt->execute(array(':subid'=>$subid, ':subj'=>$subject));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['subject_id']==$subid) {
				$error[] = "ID already used !";
			}
			else if($row['subject']==$subject) {
				$error[] = "Subject already has a teacher !";
			}
			else{
				if($user->register($subid,$subject)){	
					$user->redirect('add_subject.php?joined');
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
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully added data <a href='subjects.php'>go back</a> here
                 </div>
                 <?php
			}
			?>
        <form class="form-signin" role="form" method="post">
        <input type="text" class="form-control" name="subject_id" placeholder="Enter Subject ID (00*)" value="<?php if(isset($error)){echo $subid;}?>" />
        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" value="<?php if(isset($error)){echo $subject;}?>" />
        <button type="submit" class="btn btn-primary" name="btn-signup">
           	<i class="glyphicon glyphicon-open-file"></i>&nbsp;ADD
        </button>
	</div>

</body>
</html>