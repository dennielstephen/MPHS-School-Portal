<?php
session_start();
    require('conn.php');

    $sql2 = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
    $result = $conn->query($sql2);
    $row = $result->fetch_assoc();

    $txtpost = $_POST['txtpost'];
    $d=strtotime("+8 Hours");
    $time = date("g:i:s",$d);
    $hr = date("A",$d);
        
    $sql = "INSERT INTO post_tbl(post_id,user_email,user_pic,ufname,ulname,post_msg,post_time,likes) VALUES('','".$row['user_email']."','".$row['user_pic']."','".$row['first_name']."','".$row['last_name']."','$txtpost','".time()."','')";
    if($conn->query($sql)){
        header('refresh:0; index.php');
    }
?>