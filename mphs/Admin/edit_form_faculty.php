<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT * FROM faculty_tbl WHERE teacher_id=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['teacher_id']; ?>' />
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='last_name' class='form-control' value='<?php echo $row['last_name']; ?>' required></td>
        </tr>

        <tr>
            <td>First Name</td>
            <td><input type='text' name='first_name' class='form-control' value='<?php echo $row['first_name']; ?>' required></td>
        </tr>

        <tr>
            <td>Subject</td>
            <td><input type='text' name='subject_id' class='form-control' value='<?php echo $row['subject_id']; ?>' required></td>
        </tr>

        <tr>
            <td>Section</td>
            <td><input type='text' name='section_id' class='form-control' value='<?php echo $row['section_id']; ?>' required></td>
        </tr>

        <tr>
            <td>E-Mail</td>
            <td><input type='text' name='user_email' class='form-control' value='<?php echo $row['user_email']; ?>' required></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type='text' name='dec_pass' class='form-control' value='<?php echo $row['dec_pass']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_faculty" id="btn-update_faculty">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr> 
    </table>
</form>
     
