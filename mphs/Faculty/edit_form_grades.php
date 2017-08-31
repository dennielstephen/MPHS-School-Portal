<?php
include_once 'connection.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];
	$stmt=$db_con->prepare("SELECT DISTINCT a.*,b.* FROM stud_grade_tbl AS a INNER JOIN grade_tbl AS b LEFT JOIN faculty_tbl AS c ON c.subject_id=b.subject_id WHERE b.gid=:id");
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
            <td>First Name</td>
            <td><input type='text' name='first_name' class='form-control' value='<?php echo $row['first_name']; ?>' required></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type='text' name='last_name' class='form-control' value='<?php echo $row['last_name']; ?>' required></td>
        </tr>

        <tr>
            <td>First Quarter Ave.</td>
            <td><input type='text' name='1stQA' class='form-control' value='<?php echo $row['1stQA']; ?>' required></td>
        </tr>

        <tr>
            <td>Second Quarter Ave.</td>
            <td><input type='text' name='2ndQA' class='form-control' value='<?php echo $row['2ndQA']; ?>' required></td>
        </tr>

        <tr>
            <td>Third Quarter Ave.</td>
            <td><input type='text' name='3rdQA' class='form-control' value='<?php echo $row['3rdQA']; ?>' required></td>
        </tr>

        <tr>
            <td>Fourth Quarter Ave.</td>
            <td><input type='text' name='4thQA' class='form-control' value='<?php echo $row['4thQA']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update_grades" id="btn-update_grades">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
