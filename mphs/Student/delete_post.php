<?php
$id = 0;
require('conn.php');

if(isset($_GET['deleted'])) {
	$sql="DELETE FROM post_tbl WHERE post_id='{$_GET['id']}'";
	if($conn->query($sql)) {
		header("Refresh: 0; index.php");
	}
}
?>
<input type="hidden" name="postId" value="<?php echo $id ?>">