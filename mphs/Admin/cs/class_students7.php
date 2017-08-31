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
	public function register($grade_id,$stud_id,$last_name,$first_name,$section_id,$user_email,$user_pass,$dec_pass)
	{
		try
		{
			$section = 005;
			$new_password = md5($user_pass);
			$sql = "INSERT INTO stud_grade_tbl(grade_id,stud_id,last_name,first_name,section_id,user_email,user_pass,dec_pass) VALUES(:gid, :ID, :LN, :FN, :Sect, :UE, :UP, :dUP)";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindparam(":gid", $grade_id);
			$stmt->bindparam(":ID", $stud_id);
			$stmt->bindparam(":LN", $last_name);
			$stmt->bindparam(":FN", $first_name);
			$stmt->bindparam(":Sect", $section);
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