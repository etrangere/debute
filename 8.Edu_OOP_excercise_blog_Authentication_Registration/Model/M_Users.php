<?php
//
// Users manager
//
class M_Users
{	
	private static $instance;	// экземпляр класса
	private $m_msql;				// драйвер БД
	private $sid;				// идентификатор текущей сессии
	private $uid;				// идентификатор текущего пользователя
	
	//
	// Demande for class example
	// result	-  MSQL class example
	//

	public static function Instance()
	{
		if (self::$instance == null)
			self::$instance = new M_Users();
			
		return self::$instance;
	}

	//
	// Constructor
	//
	public function __construct()
	{
		$this->m_msql = M_Mysql::Instance();
		$this->sid = null;
		$this->uid = null;
	}
    //
    // Registration
    //

	public function Registration($f_name,$l_name,$e_mail,$password_1,$password_2,$id_role)
    {

        // Prepare.
        $f_name = trim($f_name);
        $l_name = trim($l_name);
        $e_mail = trim($e_mail);
        $password_1 = trim($password_1);
        $password_2 = trim($password_2);
        $password_1 = md5($password_1);
        $password_2 = md5($password_2);
        $id_role = trim($id_role);

        if (md5($password_1) != md5($password_2))
            return false;

        // Check.
        if ($e_mail == '')
            return false;

        // Query.

        $query = sprintf(
            mysqli_real_escape_string(C_Base::getObject(),$e_mail),
            mysqli_real_escape_string(C_Base::getObject(),$password_1),
            mysqli_real_escape_string(C_Base::getObject(),$id_role),
            mysqli_real_escape_string(C_Base::getObject(),$f_name),
            mysqli_real_escape_string(C_Base::getObject(),$l_name));

        $object = array();
        $object['login']= $e_mail;
        $object['password']= $password_1;
        $object['id_role']= $id_role;
        $object['f_name']= $f_name;
        $object['l_name']= $l_name;

        $table='users';

        $this->m_msql->Insert($table,$object);
        return true;



    }


	//
	// Clean not used sessions
	// 
	public function ClearSessions()
	{
		$min = date('Y-m-d H:i:s', time() - 60 * 20); 			
		$t = "time_last < '%s'";
		$where = sprintf($t, $min);
		$this->m_msql->Delete('sessions', $where);
	}

	//
	// Authentication
	// $login
	// $password
	// $remember 	- as we need to save in cookies
	// result	- true or false
	//
	public function Login($login, $password, $remember = true)
	{
				// БД Find user from db

        // Remember name and  md5(password)
        if ($remember)
        {
            $expire = time() + 3600 * 24 * 100;
            setcookie('login', $login, $expire);
            setcookie('password', md5($password), $expire);
        }

        $user = $this->GetByLogin($login);

        if ($user == null)
		{
            return false;

        }

        //var_dump($password);

		$id_user = $user['id_user'];

		// Check password
		if ($user['password'] != md5($password))
		{
            return false;
        }



		// Open session and remember SID
		$this->sid = $this->OpenSession($id_user);
		
		return true;
	}
	
	//
	// Logout
	//
	public function Logout()
	{
		setcookie('login', '', time() - 1);
		setcookie('password', '', time() - 1);
		unset($_COOKIE['login']);
		unset($_COOKIE['password']);
		unset($_SESSION['sid']);		
		$this->sid = null;
		$this->uid = null;
	}
						
	//
	// Receiving user
	// $id_user		- if no user , we keep actual
	// result	- user object
	//
	public function Get($id_user = null)
	{	
		// If id_user not mentioned,we bring it from actual session.
		if ($id_user == null)
			$id_user = $this->GetUid();
			
		if ($id_user == null)
			return null;
			
		//  Now we just give back user as id_user.
		$t = "SELECT * FROM users WHERE id_user = '%d'";
		$query = sprintf($t, $id_user);
		$result = $this->m_msql->Select($query);
		return $result[0];		
	}
	
	//
	// Find user by login
	//
	public function GetByLogin($login)
	{

		$t = "SELECT * FROM users WHERE login='%s'";
		$query = sprintf($t, mysqli_real_escape_string(C_Base::getObject(),$login));
		$result = $this->m_msql->Select($query);

		//var_dump($result);
		return $result[0];
	}
			
	//
	// Checking privileges
	// $priv 		- name of priv.
	// $id_user		- if no id_user so it is the actual user
	// result	- true or false
	//
	public function Can($priv, $id_user = null)
	{
        if ($id_user == null)
            $id_user = $this->GetUid();

        if ($id_user == null)
            return false;

        $t = "SELECT count(*) as cnt FROM privs2roles p2r
			  LEFT JOIN users u ON u.id_role = p2r.id_role
			  LEFT JOIN privs p ON p.id_priv = p2r.id_priv 
			  WHERE u.id_user = '%d' AND p.name = '%s'";

        $query  = sprintf($t, $id_user, $priv);
        $result = $this->m_msql->Select($query);
       // var_dump($result);
        return ($result[0]['cnt'] > 0);

	}

	//
	// Checking user activity
	// $id_user		- identificator
	// result	- true if online
	//
	public function IsOnline($id_user)
	{
        if ($this->onlineMap == null)
        {
            $t = "SELECT DISTINCT id_user FROM sessions";
            $query  = sprintf($t, $id_user);
            $result = $this->m_msql->Select($query);

            foreach ($result as $item)
                $this->onlineMap[$item['id_user']] = true;
        }

        return ($this->onlineMap[$id_user] != null);
	}
	
	//
	// Find id of actual user
	// result user id	- UID
	//
	public function GetUid()
	{	
		// Checking cache
		if ($this->uid != null)
			return $this->uid;	

		// Bring from actual session
		$sid = $this->GetSid();
				
		if ($sid == null)
			return null;
			
		$t = "SELECT id_user FROM sessions WHERE sid = '%s'";
		$query = sprintf($t, mysqli_real_escape_string(C_Base::getObject(),$sid));
		$result = $this->m_msql->Select($query);
				
		// If no session finded so it means the user is not authenticated
		if (count($result) == 0)
			return null;
			
		// If it finded we save it
		$this->uid = $result[0]['id_user'];
		return $this->uid;
	}

	//
	// Function returns the identificator of actual session.
	// the result is 	- SID
	//
	private function GetSid()
	{
		// Checking cashe
		if ($this->sid != null)
			return $this->sid;
	
		// Searching SID in session
		$sid = $_SESSION['sid'];
								
		// If finded we will trying update time_last
		// Same time check if there is session there
		if ($sid != null)
		{
			$session = array();
			$session['time_last'] = date('Y-m-d H:i:s'); 			
			$t = "sid = '%s'";
			$where = sprintf($t, mysqli_real_escape_string(C_Base::getObject(),$sid));
			$affected_rows = $this->m_msql->Update('sessions', $session, $where);

			if ($affected_rows == 0)
			{
				$t = "SELECT count(*) FROM sessions WHERE sid = '%s'";		
				$query = sprintf($t, mysqli_real_escape_string(C_Base::getObject(),$sid));
				$result = $this->m_msql->Select($query);
				
				if ($result[0]['count(*)'] == 0)
					$sid = null;			
			}			
		}		
		
		// If no session we searching login and md5(password) in cookies

		// trying to connect
		if ($sid == null && isset($_COOKIE['login']))
		{
			$user = $this->GetByLogin($_COOKIE['login']);
			
			if ($user != null && $user['password'] == $_COOKIE['password'])
				$sid = $this->OpenSession($user['id_user']);
		}
		
		// Keeping in cash
		if ($sid != null)
			$this->sid = $sid;
		
		// return , SID.
		return $sid;		
	}
	
	//
	// Opening new session
	// result	- SID
	//
	private function OpenSession($id_user)
	{
		// Generating  SID
		$sid = $this->GenerateStr(10);
				
		// Inserting SID to db
		$now = date('Y-m-d H:i:s'); 
		$session = array();
		$session['id_user'] = $id_user;
		$session['sid'] = $sid;
		$session['time_start'] = $now;
		$session['time_last'] = $now;				
		$this->m_msql->Insert('sessions', $session);
				
		// Registering session in php session
		$_SESSION['sid'] = $sid;				
				
		// Return SID
		return $sid;

	}

	//
	// Generating phrase
	// $length 		-
	// result	-  generate spontain phrase
	//
	private function GenerateStr($length = 10) 
	{
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
		$code = "";
		$clen = strlen($chars) - 1;  

		while (strlen($code) < $length) 
            $code .= $chars[mt_rand(0, $clen)];  

		return $code;
	}
}
