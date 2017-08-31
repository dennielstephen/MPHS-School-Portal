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
	public function register($umail,$Password)
	{
		try
		{
			$new_password = md5($user_password);
			
			$stmt = $this->conn->prepare("INSERT INTO users(user_email,user_pass) 
		                                               VALUES(:uname, :umail, :upass)");
												  
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);										  
				
			$stmt->execute();
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	public function doLogin($umail,$Password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT id2,user_email,user_pass FROM stud_grade_tbl UNION ALL SELECT id5,user_email,user_pass FROM faculty_tbl WHERE user_email=:umail ");
			$stmt->execute(array(':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($Password, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['id2'];
					return true;
				}
				else
				{
					return false;
				}
			}
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