<?php//// �������� ������//class M_Articles{	private static $instance; // ������ �� ��������� ������	//	// ��������� ������������� ���������� (��������).	//	public static function Instance()	{		if (self::$instance == null)			self::$instance = new M_Articles();				return self::$instance;	}	//	// ������ ���� ������	//	public function All()	{		// ������.		$query = "SELECT * 				  FROM articles 				  ORDER BY id_article DESC";				  		$result = mysql_query($query);										if (!$result)			die(mysql_error());				// ���������� �� ��.		$n = mysql_num_rows($result);		$articles = array();		for ($i = 0; $i < $n; $i++)		{			$row = mysql_fetch_assoc($result);					$articles[] = $row;		}				return $articles;	}	//	// ���������� ������	//	public function Get($id_article)	{		// ������.		$t = "SELECT * 			  FROM articles 			  WHERE id_article = '%d'";			  		$query = sprintf($t, $id_article);				$result = mysql_query($query);											if (!$result)			die(mysql_error());				// ���������� �� ��.		$article = mysql_fetch_assoc($result);							return $article;	}	//	// �������� ������	//	public function Add($title, $content)	{		// ����������.		$title = trim($title);		$content = trim($content);		// ��������.		if ($title == '')			return false;				// ������.		$t = "INSERT INTO articles (title, content) 			  VALUES ('%s', '%s')";				$query = sprintf($t, 						 mysql_real_escape_string($title),						 mysql_real_escape_string($content));				$result = mysql_query($query);										if (!$result)			die(mysql_error());					return true;	}	//	// �������� ������	//	public function Edit($id_article, $title, $content)	{		// ����������.		$title = trim($title);		$content = trim($content);		// ��������.		if ($title == '')			return false;				// ������.		$t = "UPDATE articles			  SET title = '%s', content = '%s'			  WHERE id_article = '%d'";				$query = sprintf($t,					 						 mysql_real_escape_string($title),						 mysql_real_escape_string($content),						 $id_article);				$result = mysql_query($query);				if (!$result)			die(mysql_error());				return true;	}	//	// ������� ������	//	public function Delete($id_article)	{		$t = "DELETE FROM articles 				  WHERE id_article = '%d'";		$query = sprintf($t, $id_article);				$result = mysql_query($query);				if (!$result)			die(mysql_error());				return true;	}}