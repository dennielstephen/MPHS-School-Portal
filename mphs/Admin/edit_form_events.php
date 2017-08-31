<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM announcements WHERE ann_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['ann_id']; ?>' />
        <tr>
            <td>Announcements</td>
            <td><textarea name='Announcement' cols="40" rows="3" class='form-control'><?php echo $row['Announcement']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_events" id="btn-update_events">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
