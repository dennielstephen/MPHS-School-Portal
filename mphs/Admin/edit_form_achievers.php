<?php
include_once 'connection.php';

if($_GET['edit_id'] && !empty($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM achievers WHERE ach_id=:id");
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
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['ach_id']; ?>' />
		<tr>
            <td>Achiever Picture</td>
            <td><input class="input-group" type="file" name="ach_pic" accept="image/*" /></td>
        </tr>
		
        <tr>
            <td>Achiever Description</td>
            <td><textarea name='pic_desc' cols="40" rows="3" class='form-control'><?php echo $row['pic_desc']; ?></textarea></td>
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
     
