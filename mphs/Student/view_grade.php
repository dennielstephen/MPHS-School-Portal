<?php 
session_start(); 
require('conn.php');

	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM faculty_tbl WHERE user_email='".$_SESSION["user_email"]."'";
		$result = $conn->query($sql);
	
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				header('Location: ../Faculty/teacher.php');
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
$sql = "SELECT b.gid,a.last_name,a.first_name,c.subject,b.1stQA,b.2ndQA,b.3rdQA,b.4thQA,d.section FROM stud_grade_tbl AS a INNER JOIN grade_tbl AS b LEFT JOIN subject_tbl AS c ON b.subject_id=c.subject_id LEFT JOIN section_tbl AS d ON d.section_id=a.section_id WHERE b.grade_id=a.grade_id && a.user_email='".$_SESSION["user_email"]."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

require('../fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("Arial","",16);

$pdf->Cell(0,10,"GRADES",1,1,'C');
$pdf->Multicell(0,2,"");
$pdf->Cell(139,10,"Name: ",1,0,'C');
$pdf->Cell(138,10,$row['last_name'].", ".$row['first_name'],1,1,'C');
$pdf->Cell(139,10,"Year/Level: ",1,0,'C');
$pdf->Cell(138,10,$row['section'],1,1,'C');
$pdf->Cell(70,10,"Subject",1,0,'C');
$pdf->Cell(39,10,"First Quarter",1,0,'C');
$pdf->Cell(45,10,"Second Quarter",1,0,'C');
$pdf->Cell(41,10,"Third Quarter",1,0,'C');
$pdf->Cell(42,10,"Fourth Quarter",1,0,'C');
$pdf->Cell(40,10,"Final Grade",1,1,'C');
$pdf->Cell(70,10,$row['subject'].": ",1,0,'C');
$pdf->Cell(39,10,$row['1stQA'],1,0,'C');
$pdf->Cell(45,10,$row['2ndQA'],1,0,'C');
$pdf->Cell(41,10,$row['3rdQA'],1,0,'C');
$pdf->Cell(42,10,$row['4thQA'],1,0,'C');
$pdf->Cell(40,10,($row['1stQA']+$row['2ndQA']+$row['3rdQA']+$row['4thQA'])/4,1,1,'C');

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc())
	{
		$pdf->Cell(70,10,$row['subject'].": ",1,0,'C');
		$pdf->Cell(39,10,$row['1stQA'],1,0,'C');
		$pdf->Cell(45,10,$row['2ndQA'],1,0,'C');
		$pdf->Cell(41,10,$row['3rdQA'],1,0,'C');
		$pdf->Cell(42,10,$row['4thQA'],1,0,'C');
		$pdf->Cell(40,10,($row['1stQA']+$row['2ndQA']+$row['3rdQA']+$row['4thQA'])/4,1,1,'C');
	}
	$pdf->Multicell(0,10,"");
	$pdf->Cell(0,10,"Adviser's Signature: _______________                                                   Parent's Signature: _______________",0);
	$pdf->Output();
}
?>