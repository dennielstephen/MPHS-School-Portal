<?php
include_once 'connection.php';

if($_GET['edit_id'] && !empty($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM index_tbl WHERE iid=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	extract($row);
}
?>
<style type="text/css">
#dis{
	display:none;
}
textarea {
    resize: none;
}
</style>
    <div id="dis">
	</div>
	<form method='post' id='emp-UpdateForm' action='#' enctype="multipart/form-data">
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['iid']; ?>' />
		<tr>
            <td>Index Picture</td>
            <td><input type="file" name="file" accept="image/*" /></td>
        </tr>
		
        <tr>
            <td>Picture Name</td>
            <td><textarea name='pic_desc' cols="40" rows="3" class='form-control'><?php echo $row['pic_desc']; ?></textarea></td>
        </tr>
		
		<tr>
            <td>Picture Description</td>
            <td><textarea name='desc_pic' cols="40" rows="3" class='form-control'><?php echo $row['desc_pic']; ?></textarea></td>
        </tr>
		
		<tr>
            <td>Carousel Text</td>
            <td><textarea name='text' cols="40" rows="3" class='form-control'><?php echo $row['text']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_home" id="btn-update_home" onClick="myFunction();">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
    </form>
     
?>