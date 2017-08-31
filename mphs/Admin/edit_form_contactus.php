<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM contactus WHERE cont_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['cont_id']; ?>' />
        <tr>
            <td>Address</td>
            <td><input type='text' name='Address' class='form-control' value='<?php echo $row['Address']; ?>' required></td>
        </tr>

        <tr>
            <td>Contact</td>
            <td><input type='text' name='Contact' class='form-control' value='<?php echo $row['Contact']; ?>' required></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_contactus" id="btn-update_contactus">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
