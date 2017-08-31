<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM aboutus WHERE about_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['about_id']; ?>' />
        <tr>
            <td>Mission</td>
            <td><textarea name='Mission' cols="40" rows="3" class='form-control'><?php echo $row['Mission']; ?></textarea></td>
        </tr>

        <tr>
            <td>Vision</td>
            <td><textarea name='Vision' cols="40" rows="3" class='form-control'><?php echo $row['Vision']; ?></textarea></td>
        </tr>

        <tr>
            <td>History</td>
            <td><textarea name='History' cols="40" rows="3" class='form-control'><?php echo $row['History']; ?></textarea></td>
        </tr>
		
		<tr>
            <td>Objectives</td>
            <td><textarea name='Objectives' cols="40" rows="3" class='form-control'><?php echo $row['Objectives']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_aboutus" id="btn-update_aboutus">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
