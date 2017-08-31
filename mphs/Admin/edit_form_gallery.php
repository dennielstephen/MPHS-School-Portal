<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM gallery_tbl WHERE galid=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['galid']; ?>' />
        <tr>
            <td>Gallery Picture</td>
            <td><input class="input-group" type="file" name="gallery_pic" accept="image/*" /></td>
        </tr>

        <tr>
            <td>Gallery Description</td>
            <td><textarea name='gallery_desc' cols="40" rows="3" class='form-control'><?php echo $row['gallery_desc']; ?></textarea></td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_gallery" id="btn-update_gallery">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>

     