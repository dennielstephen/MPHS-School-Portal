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
	public function register($teacher_id,$last_name,$first_name,$subject_id,$section_id,$user_email,$user_pass,$dec_pass)
	{
		try
		{
			$new_password = md5($user_pass);

			$stmt = $this->conn->prepare("INSERT INTO faculty_tbl(teacher_id,last_name,first_name,subject_id,section_id,user_email,user_pass,dec_pass) 
		                                               VALUES(:ID, :LN, :FN, :Subj, :Sect, :UE, :UP, :dUP)");
			$stmt->bindparam(":ID", $teacher_id);
			$stmt->bindparam(":LN", $last_name);
			$stmt->bindparam(":FN", $first_name);
			$stmt->bindparam(":Subj", $subject_id);
			$stmt->bindparam(":Sect", $section_id);
			$stmt->bindparam(":UE", $user_email);
			$stmt->bindparam(":UP", $new_password);
			$stmt->bindparam(":dUP", $user_pass);
				
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