<?php
//
// �������� ������ � ��
//
class MSQL
{
    private static $instance; 	// ������ �� ��������� ������
    
    //
	// ��������� ������������� ���������� (��������)
	//
	public static function Instance()
	{
		if (self::$instance == null)
			self::$instance = new MSQL();
		
		return self::$instance;
	}
	
    //
	// ������� �����
	// $query    	- ������ ����� SQL �������
	// ���������	- ������ ��������� ��������
	//
	public function Select($query)
	{
		$result = mysqli_query(Startup::getObject(),$query);
		
		if (!$result)
			die(mysqli_error(Startup::getObject()));
		
		$n = mysqli_num_rows($result);
		$arr = array();
	
		for($i = 0; $i < $n; $i++)
		{
			$row = mysqli_fetch_assoc($result);
			$arr[] = $row;
		}

		return $arr;				
	}
	
	//
	// ������� ������
	// $table 		- ��� �������
	// $object 		- ������������� ������ � ������ ���� "��� ������� - ��������"
	// ���������	- ������������� ����� ������
	//
	public function Insert($table, $object)
	{			
		$columns = array();
		$values = array();
	
		foreach ($object as $key => $value)
		{
			$key = mysqli_real_escape_string(Startup::getObject(),$key . '');
			$columns[] = $key;
			
			if ($value === null)
			{
				$values[] = 'NULL';
			}
			else
			{
				$value = mysqli_real_escape_string(Startup::getObject(),$value . '');
				$values[] = "'$value'";
			}
		}
		
		$columns_s = implode(',', $columns);
		$values_s = implode(',', $values);
			
		$query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
		$result = mysqli_query(Startup::getObject(),$query);
								
		if (!$result)
			die(mysqli_error(Startup::getObject()));
			
		return mysqli_insert_id(Startup::getObject());
	}
	
	//
	// ��������� �����
	// $table 		- ��� �������
	// $object 		- ������������� ������ � ������ ���� "��� ������� - ��������"
	// $where		- ������� (����� SQL �������)
	// ���������	- ����� ���������� �����
	//	
	public function Update($table, $object, $where)
	{
		$sets = array();
	
		foreach ($object as $key => $value)
		{
			$key = mysqli_real_escape_string(Startup::getObject(),$key . '');
			
			if ($value === null)
			{
				$sets[] = "$key=NULL";			
			}
			else
			{
				$value = mysqli_real_escape_string(Startup::getObject(),$value . '');
				$sets[] = "$key='$value'";			
			}			
		}
		
		$sets_s = implode(',', $sets);			
		$query = "UPDATE $table SET $sets_s WHERE $where";
		$result = mysqli_query(Startup::getObject(),$query);
		
		if (!$result)
			die(mysqli_error(Startup::getObject()));

		return mysqli_affected_rows(Startup::getObject());
	}
	
	//
	// �������� �����
	// $table 		- ��� �������
	// $where		- ������� (����� SQL �������)	
	// ���������	- ����� ��������� �����
	//		
	public function Delete($table, $where)
	{
		$query = "DELETE FROM $table WHERE $where";		
		$result = mysqli_query(Startup::getObject(),$query);
						
		if (!$result)
			die(mysqli_error(Startup::getObject()));

		return mysqli_affected_rows(Startup::getObject());
	}
}
