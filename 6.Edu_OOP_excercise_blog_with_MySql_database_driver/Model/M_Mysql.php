<?php
//
//
//
class M_Mysql
{



    private static $instance;
    //
    //
    //

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Mysql();

        return self::$instance;
    }

    //
    //
    //
    public function Select($table)
    {

        $query = "SELECT * FROM $table";
       $result = mysql_query($query);

        if (!$result)
            die(mysql_error());

        $n = mysql_num_rows($result);
        $arr = array();

        for($i = 0; $i < $n; $i++)
        {
            $row = mysql_fetch_assoc($result);
            $arr[] = $row;
        }

        return $arr;
    }

    //
    //
    //
    public function Insert($table, $object)
    {

        $columns = array();
        $values = array();



        foreach ($object as $key => $value)
        {
            $key = mysql_real_escape_string($key . '');
            $columns[] = $key;

            if ($value === null)
            {
                $values[] = 'NULL';
            }
            else
            {
                $value = mysql_real_escape_string($value . '');
                $values[] = "'$value'";
            }
        }

        $columns_s = implode(',', $columns);
        $values_s = implode(',', $values);



        $query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
        $result = mysql_query($query);

        if (!$result)
            die(mysql_error());

        return mysql_insert_id();

    }

    //
    //
    //
    public function Update($table,$object,$where)
    {

        $sets = array();


        foreach ($object as $key => $value)
        {
            $key = mysql_real_escape_string($key . '');

            if ($value === null)
            {
                $sets[] = "$key=NULL";
                var_dump($sets);
            }
            else
            {
                $value = mysql_real_escape_string($value . '');
                $sets[] = "$key='$value'";
            }
        }

        $sets_s = implode(',', $sets);

        $query = "UPDATE $table SET $sets_s WHERE $where";

        $result = mysql_query($query);

        if (!$result)
            die(mysql_error());

        return mysql_affected_rows();
    }

    //
    //
    //
    public function Delete($table,$where)
    {


     sprintf( mysql_real_escape_string($table), mysql_real_escape_string($where));


        $query = "DELETE FROM $table WHERE $where ";


        $result =  mysql_query($query);

        if (!$result)
            die(mysql_error());

         return mysql_affected_rows();


    }
}
