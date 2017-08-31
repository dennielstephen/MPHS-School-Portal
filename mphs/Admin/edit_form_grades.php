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
            <td>Student ID</td>
            <td><input type='text' name='stud_id' class='form-control' value='<?php echo $row['stud_id']; ?>' required></td>
        </tr>

        <tr>
            <td>Section ID</td>
            <td><input type='text' name='section_id' class='form-control' value='<?php echo $row['section_id']; ?>' required></td>
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
     
