<?php

require_once('dbconfig.php');

class USER
{
    private $conn;
 
    public function __construct()
    {
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
 	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	public function register($grade_id,$stud_id,$section_id,$subject_id,$teacher_id)
	{
		try
		{			
			$stmt = $this->conn->prepare("INSERT INTO grade_tbl(grade_id,stud_id,section_id,subject_id,teacher_id) 
		                                               VALUES(:gid, :sid, :secid, :subid, :tid)");
			$stmt->bindparam(":gid", $grade_id);									  
			$stmt->bindparam(":sid", $stud_id);
			$stmt->bindparam(":secid", $section_id);
			$stmt->bindparam(":subid", $subject_id);
			$stmt->bindparam(":tid", $teacher_id);
				
			$stmt->execute();
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}			
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

   public function redirect($url)
   {
       header("Location: $url");
   }

   public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>