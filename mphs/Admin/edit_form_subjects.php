<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM subject_tbl WHERE subid=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['subid']; ?>' />
        <tr>
            <td>Subject ID</td>
            <td><input type='text' name='subject_id' class='form-control' value='<?php echo $row['subject_id']; ?>' required></td>
        </tr>

        <tr>
            <td>Subject</td>
            <td><input type='text' name='subject' class='form-control' value='<?php echo $row['subject']; ?>' required></td>
        </tr>
        
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_subjects" id="btn-update_subjects">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
