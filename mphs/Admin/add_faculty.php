<?php
session_start(); 
include('check.php');
?>
<?php
require_once('class_faculty.php');
$user = new USER();

if(isset($_POST['btn-signup']))
{
	$ID = strip_tags($_POST['teacher_id']);
	$LN = strip_tags($_POST['last_name']);
	$FN = strip_tags($_POST['first_name']);
	$Subj = strip_tags($_POST['subject_id']);
	$Sect = strip_tags($_POST['section_id']);
	$UMail = strip_tags($_POST['user_email']);
	$UPass = strip_tags($_POST['user_pass']);
/*----------------------TEACHER    ID-------------------------------------*/
	if($ID=="")	{
		$error[] = "provide Teacher ID !";
	}
	else if(strlen($ID) > 3){
		$error[] = "ID should be less than 3 digits !";
	}
/*----------------------FULL     NAME-------------------------------------*/
	else if($LN=="")	{
		$error[] = "provide Last Name !";	
	}
	else if($FN=="")	{
		$error[] = "provide First Name !";	
	}
/*----------------------SUBJECT    ID-------------------------------------*/
	else if($Subj=="")	{
		$error[] = "provide Subject ID !";	
	}
	else if(strlen($Subj) > 3){
		$error[] = "ID should be less than 3 digits !";
	}
/*----------------------SECTION    ID-------------------------------------*/
	else if($Sect=="")	{
		$error[] = "provide Section ID !";	
	}
	else if(strlen($Sect) > 3){
		$error[] = "ID should be less than 3 digits !";
	}
	else if($Sect > 4 || $Sect < 1){
		$error[] = "ID should range from 1-4 only !";
	}
/*----------------------USER EMAIL/PASS-----------------------------------*/
	else if($UMail=="")	{
		$error[] = "provide E-Mail !";	
	}
	else if(!filter_var($UMail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($UPass=="")	{
		$error[] = "provide Password !";	
	}
	else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{6,}$/', $UPass))
	{
    	$error[] = "The password does not meet the requirements !"."<br>"."Password Requirements: "
    	."<br>"."* &nbsp Must include at least one letter."
    	."<br>"."* &nbsp Must include at least one number."
    	."<br>"."* &nbsp Must not contain any special characters."
    	."<br>"."* &nbsp Must not be less than 6 characters.";
	}

	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT teacher_id,last_name,first_name,subject_id,section_id,user_email,user_pass,dec_pass FROM faculty_tbl WHERE teacher_id=:ID OR user_email=:UE");
			$stmt->execute(array(':ID'=>$ID, ':UE'=>$UMail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['teacher_id']==$ID) {
				$error[] = "ID already used !";
			}
			else if($row['user_email']==$UMail) {
				$error[] = "E-Mail already used !";
			}
			else{
				if($user->register($ID,$LN,$FN,$Subj,$Sect,$UMail,$UPass)){	
					$user->redirect('add_faculty.php?joined');
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
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully added data <a href='faculty.php'>go back</a> here
                 </div>
                 <?php
			}
			?>
        <form class="form-signin" role="form" method="post">
        <input type="text" class="form-control" name="teacher_id" placeholder="Enter Teacher ID (00*)" value="<?php if(isset($error)){echo $ID;}?>" />
        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="<?php if(isset($error)){echo $LN;}?>" />
        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="<?php if(isset($error)){echo $FN;}?>" />
        <input type="text" class="form-control" name="subject_id" placeholder="Enter Subject ID (00*)" value="<?php if(isset($error)){echo $Subj;}?>" />
        <input type="text" class="form-control" name="section_id" placeholder="Enter Section ID (00*)" value="<?php if(isset($error)){echo $Subj;}?>" />
        <input type="text" class="form-control" name="user_email" placeholder="Enter E-Mail" value="<?php if(isset($error)){echo $UMail;}?>" />
        <input type="text" class="form-control" name="user_pass" placeholder="Enter Password" value="<?php if(isset($error)){echo $UPass;}?>" />
        <button type="submit" class="btn btn-primary" name="btn-signup">
           	<i class="glyphicon glyphicon-open-file"></i>&nbsp;ADD
        </button>
	</div>

</body>
</html>