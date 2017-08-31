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
	public function register($stud_id,$last_name,$first_name,$section_id)
	{
		try
		{
			$section = 001;
			$new_password = md5($user_pass);
			$sql = "INSERT INTO stud_grade_tbl(stud_id,last_name,first_name,section_id) VALUES(:ID, :LN, :FN, :Sect)";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindparam(":ID", $stud_id);
			$stmt->bindparam(":LN", $last_name);
			$stmt->bindparam(":FN", $first_name);
			$stmt->bindparam(":Sect", $section);
				
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