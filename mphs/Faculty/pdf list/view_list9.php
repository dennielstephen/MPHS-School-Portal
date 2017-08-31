<?php 
session_start(); 
require('../conn.php');

	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM stud_grade_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: ../Student/index.php');
			}
		}
	}
	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM admin_table WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: ../Admin/admin.php');
			}
		}
	}
?>
<?php
if(!isset($_SESSION['user_email'])){ //if login in session is not set
    header("Location: ../login.php");
}
?>
<?php
$sql = "SELECT DISTINCT a.sgid,b.subject_id,a.last_name,a.first_name,d.section FROM stud_grade_tbl AS a INNER JOIN grade_tbl AS b LEFT JOIN faculty_tbl AS c ON c.subject_id=b.subject_id LEFT JOIN section_tbl AS d ON d.section_id=a.section_id WHERE b.grade_id=a.grade_id && c.user_email='".$_SESSION["user_email"]."' && a.section_id = '009'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

require('../../fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("Arial","",16);

$pdf->Cell(0,10,"MASTER LIST",1,1,'C');
$pdf->Cell(0,10,$row["section"],1,1,'C');
$pdf->Multicell(0,4,"");
//$pdf->Cell(139,10,"Name: ",1,0,'C');
$pdf->Cell(277,10,$row['last_name'].", ".$row['first_name'],1,1,'C');
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc())
	{
		$pdf->Cell(277,10,$row['last_name'].", ".$row['first_name'],1,1,'C');
	}
	$pdf->Multicell(0,10,"");
	$pdf->Output();
}
$pdf->Output();
?>