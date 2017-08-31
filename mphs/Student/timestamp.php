<?php
$sql2 = "SELECT * FROM post_tbl";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
$row2 = $result2->fetch_assoc();

$seconds = time() - $row['post_time'];
$minutes = round($seconds / 60);
$hours = round($seconds / 3600);
$days = round($seconds / 86400);
$weeks = round($seconds / 604800);
$months = round($seconds / 2419200);
$years = round($seconds / 29030400);

$date=date_create();
date_timestamp_set($date, $row['post_time']);
if ($seconds <= 60) {
    echo time() - $row['post_time']." seconds ago";
}
else if(($seconds / 60) <= 60){
    if ($minutes == 1) {
        echo"one minute ago";
    } else {
        echo"$minutes minutes ago";
    }
}
else if ($hours <= 24) {
    if ($hours == 1) {
        echo"1 hour ago";
    } else {
        echo"$hours hours ago";
    }
}
else if ($days <= 7) {
    if ($days == 1) {
        echo"Yesterday ".date_format($date,"\@ g:i a");
    } else {
        echo date_format($date, "F j \@ g:i a Y");
    }
}
else if ($weeks <= 4) {
    if ($weeks == 1) {
        echo"1 week ago";
    } else {
        echo"$weeks weeks ago";
    }
}
else if ($months <= 12) {
    if ($months == 1) {
        echo date_format($date, "l jS F \@ g:i a Y");
    } else {
        echo date_format($date, "F j \@ g:i a Y");
    }
} else {
    if ($years == 1) {
        echo date_format($date, "l jS F \@ g:i a Y");
    } else {
        echo date_format($date, "F j \@ g:i a Y");
    }
}
}
?>