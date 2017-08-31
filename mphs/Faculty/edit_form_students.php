<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM stud_grade_tbl WHERE sgid=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['sgid']; ?>' />
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='last_name' class='form-control' value='<?php echo $row['last_name']; ?>' required></td>
        </tr>

        <tr>
            <td>First Name</td>
            <td><input type='text' name='first_name' class='form-control' value='<?php echo $row['first_name']; ?>' required></td>
        </tr>

        <tr>
            <td>Section</td>
            <td><input type='text' name='section_id' class='form-control' value='<?php echo $row['section_id']; ?>' required></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_students" id="btn-update_students">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
